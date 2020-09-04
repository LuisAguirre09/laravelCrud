@extends("layouts.layout")

@section("header")

    <h4 class="lead" style="padding-left:20px">
        Ver detalle
    </h4>

@endsection

@section('body')

    @foreach($product as $pr)
    <div style="margin: 0 auto; float:none; width: 20rem;text-align:center">
        <div class="card" style="width: 18rem;">
         <div class="card-body">
        <h5 class="card-title"> {{$pr->nameProduct}} </h5>
        <p class="card-text">Precio: ${{$pr->price}} </p>
        <br>
        <p class="card-text"><span style="font-weight:bold">Creado el: </span> {{$pr->created_at}} </p>
        <p class="card-text">
            <span style="font-weight:bold">Modificado: </span> 
            @if($pr->update_at)
            {{$pr->update_at}} 
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