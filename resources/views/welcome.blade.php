@extends("layouts.layout")

@section("header")

    <h4 class="lead" style="padding-left:20px">
        Inicio
    </h4>

@endsection

@section("body")

    @if(count($products))

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre del producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Botones</th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
            <td> {{$product->id}} </td>
            <td> {{$product->nameProduct}} </td>
            <td> $ {{$product->price}} </td>
            <td>
                <button type="button" class="btn btn-primary">Ver</button>
                <button type="button" class="btn btn-secondary">Modificar</button>
                <button type="button" class="btn btn-danger">Borrar</button>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else

        {{"Sin productos"}}

    @endif

@endsection

