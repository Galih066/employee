@extends('layouts.dashboard') 
@section('title', 'Employee Profile')
@section('dashboard-title', 'Profile') 
@section('dashboard-content')
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
                <p class="fw-bold mb-4">Please fill up your resume</p>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-personal"
                            aria-selected="true">
                            Personal Info
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-parent-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-parent" type="button" role="tab" aria-controls="pills-parent"
                            aria-selected="false">
                            Parent Data
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-edu-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-education" type="button" role="tab" aria-controls="pills-education"
                            aria-selected="false">
                            Education Data
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">
                        @includeIf('layouts.parts.profile.personaldata')
                    </div>
                    <div class="tab-pane fade show active" id="pills-parent" role="tabpanel"
                        aria-labelledby="pills-parent-tab" tabindex="0">
                        @includeIf('layouts.parts.profile.parentdata')
                    </div>
                    <div class="tab-pane fade" id="pills-education" role="tabpanel"
                        aria-labelledby="pills-edu-tab" tabindex="0">
                        Education data
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
