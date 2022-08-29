<form method="POST" action="{{ route('updateEduData') }}">
    @csrf
    <p class="fw-semibold mt-3">
        <i class="fa-solid fa-chalkboard-user me-2"></i>
        Junior School
    </p>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">Name</label>
        <div class="col-md-9">
            <input name="jsName" value="{{ old('jsName') }}" type="text" class="form-control"
                placeholder="Junior High School Name">
            @error('jsName')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="fatherDob">school year</label>
        <div class="col row">
            <div class="col-md-6">
                <input name="jsStartYear" id="year-picker" value="{{ old('jsStartYear') }}" type="text" class="form-control"
                    placeholder="Start Year">
                @error('jsStartYear')
                    <p class="small text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-6">
                <input name="jsGraduateYear" value="{{ old('jsGraduateYear') }}" type="text" class="form-control"
                    placeholder="Graduate Year">
                @error('jsGraduateYear')
                    <p class="small text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">City</label>
        <div class="col-md-9">
            <input name="jsCity" value="{{ old('jsCity') }}" type="text" class="form-control"
                placeholder="Junior School City">
            @error('jsCity')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <p class="fw-semibold mt-3">
        <i class="fa-solid fa-school me-2"></i>
        Junior High School
    </p>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">Name</label>
        <div class="col-md-9">
            <input name="jhsName" value="{{ old('jhsName') }}" type="text" class="form-control"
                placeholder="Junior High School Name">
            @error('jhsName')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="fatherDob">school year</label>
        <div class="col row">
            <div class="col-md-6">
                <input name="jhsStartYear" id="year-picker" value="{{ old('jhsStartYear') }}" type="text" class="form-control"
                    placeholder="Start Year">
                @error('jhsStartYear')
                    <p class="small text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-6">
                <input name="jhsGraduateYear" value="{{ old('jhsGraduateYear') }}" type="text" class="form-control"
                    placeholder="Graduate Year">
                @error('jhsGraduateYear')
                    <p class="small text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">City</label>
        <div class="col-md-9">
            <input name="jhsCity" value="{{ old('jhsCity') }}" type="text" class="form-control"
                placeholder="Junior High School City">
            @error('jhsCity')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <p class="fw-semibold mt-3">
        <i class="fa-solid fa-graduation-cap me-2"></i>
        Senior High School
    </p>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">Name</label>
        <div class="col-md-9">
            <input name="shsName" value="{{ old('shsName') }}" type="text" class="form-control"
                placeholder="Senior High School Name">
            @error('shsName')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="fatherDob">school year</label>
        <div class="col row">
            <div class="col-md-6">
                <input name="shsStartYear" id="year-picker" value="{{ old('shsStartYear') }}" type="text" class="form-control"
                    placeholder="Start Year">
                @error('shsStartYear')
                    <p class="small text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-6">
                <input name="shsGraduateYear" value="{{ old('shsGraduateYear') }}" type="text" class="form-control"
                    placeholder="Graduate Year">
                @error('shsGraduateYear')
                    <p class="small text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">City</label>
        <div class="col-md-9">
            <input name="shsCity" value="{{ old('shsCity') }}" type="text" class="form-control"
                placeholder="Senior School City">
            @error('shsCity')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <p class="fw-semibold mt-3">
        <i class="fa-solid fa-building-columns me-2"></i>
        University
    </p>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">Name</label>
        <div class="col-md-9">
            <input name="universityName" value="{{ old('universityName') }}" type="text" class="form-control"
                placeholder="University Name">
            @error('universityName')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="fatherDob">school year</label>
        <div class="col row">
            <div class="col-md-6">
                <input name="universityStartYear" id="year-picker" value="{{ old('universityStartYear') }}" type="text" class="form-control"
                    placeholder="Start Year">
                @error('universityStartYear')
                    <p class="small text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-6">
                <input name="universityGraduateYear" value="{{ old('universityGraduateYear') }}" type="text" class="form-control"
                    placeholder="Graduate Year">
                @error('universityGraduateYear')
                    <p class="small text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">GPA</label>
        <div class="col-md-9">
            <input name="gpa" value="{{ old('gpa') }}" type="text" class="form-control"
                placeholder="GPA">
            @error('gpa')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">City</label>
        <div class="col-md-9">
            <input name="universityCity" value="{{ old('universityCity') }}" type="text" class="form-control"
                placeholder="University City">
            @error('universityCity')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary float-end">
        <i class="fa-regular fa-floppy-disk me-2"></i>
        Save
    </button>
</form>

@push('dashboard-custom-js')
    <script type="text/javascript">
        $(function() {
            $("#year-picker").datepicker({dateFormat: 'yy'});
        });
    </script>
@endpush
