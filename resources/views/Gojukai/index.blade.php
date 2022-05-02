@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="width: 400%">
            <div class="card">

                <div class="card-body">
                    <a href="Excel/Gojukai" class="btn btn-primary">Export to Excel</a>
                   
                    @include('Gojukai.table')

                </div>

                        {{ $gojukai->links() }}
                        {{ $gojukai->render("pagination::bootstrap-4") }}

            </div>
    </div>
</div>
@endsection
