
@extends("layouts.layout")
@section("header")

    <br>

@endsection

@section('body')

    <div class="card" style="margin: 0 auto; float:none; width: 45rem;">
        <div class="card-body">
    
        <form method="post" action="{{URL::action('crudController@update', $product->id)}}">
            <div class="form-group">
              <label for="nameProduct">Nombre del producto</label>
              <input type="text" class="form-control" name="nameProduct" id="nameProduct" 
              placeholder="Ingresa el nombre del producto"
              value="{{$product->nameProduct}}">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="PUT">
            </div>
            <div class="form-group">
              <label class="sr-only" for="price">Precio</label>
                  <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                  </div>
                  <input type="text" class="form-control" name="price" id="price" 
                  placeholder="Precio del producto"
                  value="{{$product->price}}">
                  {{csrf_field()}}
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Aceptar</button>
        </form>
    
        </div>
    </div>

@endsection
