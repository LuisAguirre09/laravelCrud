
@extends("layouts.layout")
@section("header")

    <h4 class="lead" style="padding-left:20px">
        Crear
    </h4>

@endsection

@section('body')

    <div class="card" style="margin: 0 auto; float:none; width: 45rem;">
        <div class="card-body">
    
        @include('layouts.form')
    
        </div>
    </div>

@endsection
