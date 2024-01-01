<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = [
        'post_id',
        'title',
        'image',
        'description',
        'user_id'
    ];

    public function post() {
        return $this->belongsTo(User::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function react() {
        return $this->hasMany(React::class);
    }
    public function comment() {
        return $this->hasMany(Comment::class);
    }
}
