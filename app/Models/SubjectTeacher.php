<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectTeacher extends Model
{
    use HasFactory;
    public function teacher(){
        return $this->belongsTo("App\Models\Teacher");
    }

    public function subject(){
        return $this->belongsTo("App\Models\Subject");
    }
}
