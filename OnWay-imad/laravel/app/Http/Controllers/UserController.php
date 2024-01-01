<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use App\Models\Offer;
use App\Models\Postulate;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {  
        if($user->role == 'recruiter'){
            $offers = Offer::where('recruiter_id',$user->recruiter->recruiter_id)->get();
           return view('recruiter.show',['user'=>$user,'offers'=>$offers]); 
        } 
        else{
            $postulates = Postulate::where('seeker_id',$user->jobseeker->seeker_id)
            ->join('offers','offers.offer_id','postulates.offer_id')
            ->get();
            return view('jobseeker.show',['user'=>$user,'postulates'=>$postulates]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
