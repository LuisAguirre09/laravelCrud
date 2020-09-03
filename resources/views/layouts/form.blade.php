<form method="post" action="{{URL::action('crudController@store')}}">
  <div class="form-group">
    <label for="nameProduct">Nombre del producto</label>
    <input type="text" class="form-control" name="nameProduct" id="nameProduct" placeholder="Ingresa el nombre del producto">
    {{csrf_field()}}
  </div>
  <div class="form-group">
    <label class="sr-only" for="price">Precio</label>
        <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">$</div>
        </div>
        <input type="text" class="form-control" name="price" id="price" placeholder="Precio del producto">
        {{csrf_field()}}
      </div>
  </div>
  <button type="submit" class="btn btn-primary">Aceptar</button>
</form>