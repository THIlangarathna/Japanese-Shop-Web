@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="width: 350%">
            <div class="card">

                <div class="card-body">
                    <a href="Excel/Tozan" class="btn btn-primary">Export to Excel</a>
                    
                    @include('Tozan.table')

                </div>

                        {{ $tozan->links() }}
                        {{ $tozan->render("pagination::bootstrap-4") }}

            </div>
    </div>
</div>
@endsection
