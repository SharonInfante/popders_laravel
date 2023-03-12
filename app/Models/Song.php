<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Song extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_song';
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
