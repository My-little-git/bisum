@extends('layouts.master')

@section('title', '404')

@section('content')

    <div class="error-page mt-100">
        <div class="container">
            <div class="error-content text-center">
                <div class="error-img mx-auto">
                    <img src="assets/img/error/error.png" alt="error">
                </div>
                <p class="error-subtitle">Page Not Found</p>
                <a href="index.html" class="btn-primary mt-4">BACK TO HOMEPAGE</a>
            </div>
        </div>
    </div>

@endsection
