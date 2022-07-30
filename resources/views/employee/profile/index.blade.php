@extends('layouts.dashboard') @section('title', 'Employee Profile')
@section('dashboard-title', 'Profile') @section('dashboard-content')
<div>
    <div class="row">
        <div class="col-md-3">
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
        <div class="col-md-9">
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
                                <label class="col-md-3 col-form-label" for="provinsi">Provinsi</label>
                                <div class="col-md-9">
                                    @php
                                        $provinces = new App\Http\Controllers\Employee\ProfileEmployeeController();
                                        $provinces = $provinces->provinces();
                                    @endphp
                                    <select class="form-control" name="provinsi" id="provinsi" required>
                                        <option>==Pilih Salah Satu==</option>
                                        @foreach ($provinces as $item)
                                            <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label" for="kota">Kabupaten / Kota</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="kota" id="kota" required>
                                        <option>==Pilih Salah Satu==</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="kecamatan" id="kecamatan" required>
                                        <option>==Pilih Salah Satu==</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label" for="desa">Desa</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="desa" id="desa" required>
                                        <option>==Pilih Salah Satu==</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        ...
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">
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

@push('custom-js')
    <script type="text/javascript">
        function onChangeSelect(url, id, name) {
            // send ajax request to get the cities of the selected province and append to the select tag
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id
                },
                success: function (data) {
                    $('#' + name).empty();
                    $('#' + name).append('<option>==Pilih Salah Satu==</option>');

                    $.each(data, function (key, value) {
                        $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }
        $(function () {
            $('#provinsi').on('change', function () {
                onChangeSelect('{{ route("cities") }}', $(this).val(), 'kota');
            });
            $('#kota').on('change', function () {
                onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
            })
            $('#kecamatan').on('change', function () {
                onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
            })
        });
    </script>
@endpush

@endsection
