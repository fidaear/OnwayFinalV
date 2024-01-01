<?php
// app/Services/UserService.php

namespace App\Services;

use App\Models\User;
use App\Models\Offer;
use App\Models\Recruiter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class OfferService
{
    public function Offers()  {
        $user = User::findOrFail(Auth::id());
        if ($user->role == 'jobSeeker') {
            $jobSeeker = $user->jobSeeker;
            $jobSeekerSkills = $jobSeeker->skills;
            $jobSeekerLanguages = $jobSeeker->languages;
            $offers = Offer::where(function ($query) use ($jobSeekerSkills) {
                foreach ($jobSeekerSkills as $skill) {
                    $query->orWhereJsonContains('competences', $skill);
                }
            })
            ->orWhere('EducationLevel', '<=', $jobSeeker->educationLevel)
            ->orWhere(function ($query) use ($jobSeekerLanguages) {
                foreach ($jobSeekerLanguages as $languages) {
                    $query->orWhereJsonContains('languages', $languages);
                }
            })
            ->orWhere('location', 'like', "%{$user->location}%")
            ->orWhere('experienceYear', '<=', $jobSeeker->experience)
            ->inRandomOrder()
            ->limit(10)
            ->get();
            return $offers;
        }
    }
    public function CreateOffer($request) {
        $user = User::findOrFail(Auth::id());
        $recruiter_id = Recruiter::select('recruiter_id')
        ->where('user_id',$user->id)->get();

        $compsArry = explode(",",$request->comps);
        $compsArry = json_encode($compsArry);
        $langArry = explode(",",$request->langs);
        $langArry = json_encode($langArry);


        Offer::create([
            'offer_id' => Str::uuid(),
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'competences'=> $compsArry,
            'languages' => $langArry,
            'experienceYear' => $request->experience,
            'EducationLevel' => $request->education,
            'typeContract' => $request->typecontract,
            'salary' => $request->salary,
            'recruiter_id' => $recruiter_id[0]->recruiter_id,


        ]);

    }


}
?>
