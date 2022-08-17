<form method="POST" action="#">
    @csrf
    <p class="fw-semibold mt-3">
        <i class="fa-solid fa-person me-2"></i>
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

    <p class="fw-semibold mt-5">
        <i class="fa-solid fa-person-dress me-2"></i>
        Mother's data
    </p>

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
