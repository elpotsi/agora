<!DOCTYPE html>
<html>
<head>
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js" integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg==" crossorigin=""></script>

   
		
			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  

	
	<style>
	.nav>li {
   max-height: 2px;
}
	
  #mapid { height: 180px; }
	</style>
</head>

<body>





<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
<!--Dimos tag-->	 
	 <a href="#" class="navbar-brand dropdown" data-toggle="dropdown"><p> Χαϊδαρίου <span class="caret"></span></p></a>
                  <ul class="dropdown-menu" id="BrandDropdown" role="menu">
                    <li><a href="#">Ειδήσεις</a></li>
					<li><a href="#msg">Δημόσια έγγραφα</a></li>
				  </ul>
    
	</div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Χαϊδαρίου</a></li>-->
       
		<!--<li class = "active" ><a>Χαϊδαρίου</a></li>-->
		
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Τοποθεσίες<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Σημεία ενδιαφέροντος - Αξιοθέατα</a></li>
            <li><a href="#">Καταστήματα - Επιχειρήσεις</a></li>
			<li><a href="#">Δημόσιες υπηρεσίες</a></li>
          </ul>
        </li>
		
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Δράσεις<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Εθελοντικές δράσεις</a></li>
            <li><a href="#">Εκδηλώσεις</a></li>
          </ul>
        </li>
		
		<li><a href="#info">Προβλήματα</a></li>
		
        <li><a href="#info">Online Πληρωμές</a></li>
		
        
	</ul>
	
	<ul class="nav navbar-nav" style="float: right">
		
		<li>
		<a href="#"><p><img src="profile-icon.png" height="20" width="20"> Home <span class="caret"></span></p></a>
		</li>
	</u class="nav navbar-nav">
		
      
    </div>
  </div>
</nav>

   
<!--div id="googleMap" style="width:1900px;height:985px;"></div-->
<!--div id="AgoraMap" style="width:1900px;height:985px;">agora map</div-->

 <div id="mapid" style="width:1900px;height:985px;"></div>

      <script>
  var mymap = L.map('mapid').setView([51.505, -0.09], 13);
  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    id: 'your.mapbox.project.id',
    accessToken: 'your.mapbox.public.access.token'
}).addTo(mymap);

  </script>





</body>
</html>
