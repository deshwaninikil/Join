<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Employeecontroller extends Controller
{
    //
    function show()
    {
        return DB::table('employee')
        ->join('company','employee.id',"=",'company.employee_id')
       // ->select('id.*')
        ->get();
    }
}
