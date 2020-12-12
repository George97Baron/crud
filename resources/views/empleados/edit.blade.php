Seccion para crear editar





<form action="{{url('/empleados/'.$empleado->id)}}" method="post">


{{csrf_field()}}
{{ method_field('PATCH')}}

<label for="Nombre">{{'Nombre'}}</label>
<input class="form-control" type="text" name="Nombre" id="Nombre" value="{{$empleado->Nombre}}">
<br>
<label for="Apellido">{{'Apellido'}}</label>
<input class="form-control" type="text" name="Apellido" id="Apellido" value="{{$empleado->Apellido}}">
<br>
<label for="Correo">{{'Correo'}}</label>
<input class="form-control" type="email" name="Correo" id="Correo" value="{{$empleado->Correo}}">

<br>
<input  type="submit" value="Modificar">
<a href="{{url('empleados')}}">Regresar</a>
</form>