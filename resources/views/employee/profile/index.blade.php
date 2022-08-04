@extends('layouts.dashboard') @section('title', 'Employee Profile')
@section('dashboard-title', 'Profile') @section('dashboard-content')
<div>
    <div class="row">
        <div class="col-md-12 col-sm-6 col-lg-3">
            <div class="card card-body shadow-sm border-0">
                <img class="rounded-circle mx-auto" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}"
                    alt="user-img" />
                <div class="text-center my-3">
                    <p class="m-0 fw-bold">{{ Auth::user()->name }}</p>
                    <p class="small fst-italic text-secondary">
                        {{ Auth::user()->email }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-9">
            <div class="card card-body shadow-sm border-0">
                <p class="fw-bold">Please fill up your resume</p>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">
                            Personal Info
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">
                            Profile
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">
                            Contact
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-disabled" type="button" role="tab"
                            aria-controls="pills-disabled" aria-selected="false" disabled>
                            Disabled
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        <form action="#">
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="kecamatan">current address</label>
                                <div class="col-md-9">
                                    <input name="address" type="text" class="form-control"
                                        placeholder="Address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="gender">Gender</label>
                                <div class="col-md-9 row px-4 align-items-center">
                                    <div class="col-md-6 form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="male">
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="col-md-6 form-check">
                                        <input class="form-check-input" type="radio" name="gender"
                                            id="female" checked>
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="religion">religion</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="religion" id="religion" required>
                                        <option>Choose religion</option>
                                        @forelse ($religion as $item)
                                            <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                        @empty
                                            <option>No data religion</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="dob">date of
                                    birth</label>
                                <div class="col-md-9">
                                    <input name="dob" type="date" class="form-control"
                                        placeholder="Date of birth">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="pob">place of
                                    birth</label>
                                <div class="col-md-9">
                                    <input name="pob" type="text" class="form-control"
                                        placeholder="Place of birth">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="postal_code">postal code</label>
                                <div class="col-md-9">
                                    <input name="postal_code" type="number" class="form-control"
                                        placeholder="Kode Pos">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="provinces">provinces</label>
                                <div class="col-md-9">
                                    @php
                                        $provinces = new App\Http\Controllers\Employee\ProfileEmployeeController();
                                        $provinces = $provinces->provinces();
                                    @endphp
                                    <select class="form-select" name="provinces" id="provinces" required>
                                        <option>Choose provinces</option>
                                        @foreach ($provinces as $item)
                                            <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="city">city</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="city" id="city" required>
                                        <option>Choose Citys</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize"
                                    for="district">district</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="district" id="district" required>
                                        <option class="text-secondary">Choose districts</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="village">village</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="village" id="village" required>
                                        <option>Choose villages</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="rt">RT</label>
                                <div class="col-md-9">
                                    <input name="rt" type="number" class="form-control" 
                                        placeholder="RT">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="rw">RW</label>
                                <div class="col-md-9">
                                    <input name="rw" type="number" class="form-control"
                                        placeholder="RW">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success float-end">Save</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab" tabindex="0">
                        ...
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab" tabindex="0">
                        ...
                    </div>
                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel"
                        aria-labelledby="pills-disabled-tab" tabindex="0">
                        ...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
            $('#provinsi').change(function() {
                onChangeSelect('{{ route('cities') }}', $(this).val(), 'kota');
            });
            $('#kota').on('change', function() {
                onChangeSelect('{{ route('districts') }}', $(this).val(), 'kecamatan');
            })
            $('#kecamatan').on('change', function() {
                onChangeSelect('{{ route('villages') }}', $(this).val(), 'desa');
            })
        });
    </script>
@endpush

@endsection
