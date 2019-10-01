           Edit
<form action="{{url ('/usuarios/'.$usuario->id)}} " method="post" enctype="multipart/form-data"> 
{{csrf_field()}}
{{method_field('PATCH')}}

@include('usuarios.form',['Modo'=>'editar'])
</form>



