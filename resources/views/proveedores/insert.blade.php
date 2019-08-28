@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')
<br><br>
<br><br>

<div class="card" id="carding">
	<div class="card-header" style="background:#212529; color: white;padding: 20px;">
    	<h3 style="font-family: 'Nunito', sans-serif">Unidad de Registro de proveedores</h3>
    </div>
<div class="card-body">
     	<form action="{{url('/proveedores')}}" method="POST" enctype="multipart/form-data">
      @csrf
 	 		<div class="card" id="carding-medicamentos">
 	 			
 	 			  <div class="card-body" style="padding: 70px;">

  					<div class="form-group">
    					<span class="oi oi-person"></span> <label for="name">Nombre Proveedor</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de proveedor" name="nombre_proveedor" required="required">
    				
  					</div>
  					<div class="form-group">
    					<span class="oi oi-paperclip"></span> <label for="address">Direccion</label>
   					<input type="text" name="direccion" class="form-control"  placeholder="direccion" required="required">
  					</div>
  					<div class="form-group">
    					<span class="oi oi-phone"></span></span> <label for="phone">Telefono</label>
   					<input type="text" name="telefono" class="form-control"  placeholder="telefono" required="required">
  					</div>
            		<div class="form-group">
    					<span class="oi oi-zoom-in"></span> <label for="country">País</label>
   					<input type="text" name="pais" class="form-control"  placeholder="pais" required="required">
  					</div>

   
    <button type="submit" class="btn btn-primary">Enviar</button>
 
  </div>
 
         </div>
 	 		</div>
 	 	</form>

</div>
</div>

@endsection()