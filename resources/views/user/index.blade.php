@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')
<br><br>

<div class="container-table-users">
  <input type="search" name="" id="search" class="form-control" placeholder="buscar">
</div>
<div class="container-table-users" id="Supertable">
 
<div class="card-group"  id="tbody">
 @foreach($user as $us )
  <div class="card" id="tr">
    <div class="card-header" ><h4></h4></div>
    
    <div class="card-body">
      <h5 class="card-title">{{$us->name_usuario}}</h5>
      <p class="card-text"><strong>Email:</strong>{{$us->email}}<br>
        <strong>Documento:</strong>{{$us->codigo}}<br>

      </p>
    </div>
    <div class="card-footer">
       <ul id="option-menu">
           <li>
          <form method="post" action="{{url('/user/'.$us->id)}}">
            @csrf
            {{method_field('DElETE')}}
            @can('user.destroy')
            <button type="submit"  onclick="return confirm('Desea eliminar este registro')" class="btn btn-primary"><span class="oi oi-trash"></span></button>
             @endcan
          </form>
          </li>
          <li>
         
         </li>
        <!-- Modal -->
      @can('user.edit')
        <li><a href="{{url('/user/'.$us->id.'/edit/')}}"   class="btn btn-primary" ><span class="oi oi-person"></span></a></li>
      @endcan
      </ul>

     
    </div>

  </div>


 @endforeach
</div>
{{$user->links()}}

</div> 



@endsection()