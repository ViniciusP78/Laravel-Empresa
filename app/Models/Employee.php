<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'department_id'];

    public function getDepartment() {
    	return $this->belongsTo('App\Models\Department','department_id')->first();
    }

    public function getDependents() {
        return $this->hasMany('App\Models\Dependent','employee_id')->get();
    }
}
