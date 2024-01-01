<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'offer_id',
        'title',
        'description',
        'location',
        'skills',
        'languages',
        'experienceYear',
        'EducationLevel',
        'typeContract',
        'salary',
        'employer_id'
    ];
    public function postulates()
    {
        return $this->hasMany(Postulate::class, 'offer_id');
    }

    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class, 'recruiter_id');
    }
}
