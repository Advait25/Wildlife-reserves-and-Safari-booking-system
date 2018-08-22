<html>
<head>
<link rel="stylesheet" href="homecs.css"/>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 10px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    /*background-color: #fefefe;*/
    margin: auto;
    /*padding: 20px;*/
    border: 1px solid #888;
    width: 80%;
	background-color:#006600;
}

.container {
  width: 100%;
  height: 50%;
  background-color:#006600;
}

.lpane {
    width: 33.33%;
    height: 100px;
    float: left;
    border-collapse: collapse;
	background-color:#006600;
}

.mpane {
    width: 33.33%;
    height: 100px;
    float: left;
    border-collapse: collapse;
	background-color:#006600;
}

.rpane {
  width: 33.33%;
  height: 100px;
  /*position: relative;*/
  float: right;
  border-collapse: collapse;
  background-color:#006600;
}

.lpane:hover{
background-color:#009900;
padding-bottom:200px;
padding-top:10px;
border-radius:9px;
}

.mpane:hover{
background-color:#009900;
padding-bottom:200px;
padding-top:10px;
border-radius:9px;
}

.rpane:hover{
background-color:#009900;
padding-bottom:200px;
padding-top:10px;
border-radius:9px;
}

.botpane {
  width: 100%;
  height: 45%;
  border-collapse: collapse;
}

.submitb{
    background-color: #FF3300;
    border: none;
    color: white;
    padding: 10px 12px;
    text-decoration: none;
	font-family: Arial Black;
    margin-top:-15px;
    cursor: pointer;
	border-radius:7px;
}

.submitb:hover{
background-color:#FF0000;
}
.padd {
    width: 100%;
    padding: 12px 20px;
	border-radius:4px;
	border-color:#FFFFFF;
	background-color:#fff;
}

.vis{
/*background-color:#666600;*/
letter-spacing:2px;
border-color:#000000;
border:thick;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:14px;
padding:30px;
color:#FFFFFF;
}

.close {
    color: #aaaaaa;
    float: right;
    font-size: 40px;
    font-weight: bold;
	margin-right:7px;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<body>
<h2 align="left" style="color:#FFFFFF;">WELCOME - <?php echo $_POST["login_id"];?></h3>
<!-----------HEADER-------------->
<div class="header">
<font face="Arial, Helvetica, sans-serif" color="#AC1717">
<b>
<div class="links" style="float:right;">
<button id="myBtn" class="submitb">Preferences</button>
</div>
</b>
</font>
<img src="logo1.png" alt="Logo here">  
</div>

<br>
<hr color="#663300" size="4px" width="1350px">
<br>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
<div class="modal-content">
    <span class="close">&times;</span>
    <br><br>
<form action="connect.php">
<h3>
<!------Container---------->
<div class="container">
<!-----Left sel---------------->
<div class="lpane">
<div class="vis">
<center>
<br>When do you plan to travel?<br><br><br>
 <select name="months" class="padd">
  <option value="none">-none-</option>
  <option value="jan">January</option>
  <option value="feb">February</option>
  <option value="mar">March</option>
  <option value="apr">April</option>
  <option value="may">May</option>
  <option value="jun">June</option>
  <option value="jul">July</option>
  <option value="aug">August</option>
  <option value="sep">September</option>
  <option value="oct">October</option>
  <option value="nov">November</option>
  <option value="dec">December</option>  
 </select></center></div></div>
<!--------Middle sel------------->
<div class="mpane">
<div class="vis">
<center>
<br>Would you like to enter an animal of preference?<br><br>
 <input list="animals" name="animal" class="padd" required>
 <datalist id="animals">
  <option value="- none -">
  <option value="Bengal Tiger">
  <option value="Indian Fox">
  <option value="Cheetah">
  <option value="Asiatic Lion">
  <option value="Indian Rhinoceros"></option>
 </datalist></center></div></div>
<!------Right sel------->
<div class="rpane">
<div class="vis">
<center>
<br>Do you have a state in mind?<br><br><br>
 <select name="months" class="padd">
  <option value="none">-none-</option>
  <option value="jan">Andaman and Nicobar</option>
  <option value="feb">Andhra Pradesh</option>
  <option value="mar">Arunachal Pradesh</option>
  <option value="apr">Assam</option>
  <option value="may">Bihar</option>
  <option value="jun">Chandigarh</option>
  <option value="jul">Chhattisgarh</option>
  <option value="aug">Dadra and Nagar Haveli</option>
  <option value="sep">Daman and Diu</option>
  <option value="oct">Delhi</option>
  <option value="nov">Goa</option>
  <option value="dec">Gujarat</option> 
  <option value="none">Haryana</option>
  <option value="jan">Himachal Pradesh</option>
  <option value="feb">Jammu and Kashmir</option>
  <option value="mar">Jharkhand</option>
  <option value="apr">Karnataka</option>
  <option value="may">Kerala</option>
  <option value="jun">Lakshadweep</option>
  <option value="jul">Madhya Pradesh</option>
  <option value="aug">Maharashtra</option>
  <option value="sep">Manipur</option>
  <option value="oct">Meghalaya</option>
  <option value="nov">Mizoram</option>
  <option value="dec">Nagaland</option>
  <option value="aug">Odisha</option>
  <option value="sep">Puducherry</option>
  <option value="oct">Punjab</option>
  <option value="nov">Rajasthan</option>
  <option value="dec">Sikkim</option>
  <option value="aug">Tamil Nadu</option>
  <option value="sep">Telangana</option>
  <option value="oct">Tripura</option>
  <option value="nov">Uttar Pradesh</option>
  <option value="dec">Uttarakhand</option>  
  <option value="dec">West Bengal</option> 
 </select></center></div></div>
</div>
</h3>
<!---------Bottompane--------->
<div class="botpane" style="background-color:#006600">
<center>
<div class="vis">
<input type="submit" value="SUBMIT" class="submitb">
</div>
<br><br><br>
<font color="#FFFFFF" size="3" face="Arial, Helvetica, sans-serif">
HELP US MAKE YOUR EXPERIENCE BETTER
</font>
</center>
</div>
</form>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<!--slideshow-->

<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="rbt1.jpg" style="width:170%;height:90%;">
    <div class="text"><center>THE ROYAL BENGAL TIGER</center></div>
  </div>

  <div class="mySlides fade">
    <img src="kaz1.jpg" style="width:170%;height:90%;">
    <div class="text"><center>KAZIRANGA</center></div>
  </div>

  <div class="mySlides fade">
    <img src="nwghat.jpg" style="width:170%;height:90%;">
    <div class="text"><center>THE NORTH WESTERN GHATS</center></div>
  </div>
  
  <div class="mySlides fade">
    <img src="hornbill.jpg" style="width:170%;height:90%;">
    <div class="text"><center>THE GREAT INDIAN HORNBILL</center></div>
  </div>
  
  <div class="mySlides fade">
    <img src="peacock.jpg" style="width:170%;height:90%;">
    <div class="text"><center>THE PEACOCK</center></div>
  </div>

  <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
  <a class="next" onClick="plusSlides(1)">&#10095;</a>
</div>
<br>
<br>
<hr color="#663300" width="1340px">
<!--SCRIPT-->

<script>
var slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
<!---------------------------------END OF SCRIPT--------------------------------->
<!---------------------------------START OF TITLE-CARDS------------------------->

<hr color="#663300" width="1340px" size="8px">
<center><h2>
<div class="blink">
<p align="center"><center><b><font size="6" face="Arial, Helvetica, sans-serif" color="#FFCC00">
TOP THREE NATONAL PARKS THIS MONTH<!----make a box here of eye soothing colour with blinking text--------------->
</font></b></center></p>
</div></h2></center>
<br>
<hr color="#663300" width="1340px" size="8px">
<hr color="#663300" width="1340px">
<br><br><br>

<!------------------------------------------ CARD CODE-------------------------------->
<br>

<div class="cardrow">
<div class="leftpane">
<div class="card">
   <img src="cor.jpg" alt="Park" style="width:100%;height:70%">
  <div class="containtab">
    <h2><b><center><a href=""><font face="Arial" color="#FFFF00">Jim Corbett National Park</a></center></b></h2> 
    <p><center>Click the link above to know more.</font></center></p> 
  </div>  
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<hr color="#663300" width="0px">
<br>
<br>
 <div class="rightpane">
  <div class="card">
   <img src="kaz.png" alt="Park" style="width:100%;height:70%">
  <div class="container">
    <h2><b><center><a href=""><font face="Arial" color="#CCCCCC">Kaziranga</a></center></b></h2> 
    <p><center>Click the link above to know more.</font></center></p> 
  </div>  
  </div>
</div>
<br>
<br>
<br>
<hr color="#663300" width="1300px">
<br>
 <div class="leftpane">
  <div class="card">
   <img src="tad.png" alt="Park" style="width:100%;height:70%">
  <div class="container">
    <h2><b><center><a href=""><font face="Arial" color="#CC6600">Tadoba</a></center></b></h2> 
    <p><center>Click the link above to know more.</font></center></p> 
  </div>  
  </div>
</div>    
</div>
<br>
<hr color="#663300" width="1300px">
<br>

</body>

</html>