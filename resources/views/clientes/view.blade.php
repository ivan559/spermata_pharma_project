
@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')

@if(Session::has('Mensaje'))
<div class="alert-success">
{{Session::get('Mensaje')}}
</div>
@endif
<br><br>
<br><br>
<br><br>
<div class="jumbotron" id="jumbo-view">
 		<h2 style="font-family: 'Nunito', sans-serif;">Unidad de Visualizacion de Registros</h2>

 	</div>
 <div class="container-table">
 	
 <table class="table table-bordered">
 	<thead class="thead-dark">
 		<tr>
 			<th>Nombres y Apellidos</th>
 			<th>Tipo de Identificacion</th>
 			
 			<th>Acciones</th>
 		</tr>

 	</thead>
 	

 	<tbody>
 		@foreach($clientes as $c)
 		  <tr>
 		  	<td>{{$c->nombre_apellido}}</td>
 		  	 @if($c->tipo_identificacion=='cc')
 		  	 	<td>Cedula de ciudadania </td>
 		  	 @elseif($c->tipo_identificacion=='ti')
 		  	 	<td>Tarjeta de Identidad</td>
 		  	 @else
 		  	 	<td>Cedula de Extranejria</td>
 		  	 @endif
 		  	 <td>
          <ul id="option-menu">
           <li>
 		  	 	<form method="post" action="{{url('/clientes/'.$c->id)}}">
 		  	 		@csrf
 		  	 		{{method_field('DElETE')}}
            @can('clientes.destroy')
 		  	 		<button type="submit"  id="formButton"class="btn btn-primary"><span class="oi oi-trash"></span></button>
             @endcan
 		  	 	</form>
          </li>
          <li>
           @can('clientes.edit')
 		  	 	<a href=""  data-toggle="modal" class="btn btn-primary" data-target="#exampleModalLong{{$c->id}}"><span class="oi oi-pencil"></span></a>
          @endcan
         </li>
				<!-- Modal -->
				<div class="modal fade" id="exampleModalLong{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">{{$c->nombre_apellido}}</h5>
                @can('clientes.destroy')
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
				        </button>
                @endcan
				      </div>
				      <form method="POST" action="{{url('/clientes/'.$c->id)}}">
				      	@csrf
				      	{{method_field('PATCH')}}
				      <div class="modal-body">
       						<div class="form-row">
    					<div class="col-md-4 mb-3">
      					<label for="nombre_apellido">Nombre y Apellido</label>
      					<input type="text" class="form-control" id="nombre_apellido" placeholder="Nombre Apellido" value="{{$c->nombre_apellido}}" name="nombre_apellido" required>
    					</div>
    					<div class="col-md-4 mb-3">
      					<label for="validationDefault02">Tipo Documento</label>
     					<select name="tipo_identificacion" class="form-control">
     					  @if($c->tipo_identificacion=='cc')	
     						<option value="{{$c->tipo_identificacion}}">Cedula de ciudadania</option>
     						<option value="ce">Cedula de Extranjeria</option>
     						<option value="ti">Tarjeta de Identidad</option>
     					   @elseif($c->tipo_identificacion=='ti')
     					   	<option value="{{$c->tipo_identificacion}}">Tarjeta de Identidad</option>
     						<option value="ce">Cedula de Extranjeria</option>
     						<option value="ce">Cedula de Ciudadania</option>
     					   @else:
     					     <option value="{{$c->tipo_identificacion}}">Cedula de Extranjeria</option>
     						<option value="ce">Cedula de Ciudadania</option>
     					  @endif

     					</select>
    					</div>
    					<div class="col-md-4 mb-3">
      					<label for="validationDefaultUsername">documento</label>
      					<div class="input-group">
        
        					<input type="text" class="form-control" id="documento" placeholder="documento" aria-describedby="documento" name="documento" value="{{$c->documento}}"required>
      					</div>
    					</div>
  					</div>
  					<div class="form-row">
    					<div class="col-md-6 mb-3">
      					<label for="validationDefault03">Direccion</label>
      					<input type="text" class="form-control" id="Direccion" name="direccion" placeholder="Direccion"value="{{$c->direccion}}" required>
    					</div>
    					<div class="col-md-3 mb-3">
      					<label for="email">Email</label>
      					<input type="mail" class="form-control" id="email" placeholder="correo electronico" value="{{$c->email}}" name="email" required>
    					</div>
    					<div class="col-md-3 mb-3">
      					<label for="validationDefault05">Telefono</label>
      					<input type="number" class="form-control" id="Telefono" placeholder="telefono" name="telefono" value="{{$c->telefono}}" required>
    					</div>

     					<div class="custom-file">
    					<input type="file" class="custom-file-input" id="foto" name="foto" required>
    					<label class="custom-file-label" for="foto">Escoga una foto</label>
    
  					</div>
  					</div>
  					<div class="form-group">
    					<div class="form-check">
     
      
    					</div>
  					</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary"></button>
				      </div>
				  </form>
				    </div>
				  </div>
				</div>

				<li><a href="#" data-toggle="modal"  class="btn btn-primary" data-target="#exampleModalLongDetail{{$c->id}}"><span class="oi oi-person"></span></a></li>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalLongDetail{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header" style="color:white; background: #212529; ">
				        <h5 class="card-title">{{$c->nombre_apellido}}</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
				        </button>
				      </div>
             
				         <div class="modal-body">
				         	<div class="card" style="width:100%;">
                     <div class="card-header">
              
             </div>
  							<img src="{{asset('storage').'/'.$c->foto}}" class="card-img-top" width="100px" height="300px" alt="...">
  							<div class="card-body">
    						
    							<p class="card-text">
    								<span><strong>Documento:</strong></span><p>{{$c->documento}}</p>
 		  	 						<p><span><strong>Direccion:</strong></span>{{$c->direccion}}</p>
 		  	 						<p><span><strong>Email:</strong></span>{{$c->email}}</p>
 		  	 						<p><span><strong>Télefono</strong></span>{{$c->telefono}}</p>
 		  	 

    							</p>
    						
  							</div>
							</div>
				         </div>
				    </div>
				  </div>
				</div>
      </ul>

 		  	 </td>

 		  </tr>
 		@endforeach
 	</tbody>
 </table>
 {{$clientes->links()}}
</div>
@endsection()

