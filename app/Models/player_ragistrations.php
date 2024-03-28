<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player_ragistrations extends Model
{
    use HasFactory;
    protected $fillable = [
                             'name',
                             'father_name',
                             'gender',
                             'category',
                             'dob',
                             'email',
                             'mobile',
                             'aadhar',
                             'proficiency',
       
    ];
}
