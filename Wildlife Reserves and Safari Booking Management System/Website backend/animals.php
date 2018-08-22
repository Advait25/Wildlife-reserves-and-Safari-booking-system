<!DOCTYPE html>
<html>
<head>
<title>Animal Search</title>
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
		<form action="animals1.php" method="post">
				<input type="hidden" name="submitted" value="true"> 
				<br><br>
		ENTER THE NUMBER OF LEGS:<br><br>
		<select name="legs" placeholder="podosity..">
		<option value="">None </option>
		<option value="2">2 </option>
		<option value="4">4 </option>
		</select><br><br><br>
		ENTER THE CATEGORY:<br><br>
		<select name="category" placeholder="category..">
		<option value="">None </option>
		<option value="aves">Aves </option>
		<option value="aerial">Aerial </option>
		<option value="terrestrial">Terrestrial </option>
		<option value="arboreal">Arboreal </option>
		<option value="amphibian">Amphibian </option>
		</select><br><br><br>
		ENTER THE DIET-TYPE:<br><br>
		<select name="diet" placeholder="diet type..">
		<option value="">None </option>
		<option value="herbivore">Herbivore </option>
		<option value="carnivore">Carnivore </option>
		<option value="omnivore">Omnivore </option>
		</select><br><br><br>
		ENTER THE SKIN-TYPE:<br><br>
		<select name="skin" placeholder="covering..">
		<option value="">None </option>
		<option value="feathers">Feathers</option>
		<option value="scales">Scales </option>
		<option value="hair">Hair </option>
		<option value="fur">Fur </option>
		<option value="skin">Skin </option>
		</select><br><br><br>
		ENTER THE PRIMARY COLOUR:<br><br>
		<select name="color" placeholder="primary color..">
		<option value="">None </option>
		<option value="orang">Orange </option>
		<option value="blac">Black </option>
		<option value="blu">Blue </option>
		<option value="red">Red </option>
		<option value="whit">White </option>
		<option value="green">Green </option>
		<option value="grey">Grey </option>
		<option value="brown">Brown </option>
		<option value="buf">Buff </option>
		<option value="pink">Pink</option>
		<option value="silver">Silver </option>
		<option value="yellow">Yellow </option>
		</select><br><br><br>
		<input type="submit" value="Search>>" style="padding: 7px; border-color: #DC8412; border-radius: 5px;  background-color: #DC8412; color: #fff; font-size: 20px; font-weight: bold;">
		<br><br>
			</form>
		</center>
	</div>
</body>
</html>