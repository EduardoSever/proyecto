

<label for="Nombre">{{'Nombre'}}</label> 
<input type="text" name="Nombre" id="Nombre" 
value="{{ isset($usuario->Nombre)?$usuario->Nombre:''}}">
<br/>

<label for="ApellidoPaterno">{{'Apellido paterno'}}</label> 
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" 
value="{{ isset($usuario->ApellidoPaterno)?$usuario->ApellidoPaterno:''}}">
<br/>

<label for="ApellidoMaterno">{{'Apellido materno'}}</label> 
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" 
value="{{ isset($usuario->ApellidoMaterno)?$usuario->ApellidoMaterno:''}}">
<br/>
<label for="Edad">{{'Edad'}}</label> 
<input type="Numeric" name="Edad" id="Edad"
value="{{ isset($usuario->Edad)?$usuario->Edad:''}}">
<br/>

<input type="submit" value="{{$Modo == 'Crear' ? 'Editar':'Agregar'}}">
<a href="{{url('usuarios')}}">Regresar<a>

<br/>


