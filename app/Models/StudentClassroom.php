<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClassroom extends Model
{
    use HasFactory;
    public function classroom(){
        return $this->belongsTo("App\Models\Classroom");
    }
    public function student(){
        return $this->belongsTo("App\Models\Student");
    }
}
