@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border border-dark">
                <div class="card-header text-center text-uppercase font-weight-bold border-bottom-0">Dashboard</div>

                <div class="card-body">

                    <div class="alert alert-success" role="alert">
                        @if (session('status'))
                        {{ session('status') }}
                    </div>
                    @endif
                    You are logged in!
                </div>
                <h3 class="my-3">Welcome {{ Auth::user()->name }}</h3>
                <ul class="list-group">
                    <li class="list-group-item active">Your Profile</li>
                    <li class="list-group-item">Your Name: {{ Auth::user()->name }}</li>
                    <li class="list-group-item">Your Email: {{ Auth::user()->email }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
