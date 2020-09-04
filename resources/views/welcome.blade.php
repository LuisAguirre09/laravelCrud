@extends("layouts.layout")

@section("header")
@endsection

@section("body")

    @if(count($products))

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Nombre del producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <td> {{$product->nameProduct}} </td>
            <td> $ {{$product->price}} </td>
            <td>
                <a type="button" href="{{URL::action('crudController@show', $product->id)}}" class="btn btn-primary">Ver</a>
                <a type="button" href="{{URL::action('crudController@edit', $product->id)}}" class="btn btn-secondary">Modificar</a>
                <a type="button" href="{{URL::action('crudController@show', $product->id)}}" class="btn btn-danger" >
                Borrar
                </a>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else

        {{"Sin productos"}}

    @endif
    
@endsection
@section('footer')

@endsection

