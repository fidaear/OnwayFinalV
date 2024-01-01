<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulate extends Model
{
    use HasFactory;
    protected $fillable = [
        'statusPostulate',
        'offer_id',
        'seeker_id',
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class, 'offer_id');
    }

    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class, 'seeker_id');
    }
}
