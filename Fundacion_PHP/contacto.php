<?php
include('header.php');
?>
<section>
    
    <br>
    <br>
    <div class="jumbotron">
    <h1 class="display-4">Contactanos!</h1>
        <p class="lead">En la Corporacion Generacion sin limites es una placer resolverte las dudas que se te presenten
        por eso te invitamos a contactarnos en los siguiente medios y con la mayor brevedad te daremos una pronta respuesta.</p>
    <hr class="my-4">
    <p>Puedes escribirnos a corpogensinlimites@gmail.com y al numero celular 3107549877.</p>
  </div>
  <br>

<div id="map" style="width:900px;height:400px;background:yellow;margin-left: 100px;"></div>

<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(6.2053999, -75.5857192),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>


</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIr7irq6CEqJo_W8N1so-CjJB_DDTXCtM&callback=myMap"></script>

<?php
    include ('Footer.php');
?>