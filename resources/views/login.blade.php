@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="col-sm-3 col-md-6 col-lg-3 p-3 shadow">
            <p class="h5 fw-semibold text-primary my-5">Login Employee</p>
            <form method="POST" action="{{ route('send_credentials') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input autofocus name="email" type="email" class="form-control" id="formEmail" placeholder="name@example.com">
                    @error('email')
                        <p class="small text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="formPassword" placeholder="******">
                    @error('password')
                        <p class="small text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="text-end">
                    <button class="btn btn-primary">Sign In</button>
                </div>
            </form>
        </div>
    </div>
@endsection