<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionsModel extends Model
{
    use HasFactory;

    // 👇 force Laravel to use the correct table
    protected $table = 'admissions';

    protected $fillable = [
        'student_name',
        'student_class',
        'parent_name',
        'parent_phone',
        'address',
    ];
}
