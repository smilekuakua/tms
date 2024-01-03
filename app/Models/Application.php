<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'company_name',
        'working_field',
        'company_address',
        'company_fax',
        'company_phone',
        'company_email',
        'company_web_address',
        'company_description',
        'supervisor_name',
        'supervisor_surname',
        'supervisor_email',
        'supervisor_position',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
