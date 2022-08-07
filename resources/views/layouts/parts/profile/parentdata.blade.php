<form method="POST" action="{{ route('updatePersonalData') }}">
    @csrf
    <p class="fw-semibold">Father</p>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="kecamatan">Name</label>
        <div class="col-md-9">
            <input name="fatherName" value="{{ old('fatherName') }}" type="text" class="form-control" placeholder="Father's name">
            @error('fatherName')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize text-muted" for="kecamatan">Address</label>
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
    <button type="submit" class="btn btn-success float-end">Save</button>
</form>
