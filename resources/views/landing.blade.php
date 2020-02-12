@extends('layouts.app')

@section('content')
<div class="container mobile-bs">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card green-bg">
                <a href="{{ route('login') }}">
                    <div class="card-body" style="height: 100vh; text-align: center; padding-top: 40vh;">
                        <img src="{{ asset('images/logo.svg') }}">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
