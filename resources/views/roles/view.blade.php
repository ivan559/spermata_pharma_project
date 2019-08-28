@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')
<br></br>
<div id="carding-table-role">
<div class="jumbotron" id="jumbo">
	<h3>Unidad:Roles de Usuario</h3>
</div><br>
<input type="search" id="search" class="form-control" placeholder="busque un registro"><br>
<table class="table table-striped table-dark" id="Supertable" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Rol</th>
      <th scope="col">Usuario</th>

    </tr>
  </thead>

  <tbody id="tbody">
  	  @foreach($tabla as $role)
    <tr id="tr">
      <th scope="row">{{$role->id}}</th>
      <td>{{$role->name}}</td>
      <td>{{$role->name_usuario}}</td>
     
    </tr>
      @endforeach
  </tbody>

</table>

</div>
<br><br>
<br></br>

@endsection()

