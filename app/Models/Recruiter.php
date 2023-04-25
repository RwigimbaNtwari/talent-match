<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'recruiter_email',
        'contact',
        'address',
        'about',
        'profile'
    ];
}