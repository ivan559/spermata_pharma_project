@extends('inc/footer')
@section('footer')
@endsection()



@extends('inc/header')
@section('header')
<header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="{{asset('img/drugs.jpg')}}" alt="Fashion Blog" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      
      <h1 class="w3-jumbo w3-text-white w3-hide-small" ><b style="font-family: 'Oleo Script', cursive;color:black;"><strong>Spermata Pharmaceutical</b></strong></h1>
      
    </div>
  </header>


  <div class="w3-row w3-padding w3-border">

 
    <div class="w3-col l8 s12">
    
     
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Nuestra Labor</h3>
          
        </div>

        <div class="w3-justify">
          <img src="{{'img/drugs2.jpg'}}" alt="Girl Hat" style="width:100%" class="w3-padding-16">
          <p>
            magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
              
              
          </div>
        </div>
      </div>
      <hr>

      <!-- Blog entry -->
     
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>Misión Y Vision</h3>
          
        </div>

        <div class="w3-justify">
          <img src="{{'img/vision.jpg'}}" alt="Girl Hat" style="width:100%" class="w3-padding-16">
          <p>
            magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
         
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
              <div class="w3-col l2 m3">
                <img src="/w3images/avatar_smoke.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>George <span class="w3-opacity w3-medium">May 3, 2015, 6:32 PM</span></h4>
                <p>Great blog post! Following</p>
              </div>
          </div>
        </div>
      </div>
     
    </div>

    
    <div class="w3-col l4">

      <div class="w3-white w3-margin">
        <img src="{{'img/card.jpg'}}" alt="Jane" style="width:100%" class="w3-grayscale">
        <div class="w3-container " style="background: #212529; color: white;">
          <h4>Nuestros Servicios</h4>
          <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
        </div>
      </div>
      <hr>

  
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding" style="background: #212529; color: white;">
          <h4>Principios
          </h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">
            <img src="{{asset('img/innovation.jpg')}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Inovación</span>
            <br>
        
          </li>
          <li class="w3-padding-16">
            <img src="{{'img/quality.png'}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Calidad</span>
            <br>
      
          </li>
          <li class="w3-padding-16">
            <img src="{{asset('img/increase.jpg')}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Crecimiento</span>
            <br>
           
          </li>
         
        </ul>
      </div>
      <hr>

      
     
      <hr>

      
      <hr>
      
     

    </div>

  </div>


</div>





@endsection()

