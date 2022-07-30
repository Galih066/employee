<?php

namespace App\Http\Controllers\Employee;

use Indonesia;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileEmployeeController extends Controller
{
    public function index ()
    {
        return view ('employee.profile.index');
    }

    public function provinces()
    {
        return Indonesia::allProvinces();
    }

    public function cities(Request $request)
    {
        return Indonesia::findProvince($request->id, ['cities'])->cities->pluck('name', 'id');
    }

    public function districts(Request $request)
    {
        return Indonesia::findCity($request->id, ['districts'])->districts->pluck('name', 'id');
    }

    public function villages(Request $request)
    {
        return Indonesia::findDistrict($request->id, ['villages'])->villages->pluck('name', 'id');
    }
}
