<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [


        'surname',
        'company',
        'position',

    ];

    public function users() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
