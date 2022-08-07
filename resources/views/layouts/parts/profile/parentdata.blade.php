<form method="POST" action="{{ route('updateParentData') }}">
    @csrf
    <p class="fw-semibold mt-3">
        <i class="fa-solid fa-person me-2"></i>
        Father's data
    </p>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">Name</label>
        <div class="col-md-9">
            <input name="fatherName" value="{{ old('fatherName') }}" type="text" class="form-control" placeholder="Father's name">
            @error('fatherName')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">Address</label>
        <div class="col-md-9">
            <input name="fatherAddress" value="{{ old('fatherAddress') }}" type="text" class="form-control" placeholder="Father's address">
            @error('fatherAddress')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="education">education</label>
        <div class="col-md-9">
            <select class="form-select" name="fatherEducation" id="education" required>    
                <option value="">Choose education</option>
                @forelse ($jenjang as $item)
                    <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                @empty
                    <option>No education data</option>
                @endforelse
            </select>
            @error('fatherEducation')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="fatherJob">Jobs</label>
        <div class="col-md-9">
            <select class="form-select" name="fatherJob" id="fatherJob" required>    
                <option value="">Choose father's jobs</option>
                @forelse ($job as $item)
                    <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                @empty
                    <option>No job's data</option>
                @endforelse
            </select>
            @error('fatherJob')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="fatherStatus">Status</label>
        <div class="col-md-9">
            <select class="form-select" name="fatherStatus" id="fatherStatus" required>    
                <option value="">Choose father's status</option>
                <option value="1">Still Alive</option>
                <option value="2">Passed Away</option>
            </select>
            @error('fatherStatus')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <p class="fw-semibold mt-5">
        <i class="fa-solid fa-person-dress me-2"></i>
        Mother's data
    </p>
    
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">Name</label>
        <div class="col-md-9">
            <input name="motherName" value="{{ old('motherName') }}" type="text" class="form-control" placeholder="Mother's name">
            @error('motherName')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted">Address</label>
        <div class="col-md-9">
            <input name="motherAddress" value="{{ old('motherAddress') }}" type="text" class="form-control" placeholder="Mother's address">
            @error('motherAddress')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="education">education</label>
        <div class="col-md-9">
            <select class="form-select" name="motherEducation" id="education" required>    
                <option value="">Choose education</option>
                @forelse ($jenjang as $item)
                    <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                @empty
                    <option>No education data</option>
                @endforelse
            </select>
            @error('motherEducation')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="motherJob">Jobs</label>
        <div class="col-md-9">
            <select class="form-select" name="motherJob" id="motherJob" required>    
                <option value="">Choose mother's jobs</option>
                @forelse ($job as $item)
                    <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                @empty
                    <option>No job's data</option>
                @endforelse
            </select>
            @error('motherJob')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="motherStatus">Status</label>
        <div class="col-md-9">
            <select class="form-select" name="motherStatus" id="motherStatus" required>    
                <option value="">Choose mother's status</option>
                <option value="1">Still Alive</option>
                <option value="2">Passed Away</option>
            </select>
            @error('motherStatus')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-success float-end">Save</button>
</form>
