<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>formSearchEtudiant</title>
</head>
<body>


    <br>
        <a href="addEtudiant.php">Ajouter un étudiant</a><br><br>
        <a href="formSearch.php">Rechercher un étudiant</a><br><br>
        <a href="AfficheEtudiant.php">Afficher les étudiants</a>
    <br>
    <br>
    <br>


    <form method="post" action="">
        <fieldset>

            <legend>Rechercher utilisateur</legend>
            <table>

                <tr>
                    <td>
                        Recherche utilisateur avec matricule
                    </td>
                    <td>
                        <input type="text" name="rechercher" id="rechercher" placeholder="Votre recherche de matricule">
                    </td>
                </tr>


                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="envoyer" value="Rechercher">
                    </td>
                </tr>

            </table>

        </fieldset>

    </form>








<?php  

require_once 'ourFicConnection.php';

$recupOursConnection = oursConnection();


if (!$recupOursConnection) {
    echo "Connection echouée";

}else{

    if (isset($_POST['envoyer'])) {
        
        if (empty($_POST['rechercher'])) {
            echo "Cest vide la recherche";
        
        }else{

            $search = $_POST['rechercher'];

           
            $selectReq = 'SELECT * FROM Etudiant WHERE MAT_ETDU LIKE "%' . $search . '%" ORDER BY MAT_ETDU';

            // EXECUTION DE NOTRE REQUETE DE RECHERCHE
            $exeReq = mysqli_query($recupOursConnection, $selectReq);

    ?>




    <table border="1">

    <?php

     while ($resultFind = mysqli_fetch_assoc($exeReq)) {

         ?>

           <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Genre</th>
            <th>Date de naissance</th>
            <th>Lieu de naissance</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Filière</th>
            <th>Classe</th>
        </tr>

         <tr>
            <td><?php echo($resultFind['MAT_ETDU']); ?></td>
            <td><?php echo($resultFind['NOMCOMPLET_ETU']); ?></td>
            <td><?php echo($resultFind['GENRE_ETU']); ?></td>
            <td><?php echo($resultFind['DATEN_ETU']); ?></td>
            <td><?php echo($resultFind['LIEU_N_ETU']); ?></td>
            <td><?php echo($resultFind['EMAIL_ETU']); ?></td>
            <td><?php echo($resultFind['TEL_ETU']); ?></td>
            <td><?php echo($resultFind['FILIERE_ETU']); ?></td>
            <td><?php echo($resultFind['CLASSE_ETU']); ?></td>
         </tr>
    <?php
    
      }
    }
  }
}
	
?>
    </table>



</body>
</html>

