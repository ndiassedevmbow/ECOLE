<?php  
include 'func.php';

	$a = 15;
	$b = 5;
	echo "La somme de " .$a. " et " .$b. " vaut : " .addition($a, $b). "<br/><br/>";
	echo "La multiplication de " .$a. " et " .$b. " vaut : " .multiplication($a, $b). "<br/><br/>";
	echo "La division de " .$a. " et " .$b. " vaut : " .division($a, $b). "<br/><br/>";
	echo "La soustraction de " .$a. " et " .$b. " vaut : " .soustraction($a, $b). "<br/><br/>";
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>func</title>
</head>
<body>



<form method="get" action="">
	<input type="number" name="chiffre1" value="0">

	<select name="operation">
		<option value="">------------------</option>
		<option value="add">Addition</option>
		<option value="sous">Soustraction</option>
		<option value="mult">Multiplication</option>
		<option value="div">Division</option>
	</select>

	<input type="number" name="chiffre2" value="0">

	<input type="submit" name="env" value="calculer">
</form>

<?php  
	if(isset($_GET['env']))
	{
		switch ($_GET['operation']) {
			case '':
				echo "Impossible d'effectuer l'opération";
			break;

			case 'add':
				echo addition($_GET['chiffre1'], $_GET['chiffre2']);
			break;

			case 'sous':
				echo soustraction($_GET['chiffre1'], $_GET['chiffre2']);
			break;

			case 'mult':
				echo multiplication($_GET['chiffre1'], $_GET['chiffre2']);
			break;

			case 'div':
				echo division($_GET['chiffre1'], $_GET['chiffre2']);
			break;
			
			default:
				echo "Pas d'operation";
			break;
		}
	}

	?>

</body>
</html>