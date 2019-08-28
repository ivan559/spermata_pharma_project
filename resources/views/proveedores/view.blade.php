@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')

<br><br>
<br><br>
<br><br>
<div class="jumbotron" id="jumbo-view" style="background:#28A745; color: white;">
 		<h2 style="font-family: 'Nunito', sans-serif;">Unidad: Visualización de Proveedores</h2>

 	</div>
 <div class="container-table">
 	<input type="search" id="search" class="form-control" placeholder="busque un registro"><br>
 <table class="table table-bordered" id="Supertable">
 	<thead style="background:#28A745; color: white;">
 		<tr>
 			<th>Nombres proveedor</th>
 			<th>Direccion</th>
 			
 			<th>Telefono</th>
 			<th>Pais</th>
 			<th>Acciones</th>
 		</tr>

 	</thead>
 	
 	@foreach($data as $d)
 	<tbody id="tbody">
 		<tr id="tr">
 			<td>{{$d->nombre_proveedor}}</td>
 			<td>{{$d->direccion}}</td>
 			<td>{{$d->telefono}}</td>
 			<td>{{$d->pais}}</td>
 			<td>
 				<ul id="option-menu">
 					<li>
          <form method="post" action="{{url('/proveedores/'.$d->id)}}">
            @csrf
            {{method_field('DElETE')}}
           
            @can('proveedores.destroy')
              <button type="submit" onclick="return confirm('Desea Eliminar este Registro')" class="btn btn-success"><span class="oi oi-trash"></span></button>
            @endcan
           
          </form>
          </li>
 					<li>
 						<!-- Button trigger modal -->

  <button type="submit"  id="formButton"class="btn btn-success"  data-toggle="modal" data-target="#exampleModal{{$d->id}}" ><span class="oi oi-pencil"></span></button>
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#28A745; color: white; ">
        <h5 class="modal-title" id="exampleModalLabel" >{{$d->nombre_proveedor}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{url('/proveedores/'.$d->id)}}">
      	@csrf 
      	{{method_field('PUT')}}
      <div class="modal-body">
       <div class="form-group">
    					<span class="oi oi-person"></span> <label for="name">Nombre Proveedor</label>
    					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de proveedor" value="{{$d->nombre_proveedor}}" name="nombre_proveedor">
    				
  					</div>
  					<div class="form-group">
    					<span class="oi oi-paperclip"></span> <label for="address">Direccion</label>
   					<input type="text" name="direccion" class="form-control" value="{{$d->direccion}}" placeholder="direccion">
  					</div>
  					<div class="form-group">
    					<span class="oi oi-phone"></span></span> <label for="phone">Telefono</label>
   					<input type="text" name="telefono" class="form-control"  value="{{$d->telefono}}" placeholder="telefono">
  					</div>
            		<div class="form-group">
    					<span class="oi oi-zoom-in"></span> <label for="country">País</label>
   					<input type="text" name="pais" class="form-control" value="{{$d->pais}}" placeholder="pais">
  					</div>
      </div>
      
      <div class="card-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
  </form>
    </div>
  </div>
</div>



 					</li>
 				</ul>
 			</td>
 		</tr>
 	</tbody>
 	@endforeach
 </table>

 
</div>
@endsection()

