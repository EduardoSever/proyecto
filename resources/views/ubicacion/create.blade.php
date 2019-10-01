Seccion para agregar ubicaciones

<form action="{{url('/ubicacion')}}" method="post" enctype="multipart/form-data">
{{csrf_field() }}

@include('ubicacion.form',['Modo'=>'crear'])

</form>

