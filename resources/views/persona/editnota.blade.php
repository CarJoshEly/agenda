@extends("layouts.principal")

@section("hijos")
<h1>Editar Nota</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/persona/{{$editarContactoNota->id}}" method = "POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
    <label for="">Id</label>
    <input type="text" name="id" id = "id" value = "{{$editarContactoNota->id}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota</label>
    <input type="text" name="nota" id = "nota" value = "{{$editarContactoNota->nota}}"class="form-control">
    </div>

    <button type = "submit">Guardar</button>

</form>

</div>
</div>
</div>
@endsection