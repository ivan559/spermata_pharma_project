@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')

<br></br>
<br></br>

<div  id="jumbo-view-id">
    <h2 style="font-family: 'Nunito', sans-serif;">Unidad de Visualizacion de Medicamentos</h2>

</div>

<div class="container-table-users">
<div class="card-group">

  @foreach($medicamentos as $mp )
  <div class="card">
    <div class="card-header" style="color: white; background:#007BFF;" ><h4>{{$mp->nombre}}</h4></div>
    <div class="card-img"><center><img src="{{asset('storage').'/'.$mp->foto}}" width="300" height="300" class="card-image-top"></center>
      <div class="card-header"></div>
      <div class="card-body">

      <p class="card-text"><strong>tipo:</strong><p class="card-text">{{$mp->tipo}}</p>
        <strong>Codigo:</strong><p class="card-text">{{$mp->codigo}}</p>
           <strong>IVA: </strong><p class="card-text">{{$ivas=$mp->iva/100* $mp->precio}}</p>
        <strong>Invima:</strong><p class="card-text">{{$mp->invima}}</p>
        <strong>Precio:</strong><p class="card-text">{{$mp->precio +$ivas}}</p>
        <strong>Expiracion:</strong><p class="card-text">{{$mp->expiracion}}</p>
        <strong>Proveedor</strong><p class="card-text">{{$mp->nombre_proveedor}}</p>
    </div>
    </div>
 
    <div class="card-footer">
         <ul id="option-menu">
           <li>
          <form method="post" action="{{url('/medicamentos/'.$mp->id)}}">
            @csrf
            {{method_field('DElETE')}}
           
            @can('medicamentos.destroy')
              <button type="submit"  id="formButton"class="btn btn-primary"><span class="oi oi-trash"></span></button>
            @endcan
           
          </form>
          </li>
          <li>
          @can('medicamentos.edit')
       
           
          <a href=""  data-toggle="modal" class="btn btn-primary" data-target="#exampleModal{{$mp->id}}"> <span class="oi oi-pencil"></span></a>

          <div class="modal fade" id="exampleModal{{$mp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#007BFF; color: white;">
        <h5 class="modal-title" id="exampleModalLabel{{$mp->id}}">{{$mp->nombre}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding: 50px;">

        <form method="POST" action="{{url('/medicamentos/'.$mp->id.'/update')}}">
          @csrf
          {{method_field('PUT')}}
          <label>Nombre</label>
     
            <div class="form-group">
              <span class="oi oi-beaker"></span> <label for="exampleInputEmail1">Medicamento</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Medicamentro" name="nombre" value="{{$mp->nombre}}">
              <small id="emailHelp" class="form-text text-muted">Procure colocar el nombre exacto del medicamento </small>
            </div>
            <div class="form-group">
              <span class="oi oi-fork"></span> <label for="exampleInputPassword1">Código</label>
            <input type="text" name="codigo" class="form-control" value="{{$mp->codigo}}"  placeholder="codigo">
            </div>
          
            <div class="form-group">
             <span class="oi oi-sun"></span> <label for="tipo_pharma">Tipo</label>
            <select class="form-control" name="tipo" id="tipo_pharma">
              @if($mp->tipo=='Analgésico')
                <option value="{{$mp->tipo}}">{{$mp->tipo}}</option>
                <option value="Antiácido">Antiácido</option> 
                <option value="Antialérgico">Antialérgico</option>
                <option value="Antidiarreico">Anatidiarreicos</option>
                <option value="Antiinfeccioso">Antiinfeccioso</option>
                <option value="Anatiinflamatorio">Anatiinflamatorio</option>
                <option value="Antipiretico">Antipiretico</option>
                <option value="Anatitusivo">Anatitusivos</option>
              @elseif($mp->tipo=='Antiácido')
                <option value="{{$mp->tipo}}">{{$mp->tipo}}</option>
                <option value="Analgésico">Analgésicos</option>
                <option value="Antialérgico">Antialérgico</option>
                <option value="Antidiarreico">Anatidiarreicos</option>
                <option value="Antiinfeccioso">Antiinfeccioso</option>
                <option value="Anatiinflamatorio">Anatiinflamatorio</option>
                <option value="Antipiretico">Antipiretico</option>
                <option value="Anatitusivo">Anatitusivos</option>
              @elseif($mp->tipo=='Antialérgico')
              <option value="{{$mp->tipo}}">{{$mp->tipo}}</option>
                <option value="Analgésico">Analgésicos</option>
                <option value="Antiácido">Antiácido</option> 
                <option value="Antidiarreico">Anatidiarreicos</option>
                <option value="Antiinfeccioso">Antiinfeccioso</option>
                <option value="Anatiinflamatorio">Anatiinflamatorio</option>
                <option value="Antipiretico">Antipiretico</option>
                <option value="Anatitusivo">Anatitusivos</option>
              @elseif($mp->tipo=='Antidiarreico')
               <option value="{{$mp->tipo}}">{{$mp->tipo}}</option>
                  <option value="Analgésico">Analgésicos</option>
              <option value="Antiácido">Antiácido</option> 
                <option value="Antialérgico">Antialérgico</option>
            
                <option value="Antiinfeccioso">Antiinfeccioso</option>
                <option value="Anatiinflamatorio">Anatiinflamatorio</option>
                <option value="Antipiretico">Antipiretico</option>
                <option value="Anatitusivo">Anatitusivos</option>
              @elseif($mp->tipo=='Antiinfeccioso')
                   <option value="{{$mp->tipo}}">{{$mp->tipo}}</option>
              <option value="Analgésico">Analgésicos</option>
                   <option value="Antiácido">Antiácido</option> 
                <option value="Antialérgico">Antialérgico</option>
                <option value="Antidiarreico">Anatidiarreicos</option>
                <option value="Anatiinflamatorio">Anatiinflamatorio</option>
                <option value="Antipiretico">Antipiretico</option>
                <option value="Anatitusivo">Anatitusivos</option>
              @elseif($mp->tipo=='Anatiinflamatorio')
                   <option value="{{$mp->tipo}}">{{$mp->tipo}}</option>
                  <option value="Analgésico">Analgésicos</option>
                     <option value="Antiácido">Antiácido</option> 
                <option value="Antialérgico">Antialérgico</option>
                <option value="Antidiarreico">Anatidiarreicos</option>
                <option value="Antiinfeccioso">Antiinfeccioso</option>
                <option value="Antipiretico">Antipiretico</option>
                <option value="Anatitusivo">Anatitusivos</option>
              @elseif($mp->tipo=='Antipiretico')

               <option value="{{$mp->tipo}}">{{$mp->tipo}}</option>
                <option value="Analgésico">Analgésicos</option>
                <option value="Antiácido">Antiácido</option> 
                <option value="Antialérgico">Antialérgico</option>
                <option value="Antidiarreico">Anatidiarreicos</option>
                <option value="Antiinfeccioso">Antiinfeccioso</option>
                <option value="Anatiinflamatorio">Anatiinflamatorio</option>
                <option value="Anatitusivo">Anatitusivos</option>
              @elseif($mp->tipo=='Anatitusivo')
               <option value="{{$mp->tipo}}">{{$mp->tipo}}</option>
                <option value="Analgésico">Analgésicos</option>
                <option value="Antiácido">Antiácido</option> 
                <option value="Antialérgico">Antialérgico</option>
                <option value="Antidiarreico">Anatidiarreicos</option>
                <option value="Antiinfeccioso">Antiinfeccioso</option>
                <option value="Anatiinflamatorio">Anatiinflamatorio</option>
                <option value="Antipiretico">Antipiretico</option>
          

              @endif
            </select>
              
            </div>

            <div class="form-group">
              <span class="oi oi-briefcase"></span> <label for="invima">Invima</label>
              <input type="text" name="invima" class="form-control" value="{{$mp->invima}}">
            </div>

             <div class="form-group">
              <span class="oi oi-dollar"></span> <label for="precio">Precio</label>
              <input type="number" name="precio" class="form-control" value="{{$mp->precio}}">
            </div>

              <div class="form-group">
              <span class="oi oi-dollar"></span> <label for="precio">IVA</label>
              <input type="number" name="iva" class="form-control" value="{{$mp->iva}}">
            </div>


              <div class="form-group">
              <span class="oi oi-calendar"></span> <label for="precio">Expiracion</label>
              <input type="date" name="expiracion" class="form-control" value="{{$mp->expiracion}}">
            </div>
            <div class="form-group">
            
             <span class="oi oi-people"></span> <label>Proveedor</label>
              @foreach($datos as $data)
              <select class="form-control" name="id_proveedor">
                <option value="{{$data->id}}">{{$data->nombre_proveedor}}</option>
              </select>
                @endforeach
            </div>
            <div class="custom-file">
    <input type="file" class="custom-file-input" id="foto" name="foto">
   
    <label class="custom-file-label" for="foto">Escoga una foto</label><br><br>

   
    <button type="submit" class="btn btn-primary">Enviar</button>
 
      </div>
        </form>

      </div>
      
    </div>
  </div>
</div>
       
          @endcan
         </li>
        <!-- Modal -->
        

        <li><a href="#" data-toggle="modal"  class="btn btn-primary" data-target="#exampleModalLongDetail"><span class="oi oi-person"></span></a></li>

        </li>
      </ul>

    </div>

  </div>

  @endforeach

</div>
 {{$medicamentos->links()}}
</div>
<br></br> 
<br></br> 
<br></br> 
@endsection()
