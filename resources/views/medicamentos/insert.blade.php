@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')
<br><br>
<br><br>
 <div>
 	 <div class="card" id="carding">
      <div class="card-header"  style="background:#007BFF; color: white;padding: 20px;">
          <h3 style="font-family: 'Nunito', sans-serif">Unidad Registro de Medicamentos</h3>
        </div>
     <div class="card-body">   
 	 	<form action="{{url('/medicamentos')}}" method="POST" enctype="multipart/form-data">
      @csrf
 	 		<div class="card" id="carding-medicamentos">
 	 			
 	 			  <div class="card-body" style="padding: 70px;">

  					<div class="form-group">
    					<span class="oi oi-beaker"></span> <label for="exampleInputEmail1">Medicamento</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Medicamentro" name="nombre"  required="required">
    					<small id="emailHelp" class="form-text text-muted">Procure colocar el nombre exacto del medicamento </small>
  					</div>
  					<div class="form-group">
    					<span class="oi oi-fork"></span> <label for="exampleInputPassword1">Código</label>
   					<input type="text" name="codigo" class="form-control"  placeholder="codigo" required="required">
  					</div>
  				
            <div class="form-group">
             <span class="oi oi-sun"></span> <label for="tipo_pharma">Tipo</label>
            <select class="form-control" name="tipo" id="tipo_pharma" required="required">
                <option value="Analgésico">Analgésicos</option>
                <option value="Antiácido">Antiácido</option> 
                <option value="Antialérgico">Antialérgico</option>
                <option value="Antidiarreico">Anatidiarreicos</option>
                <option value="Antiinfeccioso">Antiinfeccioso</option>
                <option value="Anatiinflamatorio">Anatiinflamatorio</option>
                <option value="Antipiretico">Antipiretico</option>
                <option value="Anatitusivo">Anatitusivos</option>
            </select>
              
            </div>

            <div class="form-group">
              <span class="oi oi-briefcase"></span> <label for="invima">Invima</label>
              <input type="text" name="invima" class="form-control" required="required">
            </div>

             <div class="form-group">
              <span class="oi oi-dollar"></span> <label for="precio">Precio</label>
              <input type="number" name="precio" class="form-control" required="required">
            </div>

              <div class="form-group">
              <span class="oi oi-dollar"></span> <label for="precio">IVA</label>
              <input type="number" name="iva" class="form-control" required="required">
            </div>


              <div class="form-group">
              <span class="oi oi-calendar"></span> <label for="precio">Expiracion</label>
              <input type="date" name="expiracion" class="form-control" required="required">
            </div>
            <div class="form-group">
            
             <span class="oi oi-people"></span> <label>Proveedor</label>
               @foreach($datos as $data)
              <select class="form-control" name="id_proveedor" required="required">
                <option value="{{$data->id}}">{{$data->nombre_proveedor}}</option>
              </select>
              @endforeach
            </div>
            <div class="custom-file">
    <input type="file" class="custom-file-input" id="foto" name="foto" required="required">
   
    <label class="custom-file-label" for="foto">Escoga una foto</label><br><br>

   
    <button type="submit" class="btn btn-primary">Enviar</button>
 
  </div>
 
         </div>
 	 		</div>
 	 	</form>
   </div>
 	 </div>
 </div>

@endsection()
