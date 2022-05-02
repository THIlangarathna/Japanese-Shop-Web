@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="width: 270%">
            <div class="card">

                <div class="card-body">
                    <a href="Excel/Gohonzon" class="btn btn-primary">Export to Excel</a>
                    
                    @include('Gohonzon.table')

                </div>

                        {{ $gohonzon->links() }}
                        {{ $gohonzon->render("pagination::bootstrap-4") }}

            </div>
    </div>
</div>
@endsection
