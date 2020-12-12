@if(Session::has('Mensaje')){{
    Session::get('Mensaje')

}}
@endif

<a href="{{url('empleados/create')}}">Agregar Empleado</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
             <th> numero </th>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Correo</th>
             <th>Acciones</th>
    
        </tr>
    </thead>

    <tbody>
    
        @foreach ($empleados as $empleado)
        
    
    
    <tr>
                <td>{{$loop->iteration}}</td>
            
            
                <td>{{$empleado->Nombre}}</td>
            
            
                <td>{{$empleado->Apellido}}</td>
            
                <td>{{$empleado->Correo}}</td>
            
                <td><a href="{{url('/empleados/'.$empleado->id.'/edit')}}">Editar</a>
            
                 | 
                
                <form method="post" action="{{url('/empleados/'.$empleado->id)}}">
                <!--la url es para borrar el id unico-->
               {{csrf_field()}}
               {{method_field('DELETE')}}
               <button type="submit" onclick="return confirm('¿Borrar?');">Borrar

               </button>
               </form>
                </td>
                 </tr>
    @endforeach
    
    
            
           
        
    </tbody>
 
</table>