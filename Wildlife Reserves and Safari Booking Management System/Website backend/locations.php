<!DOCTYPE html>
<html>
<body bgcolor="#E6E6FA">
<center>
<h2 align="center">KAZIRANGA NATIONAL PARK</h2>
<div id="googleMap1" style="width:500px;height:500px;"></div>
<br>
<!--<div id="googleMap4" style="width:00px;height:400px;"></div>-->
</center>
<script>
function myMap() 
{
  var myll=new google.maps.LatLng(26.577515, 93.171118);
  var mapOptions1 = {
    zoom:10,
    center: new google.maps.LatLng(26.577515, 93.171118),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map1 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);

  var marker = new google.maps.Marker({
    position: myll,
    map: map1,
    title: 'KAZIRANGA'});

  marker.setMap(map1);
  var map2 = new google.maps.Map(document.getElementById("googleMap2"),mapOptions2);
  var map3 = new google.maps.Map(document.getElementById("googleMap3"),mapOptions3);
  var map4 = new google.maps.Map(document.getElementById("googleMap4"),mapOptions4);


}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbmoaFeMRUecSM2ehU_hW9NGH1FbwX6bg&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
