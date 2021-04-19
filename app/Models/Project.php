<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'budget', 'employee_id'];

    public function getEmployee() {
    	return $this->belongsTo('App\Models\Employee','employee_id')->first();
    }

    public function getTasks() {
        return $this->hasMany('App\Models\Task','project_id')->get();
    }
}
