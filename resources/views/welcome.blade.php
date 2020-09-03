@extends("layouts.layout")

@section("header")

    <h4 class="lead" style="padding-left:20px">
        Inicio
    </h4>

@endsection

@section("body")

    @if(count($nombres))

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Nombres</th>
        </thead>
        <tbody>
        @foreach($nombres as $nombre)
            <tr>
            <td> {{$nombre}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else

        {{"Sin nombres"}}

    @endif

@endsection

