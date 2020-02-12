@extends('layouts.app')

@section('content')
<div class="container mobile-bs green-bg">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="height: 100vh;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
