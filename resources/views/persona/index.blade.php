@extends("layouts.principal")

@section("hijos")

<h1>Agenda de Personas</h1>

<a href="/persona/create" class="btn btn-primary">Crear Nuevo Contacto</a>
</br>
</br>
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
                    <a href="/persona/{{$persona->id}}/edit" class="btn btn-info">Editar</a>
                    <a href="persona/{{$persona->id}}" class="btn btn-success">Recordatorio</a>
                    <form action="/persona/{{$persona->id}}" method="POST">
                        @csrf
                        @method("Delete")
                        <button  class="btn btn-warning">Eliminar</button>
                    </form>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection