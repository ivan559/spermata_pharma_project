@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')
<br><br>
<br><br>
            
<div class="container-table-users" style="margin-top:20px;">
   <form method="POST" action="{{url('/user/'.$user->id.'/update')}}">
             
              @csrf
         {{method_field('PUT')}}
           <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="name">Nombre y Apellido</label>
                <input type="text" class="form-control" id="name" placeholder="Nombre Apellido" value="{{$user->name_usuario}}" name="name" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Documento</label>
                <input type="text" class="form-control" id="codigo" placeholder="Nombre Apellido" value="{{$user->codigo}}" name="codigo" required>
              </div>
              
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3"> <label for="validationDefault02">Email</label>
                <input type="mail" class="form-control" id="email" placeholder="Nombre Apellido" value="{{$user->email}}" name="email" required>
                
              </div>
              
            </div>
            <div class="form-group">
              <ul class="list-unstyled">
                
                
                 @foreach($roles as $role)
                    <li>
                      <label>
                      <input type="checkbox" name='roles[]' value='{{$role->id}}'>
                      {{$role->name}}
                      <em>({{$role->description ?:'N/A'}})</em>
                    </label>
                    </li>
                  @endforeach-

              </ul>
            </div>
        
              <div class="card-footer">
               
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
              </div>
            </form>
</div>
@endsection