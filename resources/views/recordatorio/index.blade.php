@extends("layouts.principal")

@section("hijos")
<h1>Modulo de Recordatorio Personas: {{$persona->id}} {{$persona->nombre}} {{$persona->apellido}}</h1>

<a href="/recordatorio/create/{{$persona->id}}" class = "btn btn-primary">Realizar Recordatorio</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodPersona</th>
            <th>Fecha</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recordatorios as $recordatorio)
        @if($recordatorio->id == $persona->id)
            <tr>
                <th>{{$recordatorio->id}}</th>
                <th>{{$persona->id}}</th>
                <th>{{$recordatorio->fecha}}</th>
                <th>{{$recordatorio->descripcion}}</th>
            </tr>
        @endif
        @endforeach
    </tbody>
</table>

@endsection