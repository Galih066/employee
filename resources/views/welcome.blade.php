@extends('layouts.master')

@section('title', 'Home')

@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush    

@section('content')
    <div>
        <p class="h1">Test</p>
    </div>

    @push('custom-js')
        <script src="{{ asset('js/script.js') }}"></script>
    @endpush
@endsection