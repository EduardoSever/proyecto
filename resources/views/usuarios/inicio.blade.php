  


@if(Session::has('Mensaje')){{
    Session::get ('Mensaje')
}}
@endif

<a href="{{url('usuarios/create')}}">Agregar Usuario</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>ApellidoPaterno</th>
            <th>ApellidoMaterno</th>
            <th>Edad</th>
            
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($usuarios as $usuario1)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$usuario1->Nombre}}</td>
            <td>{{$usuario1->ApellidoPaterno}}</td>
            <td>{{$usuario1->ApellidoMaterno}}</td>
            <td>{{$usuario1->Edad}}</td>
            <td>            
            <a href="{{url('/usuarios/'.$usuario1->id.'/edit')}} "> 
            Editar
             </a>
                <form method="post" action="{{url('/usuarios/'.$usuario1->id)}}">

                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
