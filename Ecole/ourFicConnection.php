<?php 
// FONCTION DE CONNEXION
	function oursConnection()
	{
		$server = "localhost";
		$login = "root";
		$bd = "gestion_etudiant";
		$psw = "";

		$exeOursConnection = mysqli_connect($server, $login, $psw, $bd);

		return $exeOursConnection;
	}

 ?>