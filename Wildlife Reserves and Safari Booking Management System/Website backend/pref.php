<!DOCTYPE html>
<html>
<head>
	<title>Safaris</title>
  <link rel="stylesheet" href="selects.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style type="text/css">
  #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
</style>
</head>
<body>
  <div class="floating-panel">
    <a href="homework.php" style="text-decoration: none;">
        <i class="material-icons" style="background-color: #2ACC11; color: #fff; padding: 5px;">home</i>
    </a>
  </div>
<div class="titular">
<center>
<form action="pref1.php" method="post">
<input type="hidden" name="submitted" value="true"> 
<br><br>	
ENTER YOUR ANIMAL OF PREFERENCE:<br>	
<select name="animals" placeholder="Animal">
	  <option value="">None</option>
	  <option value="Red panda">Red panda</option>
    <option value="Blackbuck">Blackbuck</option>
    <option value="Nilgai">Nilgai</option>
    <option value="Crocodile">Crocodile</option>
    <option value="Asian Elephants">Asian Elephants</option>
    <option value="Siberian Cranes">Siberian Cranes</option>
    <option value="Vulture">Vulture</option>
    <option value="Black Winged Stilt">Black Winged Stilt</option>
    <option value="Bluethroat">Bluethroat</option>
    <option value="Blue-Cheeked Bee-Eater">Blue-Cheeked Bee-Eater</option>
    <option value="Alpine Musk Deer">Alpine Musk Deer</option>
    <option value="Yellow Wagtail">Yellow Wagtail</option>
    <option value="Clouded Leopard">Clouded Leopard</option>
    <option value="Nilgiri tahr">Nilgiri tahr</option>
    <option value="Eurasian Golden Oriole">Euresian Goldan Oriole</option>
    <option value="Asiatic lion">Asiatic lion</option>
    <option value="Royal Bengal Tiger">Royal Bengal Tiger</option>
    <option value="Snow Leopard">Snow Leopard</option>
    <option value="Great White Pelican">Great White Pelican</option>
    <option value="Greater Flamingo">Greater Flamingo</option>
    <option value="Fishing cat">Fishing cat</option>
    <option value="Indian giant squirrel">Indian giant squirrel</option>
    <option value="Rhinoceros">One Horned Rhinoceros</option>
    <option value="Comb Duck">Comb Duck</option>
    <option value="Hanuman Langur">Hanuman Langur</option>
    <option value="Starling">Starling</option>
    <option value="Indian wild Boar">Indian wild Boar</option>
    <option value="Himalayan Black bear">Himalayan Black bear</option>
    <option value="Bengal Fox">Bengal Fox</option>
    <option value="Northern Pintail">Northern Pintail</option>
</select><br><br>
ENTER YOUR STATE OF PREFERENCE:<br>
 <select name="months" placeholder="State">
 	<option value="">None</option>
  <option value="andaman">Andaman and Nicobar</option>
  <option value="andhra">Andhra Pradesh</option>
  <option value="arunachal">Arunachal Pradesh</option>
  <option value="assam">Assam</option>
  <option value="bihar">Bihar</option>
  <option value="chandi">Chandigarh</option>
  <option value="chhattis">Chhattisgarh</option>
  <option value="Dadra">Dadra and Nagar Haveli</option>
  <option value="Daman">Daman and Diu</option>
  <option value="Delhi">Delhi</option>
  <option value="Goa">Goa</option>
  <option value="Gujarat">Gujarat</option> 
  <option value="Haryana">Haryana</option>
  <option value="Himachal">Himachal Pradesh</option>
  <option value="Jammu">Jammu and Kashmir</option>
  <option value="Jharkhand">Jharkhand</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="Lakshadweep">Lakshadweep</option>
  <option value="Madhya">Madhya Pradesh</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="Manipur">Manipur</option>
  <option value="Meghalaya">Meghalaya</option>
  <option value="Mizoram">Mizoram</option>
  <option value="Nagaland">Nagaland</option>
  <option value="Odisha">Odisha</option>
  <option value="Pundicherry">Pundicherry</option>
  <option value="Punjab">Punjab</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="Sikkim">Sikkim</option>
  <option value="Tamil">Tamil Nadu</option>
  <option value="Telangana">Telangana</option>
  <option value="Tripura">Tripura</option>
  <option value="Uttar">Uttar Pradesh</option>
  <option value="Uttarakhand">Uttarakhand</option>  
  <option value="West">West Bengal</option> 
    </select><br><br>
    <input type="submit" value="Search>>" style="padding: 7px; border-color: #DC8412; border-radius: 5px;  background-color: #DC8412; color: #fff; font-size: 20px; font-weight: bold;">
    <br><br>
  </center>
  </form>
</div>
</body>
</html>