@extends("layouts.principal")

@section("hijos")
<h1>Modulo de Recordatorio Personas: {{$persona}}</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recordatorios as $recordatorio)
        @if($recordatorio->id == $persona)
            <tr>
                <th>{{$recordatorio->id}}</th>
                <th>{{$recordatorio->fecha}}</th>
                <th>{{$recordatorio->descripcion}}</th>
                <th>
                </th>
            </tr>
        @endif
        @endforeach
    </tbody>
</table>

@endsection