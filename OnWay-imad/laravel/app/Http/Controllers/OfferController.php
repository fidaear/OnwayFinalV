<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offer;
use App\Models\JobSeeker;
use App\Models\Postulate;
use Illuminate\Http\Request;
use App\Services\OfferService;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, OfferService $offerService)
    {
        $offerService->CreateOffer($request);
        return redirect()->back()->with('success','You Offer has been created');



    }

    /**
     * Display a listing of the resource.
     */
    public function index(OfferService $o)
    {

        $offers = $o->Offers();
        return view('jobpost',['offers'=>$offers]);

    }

    public function getOfferDetails($id)
    {
        $offer = Offer::where('offer_id',$id)
        ->get();
        $test = Postulate::where('offer_id',$id)->get();
        return response()->json(['offer' => $offer[0],'test'=>$test]);
    }
    public function loadMoreOffers(OfferService $o)
    {

        $moreOffers = $o->Offers();

        return response()->json($moreOffers);
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

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
