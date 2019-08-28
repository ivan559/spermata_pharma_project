@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')
<br><br>
<br><br>

<div class="card" id="carding">
  <div class="card-header" style="background:#212529; color: white;padding: 20px;">
    	<h3 style="font-family: 'Nunito', sans-serif">Unidad de Registro de Clientes</h3>
    </div>
  <div class="card-body" style="padding: 70px;">
  <form method="post" action="{{url('/clientes')}}" enctype="multipart/form-data">
  	@csrf
    <div class="card" id="carding">
      <div class="card-body">
   <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="nombre_apellido">Nombre y Apellido</label>
      <input type="text" class="form-control {{$errors->has('nombre_apellido')?'is-invalid':''}}" id="nombre_apellido" placeholder="Nombre Apellido" value="{{isset($clientes->nombre_apellido)?$clientes->nombre_apellido:old('nombre_apellido')}}"  name="nombre_apellido" >
      {!! $errors->first('nombre_apellidos',' <div class="invalid-feedback">:message</div>') !!}
     
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Tipo Documento</label>
     <select name="tipo_identificacion"  value="{{isset($clientes->tipo_identificacion)?$clientes->tipo_identificacion:old('tipo_identificacion')}}" class="form-control {{$errors->has('tipo_identificacion')?'is-invalid':''}}">
        {!! $errors->first('tipo_identificacion','<div class="invalid-feedback">:message</div>') !!}
      <option selected="selected" disabled="disabled">Seleccione Opcion</option>
     	<option value="ti">Tarjeta de Identidad</option>
     	<option value="cc">Cedula de Ciudadania</option>
     	<option value="ce">Cedula de Extranjeria</option>
     </select>
   
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">documento</label>
      <div class="input-group">
        
        <input type="text" class="form-control {{$errors->has('documento')?'is-invalid':''}}" id="documento" placeholder="documento" aria-describedby="documento" name="documento" value="{{isset($clientes->documento)?$clientes->documento:old('documento')}}">
        {!! $errors->first('documento','<div class="invalid-feedback">:message</div>') !!}
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Direccion</label>
  <input type="text" class="form-control {{$errors->has('direccion')?'is-invalid':''}}" id="Direccion" name="direccion" placeholder="Direccion" value="{{isset($clientes->direccion)?$clientes->direccion:old('direccion')}}">
      {!! $errors->first('direccion','<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="col-md-3 mb-3">
      <label for="email">Email</label>
      <input type="mail" class="form-control {{$errors->has('email')?'is-invalid':''}}" id="email" placeholder="correo electronico"  name="email" value="{{isset($clientes->email)?$clientes->email:old('email')}}" >
      {!! $errors->first('email','<div class="invalid-feedback">:message</div>')!!}
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Telefono</label>
      <input type="number" class="form-control {{$errors->has('telefono')?'is-invalid':''}}" id="Telefono" placeholder="telefono" name="telefono" value="{{isset($clientes->telefono)?$clientes->telefono:old('telefono')}}" >
      {!!$errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}
    </div>

     <div class="custom-file">
    <input type="file" class="custom-file-input {{$errors->has('foto')?'is-invalid':''}}" id="foto" name="foto" value="{{isset($clientes->foto)?$clientes->foto:old('foto')}}">
    {!!$errors->first('foto','<div class="invalid-feedback">:message</div>') !!}
    <label class="custom-file-label" for="foto">Escoga una foto</label>
    
  </div>
  </div>
  <div class="form-group">
    <div class="form-check">
     
      
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
</div>
</div>
</form>
</div>


</div><br>
@endsection()