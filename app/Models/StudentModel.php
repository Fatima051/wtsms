<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;

    protected $table = 'students'; // 👈 tell Laravel the actual table name

    protected $fillable = [
    'name',
    'rollno',
    'class',
    'section',
    'gender',
    'parents',
    'address',
    'dob',
    'phone',
];

}




