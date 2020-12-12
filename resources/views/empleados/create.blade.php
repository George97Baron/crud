Seccion para crear empleados
<form action="{{url('/empleados')}}" method="post">
{{csrf_field()}}
<label for="Nombre">{{'Nombre'}}</label>
<input class="form-control" type="text" name="Nombre" id="Nombre" value="">
<br>
<label for="Apellido">{{'Apellido'}}</label>
<input class="form-control" type="text" name="Apellido" id="Apellido" value="">
<br>
<label for="Correo">{{'Correo'}}</label>
<input class="form-control" type="email" name="Correo" id="Correo" value="">

<br>


<input type="submit" value="Agregar">
<a href="{{url('empleados')}}">Regresar</a>
</form>