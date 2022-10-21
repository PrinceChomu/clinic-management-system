<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function patient(){
        return $this->hasMany(User::class, 'id', 'patient_id');
    }

    public function department(){
        return $this->hasMany(Department::class, 'id', 'department_id');
    }
}
