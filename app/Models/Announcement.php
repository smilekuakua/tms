<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'uid'];

  
    public function reads()
    {
        return $this->belongsToMany(User::class, 'reads');
    }
}
