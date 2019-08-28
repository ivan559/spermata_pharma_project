<!DOCTYPE html>
<html>
<head>
	<title>Spermata-Pharma - @yield('title')</title>
	<!--styles-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
    <!--scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript" src="{{URL:: asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/myscript.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Styles -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('css/styles.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="{{asset('open-iconic-master/font/css/open-iconic-bootstrap.css')}}">
</head>
<body>

 <header>
  <nav class="navbar  fixed-top  navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}" id="title-principal" style="font-family: 'Oleo Script', cursive;">Spermata Pharma</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Quienes Somos<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Visión y Mision<span class="sr-only">(current)</span></a>

      </li>
      <li class="nav-item active">
        @can('clientes.index')
            <div class="dropdown show">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @can('clientes.create')
          <a class="dropdown-item" href="{{url('/clientes/create')}}">Registro</a>
          @endcan

          <a class="dropdown-item" href="{{url('/clientes/')}}">Visualizacion</a>
    
        </div>

      </div>
        @endcan
      </li>
      
       @can('medicamentos.index')
      <li class="nav-item">
          <div class="dropdown show">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuMedicamentos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medicamentos</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuMedicamentos">  
      @can('medicamentos.create')
        <a class="dropdown-item" href="{{url('/medicamentos/create')}}">Registrar Medicamento</a>
      @endcan

      @can('medicamentos.show')
       <a class="dropdown-item" href="{{url('/medicamentos/')}}">Visualizacion</a>
       @endcan
      </div>
    </div>
      </li>
      @endcan



      @can('proveedores.index')
      <li class="nav-item">
          <div class="dropdown show">
            <a class="nav-link dropdown-toggle" href="" role="button" id="dropdownMenuProveedores" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proveedores</a>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuProveedores">
              @can('proveedores.create')
                 <a  class="dropdown-item" href="{{url('/proveedores/create')}}">Registrar Proveedor</a>
              @endcan
              @can('proveedores.show')
              <a href="{{url('/proveedores/')}}" class="dropdown-item">Visualizacion</a>
              @endcan()
             </div>
          </div>
      </li>
      @endcan





      @can('user.index')
      <li class="nav-item">
          <div class="dropdown show">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuUsuarios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuUsuarios">  
      
        <a class="dropdown-item" href="{{url('/user')}}">Usuarios</a>
      
    
                              
                     
     </li>

      @endcan

      <li class="nav-item active">
        @can('roles.index')
            <div class="dropdown show">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Roles
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
         
          <a class="dropdown-item" href="{{url('/roles')}}">Visualizacion</a>
    
        </div>

      </div>
        @endcan
      </li>
      


    </ul>

    <!-- Right Side Of Navbar -->
              
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a>
                            </li>
                        
                        <li class="nav-item">

                        @if (Route::has('register'))
                            <a   class="nav-link"href="{{ route('register') }}">Register</a>
                        @endif
                      </li>
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name_usuario }} <span class="caret"></span>

                                </a>

                              
                                      

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                 

                 <li class="nav-item active">
                    <a class="nav-link" href="{{url('/home')}}">Principal<span class="sr-only">(current)</span></a>
                </li>
         
                        @endguest
                    </ul>
  </div>
</nav>
 </header>


@yield('header')