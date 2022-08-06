<form method="POST" action="{{ route('updatePersonalData') }}">
    @csrf
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="kecamatan">current address</label>
        <div class="col-md-9">
            <input name="address" type="text" class="form-control" placeholder="Address">
            @error('address')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="gender">Gender</label>
        <div class="col-md-9 row px-4 align-items-center">
            <div class="col-md-6 form-check">
                <input value="Male" class="form-check-input" type="radio" name="gender" id="male">
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="col-md-6 form-check">
                <input value="Female" class="form-check-input" type="radio" name="gender" id="female" checked>
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
            @error('gender')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="religion">religion</label>
        <div class="col-md-9">
            <select class="form-select" name="religion" id="religion" required>
                <option value="">Choose religion</option>
                @forelse ($religion as $item)
                    <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                @empty
                    <option>No data religion</option>
                @endforelse
            </select>
            @error('religion')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="dob">date of
            birth</label>
        <div class="col-md-9">
            <input name="dob" type="date" class="form-control" placeholder="Date of birth">
            @error('dob')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="pob">place of
            birth</label>
        <div class="col-md-9">
            <input name="pob" type="text" class="form-control" placeholder="Place of birth">
            @error('pob')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="postal_code">postal code</label>
        <div class="col-md-9">
            <input name="postal_code" type="number" class="form-control" placeholder="Kode Pos">
            @error('postal_code')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="provinces">provinces</label>
        <div class="col-md-9">
            @php
                $provinces = new App\Http\Controllers\Employee\FormPersonalDataController();
                $provinces = $provinces->provinces();
            @endphp
            <select class="form-select" name="provinces" id="provinces" required>
                <option>Choose provinces</option>
                @foreach ($provinces as $item)
                    <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                @endforeach
            </select>
            @error('profinces')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="city">city</label>
        <div class="col-md-9">
            <select class="form-select" name="city" id="city" required>
                <option>Choose Citys</option>
            </select>
            @error('city')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="district">kecamatan</label>
        <div class="col-md-9">
            <select class="form-select" name="kecamatan" id="district" required>
                <option class="text-secondary">Choose kecamatan</option>
            </select>
            @error('district')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="village">kelurahan</label>
        <div class="col-md-9">
            <select class="form-select" name="kelurahan" id="village" required>
                <option>Choose kelurahan</option>
            </select>
            @error('village')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="rt">RT</label>
        <div class="col-md-9">
            <input name="rt" type="number" class="form-control" placeholder="RT">
            @error('rt')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-md-3 col-form-label text-capitalize" for="rw">RW</label>
        <div class="col-md-9">
            <input name="rw" type="number" class="form-control" placeholder="RW">
            @error('rw')
                <p class="small text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-success float-end">Save</button>
</form>

@push('dashboard-custom-js')
    <script type="text/javascript">
        function onChangeSelect(url, id, name) {
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id
                },
                success: function(data) {
                    $.each(data, function(key, value) {
                        $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }

        $(function() {
            $('#provinces').change(function() {
                onChangeSelect('{{ route('cities') }}', $(this).val(), 'city');
            });
            $('#city').on('change', function() {
                onChangeSelect('{{ route('districts') }}', $(this).val(), 'district');
            })
            $('#district').on('change', function() {
                onChangeSelect('{{ route('villages') }}', $(this).val(), 'village');
            })
        });
    </script>
@endpush
