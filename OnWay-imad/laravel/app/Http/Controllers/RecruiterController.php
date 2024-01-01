<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Recruiter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\RecruiterService;

class RecruiterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RecruiterService $recruiterService)
    {
        return view('recruiter',['recruiterName' => $recruiterService->getRecruiterName()]);
    }
    

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'industry_type' => 'required|string|max:60',
            'company_size' => 'required|string|max:60',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4',
            'location' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_website' => 'nullable|string|max:255',
            'mobile_number' => 'nullable|string|max:20',
            'about_company' => 'nullable|string',
            'company_overview_file' => 'nullable|mimes:pdf,doc,docx|max:2048',
            'terms_and_conditions' => 'accepted',
       ]);

        $overFileName = 'over_' . time() . '.' . $request->file('company_overview_file')->getClientOriginalExtension();
        $request->file('company_overview_file')->storeAs('company_overviews', $overFileName, 'public');

        $pictureFileName = 'picture_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('pictures', $pictureFileName, 'public');

       $user_id = Str::uuid();
       $recruiter_id = Str::uuid();
       // Création
        User::create([
           'id' => $user_id,
           'name' => $request->input('company_name'),
           'email' => $request->input('email'),
           'password' => bcrypt($request->input('password')),
           'status' => true,
           'role' => 'recruiter', //pa r deffff
           'location' => $request->input('location'),
           'phoneNumber' => $request->input('mobile_number'),
           'picture' => $pictureFileName,
       ]);
       $recruiter =Recruiter::create([
           'recruiter_id' =>$recruiter_id,
           'industry' => $request->input('industry_type'),
           'companySize' => $request->input('company_size'),
           'companyWebsite' => $request->input('company_website'),
           'companyAbout' => $request->input('about_company'),
           'companyOverview' => $overFileName,
           'user_id' => $user_id
       ]);

       return redirect()->route('login')->with('success', 'Recruiter');
    }

}
