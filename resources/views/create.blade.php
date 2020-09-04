
@extends("layouts.layout")
@section("header")

    <br>

@endsection

@section('body')

    @if(count($errors)>0)
        <div style="float:none;margin:0 auto; width: 45rem"> 
        @include('layouts.alert')
        </div>
    @endif

    <div class="card" style="margin: 0 auto; float:none; width: 45rem;">
        <div class="card-body">
    
        @include('layouts.form')
    
        </div>
    </div>

@endsection
