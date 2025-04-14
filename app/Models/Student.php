<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = "student";

    public function educations()
    {
        return $this->hasOne(Education::class,"student_id",'id');
    }
    public function city()
    {
        return $this->hasOne(City::class,"student_id",'id');
    }
}
