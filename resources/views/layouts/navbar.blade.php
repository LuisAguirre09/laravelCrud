

<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Crud en Laravel</a>
  <form class="form-inline">
    <a 
    class="btn btn-outline-success my-2 my-sm-0" 
    href="{{URL::action('crudController@create')}}">
      Agregar Producto
    </a>
  </form>
</nav>