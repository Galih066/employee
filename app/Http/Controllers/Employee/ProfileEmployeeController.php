<?php

namespace App\Http\Controllers\Employee;

use Indonesia;
use App\Models\Resume;
use App\Models\Jenjang;
use App\Models\Religion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PersonalInfoRequest;

class ProfileEmployeeController extends Controller
{
    public function index ()
    {
        $religion   = Religion::all();
        $jenjang    = Jenjang::all();

        return view ('employee.profile.index', compact('religion', 'jenjang'));
    }

    public function updateResume (PersonalInfoRequest $request)
    {
        $authUser   = Auth::id();
        $userResume = Resume::find($authUser);
        
        $userResume->address = $request->address;
        $userResume->gender = $request->gender;
        $userResume->religion_id = $request->religion;
        $userResume->date_of_birth = $request->dob;
        $userResume->place_of_birth = $request->pob;
        $userResume->kodepos = $request->postal_code;
        $userResume->provinsi = $request->provinces;
        $userResume->city = $request->city;
        $userResume->kecamatan = $request->kecamatan;
        $userResume->kelurahan = $request->kelurahan;
        $userResume->rt = $request->rt;
        $userResume->rw = $request->rw;
        $userResume->ethnic = $request->ethnic;

        $isUpdated  = $userResume->save();

        if ($isUpdated)
        {
            toastr()->success('Data has been updated successfully!');
            return redirect()->route('employee_profile')->withInput();
        }

        toastr()->error('Failed to update the data. Please check the input');
        return redirect()->route('employee_profile')->withInput();
    }
}
