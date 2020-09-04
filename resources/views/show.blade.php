@extends("layouts.layout")

@section("header")

    <br>

@endsection

@section('body')

    @foreach($product as $pr)
    <div style="margin: 0 auto; float:none; width: 20rem;text-align:center">
        <div class="card" style="width: 20rem;">
         <div class="card-body">
        <h5 class="card-title"> {{$pr->nameProduct}} </h5>
        <p class="card-text">Precio: ${{$pr->price}} </p>
        <br>
        <p class="card-text"><span style="font-weight:bold">Creado el: </span>
            {{date('d-m-Y h:i:s', strtotime($pr->created_at))}} 
        </p>
        <p class="card-text">
            <span style="font-weight:bold">Modificado: </span> 
            @if($pr->updated_at)
            {{date('d-m-Y h:i:s', strtotime($pr->updated_at) - 18000)}} <!-- restar 5 hrs: 3600 = 1,18000= 5-->
            @else
            No hay cambios.
            @endif
        </p>
        
        <form method="post" action="{{URL::action('crudController@destroy', $pr->id)}}">
            {{csrf_field()}}
            <a href="{{URL::action('crudController@edit', $pr->id)}}" class="btn btn-primary">Editar</a>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-outline-danger">
            Eliminar producto
            </button>
        </form>
     
        </div>
    </div>

    </div>
    @endforeach

@endsection