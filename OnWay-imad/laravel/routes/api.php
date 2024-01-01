<?php

use Pusher\Pusher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// https://stackoverflow.com/questions/55555844/authorizing-broadcasting-channel-in-an-spa
Route::post('/broadcasting/auth', function (Request $request) {
    $pusher = new Pusher(
        env('PUSHER_APP_KEY'),
        env('PUSHER_APP_SECRET'),
        env('PUSHER_APP_ID'),
        [
            'cluster' => env('PUSHER_APP_CLUSTER')
        ]
    );

    // This will return JSON response: {auth:"__KEY__"}, see comment below
    // https://pusher.com/docs/channels/server_api/authenticating-users
    $response = $pusher->socket_auth($request->request->get('channel_name'), $request->request->get('socket_id'));

    return $response;
})->middleware('auth:sanctum');
