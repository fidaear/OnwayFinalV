<?php

namespace App\Models;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recruiter extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;
    use HasFactory;
    protected $fillable = [
        'recruiter_id',
        'industry',
        'companySize',
        'companyWebsite',
        'companyAbout',
        'companyOverview',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function messages()
    {
        return $this->hasMany(Chat::class);
    }


}
