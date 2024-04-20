@extends("layouts.principal")

@section("hijos")
<h1>Crear Recordatorio</h1>

<div class="container">
<div class="row">
<div class="col">
<form action="/recordatorio" method = "POST">
    @csrf
    <div class="mb-3">
    <label for="">Codigo Persona</label>
    <input type="text" name="id" class="form-control" value = "{{$id}}">
    </div>

    <div class="mb-3">
    <label for="">Fecha</label>
    <input type="text" name="fecha"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Descripcion</label>
    <input type="text" name="descripcion"  class="form-control">
    </div>
    <button type = "submit">Guardar</button>

</form>

</div>
</div>
</div>
@endsection