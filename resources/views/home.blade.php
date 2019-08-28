@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')

<div class="row justify-content-center" style="margin-top: 250px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><em style="font-family: 'Oleo Script', cursive;">Spermata Farmaceutics</em><</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                         
                        </div>
                    @endif

                     <p>BIENVENIDO

                          Hola, este es el sistema de gestión de medicamentos, clientes y proveedores 
                </div>
            </div>
        </div>
    </div>
@endsection
