@extends('layouts.dashboard')

@section('title', 'Employee Profile')

@section('dashboard-title', 'Profile')

@section('dashboard-content')
    <div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <img class="rounded-circle mx-auto border border-2" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="user-img">
                    <div class="text-center my-3">
                        <p class="m-0 fw-bold">{{ Auth::user()->name }}</p>
                        <p class="small fst-italic text-secondary">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">test</div>
        </div>
    </div>
@endsection