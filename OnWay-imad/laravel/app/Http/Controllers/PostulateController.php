<?php

namespace App\Http\Controllers;

use App\Models\JobSeeker;
use App\Models\Postulate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostulateController extends Controller
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
        $offerId = $request->input('offer_id');
        $seekerId = JobSeeker::where('user_id', Auth::id() )->get();
        $postulate = Postulate::create([
            'offer_id' => $offerId,
            'seeker_id' =>$seekerId[0]->seeker_id,
            'statusPostulate' => false,
        ]);

        return response()->json(['message' => 'Postulate created successfully']);
    }


    /**
     * Display the specified resource.
     */
    public function show(Postulate $postulate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Postulate $postulate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Postulate $postulate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Postulate $postulate)
    {
        //
    }
}
