

<label for="calle">{{'calle'}}</label>
<input type="text" name="calle" id="calle" 
value="{{ isset ($ubicacion->calle)? ($ubicacion->calle):''}}">
<br/>

<label for="colonia">{{'colonia'}}</label>
<input type="text" name="colonia" id="colonia" 
value="{{ isset ($ubicacion->colonia)? ($ubicacion->colonia):''}}">
<br/>

<label for="delegacion">{{'delegación'}}</label>
<input type="text" name="delegacion" id="delegacion"
value="{{ isset ($ubicacion->delegacion)? ($ubicacion->delegacion):''}}">
<br/>

<label for="numero">{{'número'}}</label>
<input type="nuemeric" name="numero" id="numero"
value="{{ isset ($ubicacion->numero)? ($ubicacion->numero):''}}">
<br/>

<input type="submit" value="{{ $Modo =='crear' ? 'Agregar': 'Modificar'}}">
<a href="{{ url('ubicacion') }}">Regresar</a>