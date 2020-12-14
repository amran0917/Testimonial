<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'name',
        'father_name',
        'mother_name',
        'registration_no',
        'session',
        'running_year',
        'roll_no',
        'birth_date',
        'email',
        'phone',
    ];

}
