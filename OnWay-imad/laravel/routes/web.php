<?php


use App\Http\Controllers\Controller;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostulateController;
use App\Http\Controllers\UserController;

use App\Jobs\SlowJob;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\JobSeekerController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RecruiterController;
use App\Models\Postulate;
use App\Models\Recruiter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('jobseekers', JobSeekerController::class);
Route::resource('recruiters', RecruiterController::class);
Route::get('/logout', [Controller::class,'logout'])->name('app.logout');

Route::get('/cv/{filename}', [FileController::class,"cv"])->name('file.cv');
Route::get('/picture/{filename}', [FileController::class,"picture"])->name('file.picture');
Route::get('/overview/{filename}', [FileController::class,"overview"])->name('file.overview');

Route::resource('users', UserController::class);
Route::resource('offers', OfferController::class);
Route::get('/get-offer-details/{id}', [OfferController::class,"getOfferDetails"])->name('get.offer.details');
Route::get('/load-more-offers', [OfferController::class,"loadMoreOffers"]);
Route::resource('postulate', PostulateController::class);

Route::middleware(["auth"])->group(function() {
    Route::get('/emp', function () {
        return view('emp');
    })->name('emp');

    Route::get('/',[OfferController::class,'index'])->name('home');

    Route::get('/career',function () {
        return view('career');
    })->name('career');

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



   Route::get('/chat/{id}',[ChatController::class,"Chat"]);
    Route::post('/chat/{id}',[ChatController::class,"SendMessage"]);
    Route::post('/pusher/auth',[ChatController::class,"auth"]);
    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/community',[CommunityController::class,"ChatForm"]);
    Route::post('/community',[CommunityController::class,"SharePost"])
    ->name('send');








});





require __DIR__.'/auth.php';
