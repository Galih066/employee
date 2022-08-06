<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $table = 'resumes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'place_of_birth', 'date_of_birth', 'gender', 'religion_id', 'ethnic', 'address', 'rt', 'rw', 'kelurahan', 'kecamatan', 'city', 'provinsi', 'kodepos', 'married_status', 'father_name', 'father_dob', 'father_address', 'father_education', 'father_job', 'father_status', 'mother_name', 'mother_dob', 'mother_address', 'mother_education', 'mother_job', 'mother_status', 'junior_school_name', 'junior_school_city', 'junior_school_year_enter', 'junior_school_year_graduate', 'junior_hi_school_name', 'junior_hi_school_city', 'junior_hi_school_year_enter', 'junior_hi_school_year_graduate', 'senior_hi_school_name', 'senior_hi_school_city', 'senior_hi_school_year_enter', 'senior_hi_school_year_graduate',
    ];
}
