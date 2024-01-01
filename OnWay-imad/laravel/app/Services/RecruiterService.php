<?php


namespace App\Services;


use App\Models\User;
use App\Models\Recruiter;
use Illuminate\Support\Facades\Auth;


class RecruiterService {

    public function getRecruiterName() {

        $recruiter = User::findorFail(Auth::user()->id);
        $recruiterName = $recruiter->name;

        return $recruiterName;
    }

}
