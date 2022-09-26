<h1> {{$modo}} cliente</h1>

@if(count($errors)>0)
  <div class="alert alert-danger" role="alert">
      <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
      </ul>
  </div>
 
@endif

<div class="form-group">


<label for="Documento">Documento</label>
<input type="text" class="form-control" name="Documento" value="{{isset($cliente->Documento)?$cliente->Documento:old('Documento')}}" id="Documento">

</div>

<div class="form-group">
<label for="Nombres">Nombres</label>
<input type="text" class="form-control" name="Nombres" value="{{isset($cliente->Nombres)?$cliente->Nombres:old('Nombres') }}" id="Nombres">

</div>

<div class="form-group">
<label for="Apellidos">Apellidos</label>
<input type="text" class="form-control" name="Apellidos" value="{{isset($cliente->Apellidos)?$cliente->Apellidos:old('Apellidos')}}"  id="Apellidos">

</div>

<div class="form-group">
<label for="Correo">Correo</label>
<input type="text" class="form-control" name="Correo"value="{{isset($cliente->Correo)?$cliente->Correo:old('Correo')}}" id="Correo">

</div>

<div class="form-group">
<label for="Celular">Celular</label>
<input type="text" class="form-control" name="Celular" value="{{isset($cliente->Celular)?$cliente->Celular:old('Celular')}}" id="Celular">

</div>

<div class="form-group">
<label for="Ciudad">Ciudad</label>
<input type="text" class="form-control" name="Ciudad" value="{{isset($cliente->Ciudad)?$cliente->Ciudad:old('Ciudad')}}" id="Ciudad">

</div>

<div class="form-group">
<label for="Direccion">Direccion</label>
<input type="text" class="form-control" name="Direccion" value="{{isset($cliente->Direccion)?$cliente->Direccion:old('Direccion')}}" id="Direccion">

</div>
<div class="form-group">
<label for="Foto"></label>
@if (isset($cliente->Foto))
<img  class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$cliente->Foto}}"  width="100" alt="">   
@endif
<input type="file" class="form-control" name="Foto" value=""  id="Foto">

</div>
<br>
<input class="btn btn-success" type="submit" value="{{$modo}} datos">

<a input class="btn btn-primary" href="{{url('cliente/')}}"> Regresar</a>

<br>