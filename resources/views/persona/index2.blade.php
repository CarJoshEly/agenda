@extends("layouts.principal")

@section("hijos")

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Nota</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
            <tr>
                <th>{{$persona->id}}</th>
                <th>{{$persona->nombre}}</th>
                <th>{{$persona->apellido}}</th>
                <th>{{$persona->direccion}}</th>
                <th>{{$persona->telefono}}</th>
                <th>{{$persona->correo}}</th>
                <th>{{$persona->nota}}</th>
                <th>
                    <a href="/recordatorio/{{$persona->id}}" class="btn btn-info">Recordatorio</a>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection