<?php

namespace App\Http\Controllers;


use App\Http\Requests\JobSeekerRequest;
use App\Http\Requests\UserRequest;
use App\Services\JobSeekerService;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\jobseeker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class JobSeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('chat',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobseeker.create');
    }

     /**
      * Store a newly created resource in storage.
      */
     public function store(JobSeekerRequest $jb_request,JobSeekerService $jb_service)
     {


         $data = $jb_request->validated();

         if ($jb_request->hasFile('cv') && $jb_request->hasFile('picture')) {
             $cvFileName = 'cv_' . time() . '.' . $jb_request->file('cv')->getClientOriginalExtension();
             $jb_request->file('cv')->storeAs('jobseekers_cv', $cvFileName, 'public');
             $pictureFileName = 'picture_' . time() . '.' . $jb_request->file('picture')->getClientOriginalExtension();
             $jb_request->file('picture')->storeAs('pictures', $pictureFileName, 'public');
             $data['cv'] = $cvFileName;
             $data['picture'] = $pictureFileName;
             $jb = $jb_service->store($data);
         }



         return redirect()->route('login')->with('success', 'JobSeeker');
     }
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jobseeker $jobseeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jobseeker $jobseeker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jobseeker $jobseeker)
    {
        //
    }
}
