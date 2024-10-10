@extends("plantillas/plantilla2")

@section("contenido1")
@include("alumnos2/tablahtml")
@endsection


@section("contenido2")
<h1>Editando</h1>
<form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-2 col-form-label">Nombre: </label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$alumno->nombre}}">
      </div>
      <div class="row mb-3">
        <label for="apellidop" class="col-sm-2 col-form-label">Apellido Paterno </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="apellidop" name="apellidop" value="{{$alumno->apellidop}}">
        </div>

        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email: </label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" name="email" value="{{$alumno->email}}">
            </div>
    <button type="submit" class="btn btn-primary">Grabar</button>
  </form>

@endsection
