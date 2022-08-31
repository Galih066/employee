<?php

namespace App\Http\Controllers\Employee;

use Indonesia;
use App\Models\Job;
use App\Models\Resume;
use App\Models\Jenjang;
use App\Models\Religion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EducationRequest;
use App\Http\Requests\ParentDataRequest;
use App\Http\Requests\PersonalInfoRequest;

class ProfileEmployeeController extends Controller
{
    public function index ()
    {
        $religion   = Religion::all();
        $jenjang    = Jenjang::all();
        $job        = Job::all();

        return view ('employee.profile.index', compact('religion', 'jenjang', 'job'));
    }

    public function updatePersonalData (PersonalInfoRequest $request)
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
        $userResume->married_status = $request->maritalStat;
        $userResume->ethnic = $request->ethnic;

        $isUpdated  = $userResume->save();

        if ($isUpdated)
        {
            toastr()->success('Your personal data has been updated successfully!');
            return redirect()->route('employee_profile')->withInput();
        }

        toastr()->error('Failed to update the data. Please check the input');
        return redirect()->route('employee_profile')->withInput();
    }

    public function updateParentData (ParentDataRequest $request)
    {
        $authUser   = Auth::id();
        $parentResume = Resume::find($authUser);

        $parentResume->father_name = $request->fatherName;
        $parentResume->father_dob = $request->fatherDob;
        $parentResume->father_address = $request->fatherAddress;
        $parentResume->father_education = $request->fatherEducation;
        $parentResume->father_job = $request->fatherJob;
        $parentResume->father_status = $request->fatherStatus;
        $parentResume->mother_name = $request->motherName;
        $parentResume->mother_dob = $request->motherDob;
        $parentResume->mother_address = $request->motherAddress;
        $parentResume->mother_education = $request->motherEducation;
        $parentResume->mother_job = $request->motherJob;
        $parentResume->mother_status = $request->motherStatus;

        $isUpdated  = $parentResume->save();

        if ($isUpdated)
        {
            toastr()->success('Your parent data has been updated successfully!');
            return redirect()->route('employee_profile')->withInput();
        }

        toastr()->error('Failed to update the data. Please check the input');
        return redirect()->route('employee_profile')->withInput();
    }

    public function updateEduData (EducationRequest $request)
    {
        $authUser   = Auth::id();
        $educationResume = Resume::find($authUser);

        $educationResume->junior_school_name = $request->jsName;
        $educationResume->junior_school_city = $request->jsCity;
        $educationResume->junior_school_year_enter = $request->jsStartYear;
        $educationResume->junior_school_year_graduate = $request->jsGraduateYear;
        $educationResume->junior_hi_school_name = $request->jhsName;
        $educationResume->junior_hi_school_city = $request->jhsCity;
        $educationResume->junior_hi_school_year_enter = $request->jhsStartYear;
        $educationResume->junior_hi_school_year_graduate = $request->jhsGraduateYear;
        $educationResume->senior_hi_school_name = $request->shsName;
        $educationResume->senior_hi_school_city = $request->shsCity;
        $educationResume->senior_hi_school_year_enter = $request->shsStartYear;
        $educationResume->senior_hi_school_year_graduate = $request->shsGraduateYear;
        $educationResume->university_name = $request->universityName;
        $educationResume->university_year_enter = $request->universityStartYear;
        $educationResume->university_year_graduate = $request->universityGraduateYear;
        $educationResume->university_city = $request->universityCity;
        $educationResume->gpa = $request->gpa;
        
        $isUpdated  = $educationResume->save();

        if ($isUpdated)
        {
            toastr()->success('Your education data has been updated successfully!');
            return redirect()->route('employee_profile')->withInput();
        }

        toastr()->error('Failed to update the data. Please check the input');
        return redirect()->route('employee_profile')->withInput();
    }
}
