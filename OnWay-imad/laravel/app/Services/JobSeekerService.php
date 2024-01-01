<?php
namespace App\Services;
use Illuminate\Support\Str;
use App\Models\JobSeeker;
use App\Models\User;

class JobSeekerService {
 
    public function store(array $seekerData): JobSeeker
    {
        $user_id = Str::uuid();
        $seeker_id = Str::uuid();
        $skills = [];
        $skills = [];
        foreach (explode(',',$seekerData['skills']) as $value) {
            $skills[] = $value;
        }
        foreach (explode(',',$seekerData['languages']) as $value) {
            $languages[] = $value;
        }
        
        $user = User::create([
            'id' => $user_id,
            'name' => $seekerData["lastName"]." ".$seekerData["firstName"]  ,
            'email' => $seekerData["email"]  ,
            'password' => $seekerData["password"] ,
            'picture' => $seekerData["picture"] ,
            'location' => $seekerData["location"] ,
            'phoneNumber' => $seekerData['contry']." ".$seekerData["phoneNumber"] ,
           
        ]); 
        $jobseeker = JobSeeker::create([
            'seeker_id' =>$seeker_id,
            'visibility' =>$seekerData["visibility"] ,
            'title' =>$seekerData["title"] ,
            'dateBirthday' =>$seekerData["year"]."-".$seekerData["month"]."-".$seekerData["day"],
            'experience' =>$seekerData["experience"] ,
            'experienceDescription' =>$seekerData["experienceDescription"] ,
            'educationLevel' =>$seekerData["educationLevel"] ,
            'educationDescription' =>$seekerData["educationDescription"] ,
            'skills' =>$skills ,
            'cv' =>$seekerData["cv"] ,
            'languages' =>$languages ,
            'linkedinLink' =>$seekerData["linkedinLink"] ,
            'user_id' => $user_id
        ]);
        
        return $jobseeker;
    }
 
    
}