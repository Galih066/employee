<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileEmployeeController extends Controller
{
    public function index ()
    {
        return view ('employee.profile.index');
    }
}