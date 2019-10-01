@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<a href="{{ url('ubicacion/create') }}">Agregar Ubicacion</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>calle</th>
            <th>colonia</th>
            <th>delegacion</th>
            <th>numero</th>
            
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($ubicacion as $ubicacion1)    
        <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$ubicacion1->calle}}</td>
            <td>{{$ubicacion1->colonia}}</td>
            <td>{{$ubicacion1->delegacion}}</td>
            <td>{{$ubicacion1->numero}}</td>
            <td>
                <a href="{{url('/ubicacion/'.$ubicacion1->id.'/edit') }}">
                
                    Editar
                </a> 
                
           <form method="post" action="{{ url('/ubicacion/'.$ubicacion1->id) }}">
           {{csrf_field() }}
           {{ method_field('DELETE')}}
           <button type="submit" onclick="return confirm('¿Borrar?');" >Borrar </button>
           </form>
           </td>
        </tr>
    @endforeach    
    </tbody>
</table>