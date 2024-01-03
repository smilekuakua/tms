<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentid',
        'surname',
        'address',
        'phonenumber',
        'photo',
    ];
    public function users() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
