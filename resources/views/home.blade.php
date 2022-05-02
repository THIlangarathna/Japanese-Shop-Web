@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                    <div class="d-flex justify-content-between">
                        <a href="Gojukai/create" class="btn btn-primary">Create Gojukai</a>
                        <a href="Gohonzon/create" class="btn btn-primary"> Create Gohonzon</a>
                        <a href="Tozan/create" class="btn btn-primary">Create Tozan</a>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <a href="Gojukai" class="btn btn-secondary">View Gojukai</a>
                        <a href="Gohonzon" class="btn btn-secondary">View Gohonzon</a>
                        <a href="Tozan" class="btn btn-secondary">View Tozan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
