<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRegistrant extends Model
{
    protected $table = 'job_registrant';
    public $fillable = ['name', 'id_job_position', 'date_and_place_of_birth', 'id_last_education', 'school', 'domicile_address', 'phone_number', 'email', 'work_experience', 'id_marital_status', 'religion', 'expected_salary', 'id_type_of_job', 'vacancy_information', 'last_GPA', 'CV_path_file'];
}
