<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['project_id','desc','start_date','end_date'];

    public function getEmployee() {
    	return 'App\Models\Employee'::get();
    }

    public function getEmployees()
    {
        return $this->belongsToMany('App\Models\Employee', 'employee_tasks')->withPivot('id')->get();
    }
}
