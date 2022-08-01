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
                                <label class="col-md-3 col-form-label text-capitalize" for="kecamatan">Gender</label>
                                <div class="col-md-9 row px-4 align-items-center">
                                    <div class="col-md-6 form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="col-md-6 form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="provinsi">religion</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="provinsi" id="provinsi" required>
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
                                <label class="col-md-3 col-form-label text-capitalize" for="kecamatan">date of
                                    birth</label>
                                <div class="col-md-9">
                                    <input name="dob" type="date" class="form-control"
                                        placeholder="Date of birth">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="kecamatan">place of
                                    birth</label>
                                <div class="col-md-9">
                                    <input name="pob" type="text" class="form-control"
                                        placeholder="Place of birth">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="provinsi">provinces</label>
                                <div class="col-md-9">
                                    @php
                                        $provinces = new App\Http\Controllers\Employee\ProfileEmployeeController();
                                        $provinces = $provinces->provinces();
                                    @endphp
                                    <select class="form-select" name="provinsi" id="provinsi" required>
                                        <option>Choose provinces</option>
                                        @foreach ($provinces as $item)
                                            <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="kota">city</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="kota" id="kota" required>
                                        <option>Choose Citys</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize"
                                    for="kecamatan">district</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="kecamatan" id="kecamatan" required>
                                        <option class="text-secondary">Choose districts</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label text-capitalize" for="desa">village</label>
                                <div class="col-md-9">
                                    <select class="form-select" name="desa" id="desa" required>
                                        <option>Choose villages</option>
                                    </select>
                                </div>
                            </div>
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
