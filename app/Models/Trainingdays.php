<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainingdays extends Model
{
    use HasFactory;
    protected $fillable = ['departement','work_done','date','training_id'];
}
