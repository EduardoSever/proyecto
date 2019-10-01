<form action="{{url('/ubicacion/' . $ubicacion->id) }} " method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }} 

@include('ubicacion.form',['Modo'=>'editar'])
</form>