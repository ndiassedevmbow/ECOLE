<?php  

if (isset($_POST['env'])) {
	if ( (!empty($_POST['nom'])) || (!empty($_POST['prenom'])) || (!empty($_POST['age'])) || (!empty($_POST['email'])) ){
		
		$nom = $_POST['nom']; 
		$prenom = $_POST['prenom']; 
		$age = $_POST['age']; 
		$email = $_POST['email'];

		$f = fopen('Personne.csv', 'a');

		$ch = $nom. ";" .$prenom. ";" .$age. ";" .$email. ";" ."\n";
		fwrite($f, $ch);


		echo "Info bien enregistre dans le fic";
		echo "<a href='form.php'>retour</a>";
	}
	else
	{
		echo "not";
	}
}

?>