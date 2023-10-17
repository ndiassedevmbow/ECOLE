<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMULAIRE</title>
</head>
<body>

<form id="myForm" class="myForm" action="traitement.php" method="post">
	
<fieldset>
	<legend>Formulaire</legend>

<label>Nom:</label>
<input type="text" name="nom" id="nom" placeholder="Votre nom"/>
<br><br>

<label>Prenom:</label>
<input type="text" name="prenom" id="prenom" placeholder="Votre prenom"/>
<br><br>

<label>Age:</label>
<input type="number" name="age" id="age" placeholder="Votre age"/>
<br><br>

<label>Email:</label>
<input type="text" name="email" id="email" placeholder="Votre email"/>
<br><br>

<input type="submit" name="env" id="env" value="envoyer" />
<input type="reset" name="ann" id="ann" value="annuler" />

</fieldset>


</form>	

</body>
</html>