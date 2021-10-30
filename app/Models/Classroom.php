<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    public function grade(){
        return $this->belongsTo("App\Models\Grade");
    }
    public function teacher(){
        return $this->belongsTo("App\Models\Teacher");
    }
}
