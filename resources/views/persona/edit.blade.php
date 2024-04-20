@extends("layouts.principal")

@section("hijos")
<h1>Editar Contacto</h1>
<div class="container">
<div class="row">
<div class="col">
<form action="/persona/{{$editarContacto->id}}" method = "POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
    <label for="">Id</label>
    <input type="text" name="id" id = "id" value = "{{$editarContacto->id}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id = "nombre" value = "{{$editarContacto->nombre}}"class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
   <input type="text" name="apellido" id = "apellido" value = "{{$editarContacto->apellido}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Direccion</label>
    <input type="text" name="direccion" id = "direccion" value = "{{$editarContacto->direccion}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id = "telefono" value = "{{$editarContacto->telefono}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Correo</label>
    <input type="text" name="correo" id = "correo" value = "{{$editarContacto->correo}}"class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Nota</label>
    <input type="text" name="nota" id = "nota" value = "{{$editarContacto->nota}}"class="form-control">
    </div>
    <button type = "submit">Guardar</button>

</form>

</div>
</div>
</div>
@endsection