<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>affEtudiant</title>
</head>
<body>

    <br>
        <a href="addEtudiant.php">Ajouter un étudiant</a><br><br>
        <a href="formSearch.php">Rechercher un étudiant</a><br><br>
        <a href="AfficheEtudiant.php">Afficher les étudiants</a>
    <br>
    <br>
    <br>


 
<?php

require_once 'ourFicConnection.php';

$recupOursConnection = oursConnection();


if ($recupOursConnection) {
    $selectReq = "select * from Etudiant";
    $exeReq = mysqli_query($recupOursConnection, $selectReq);
?>


    <table border="1">
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

        <?php

        while ($resultFind = mysqli_fetch_assoc($exeReq)) {
            ?>

            <tr>
                <td><?php echo ($resultFind['MAT_ETDU']); ?></td>
                <td><?php echo ($resultFind['NOMCOMPLET_ETU']); ?></td>
                <td><?php echo ($resultFind['GENRE_ETU']); ?></td>
                <td><?php echo ($resultFind['DATEN_ETU']); ?></td>
                <td><?php echo ($resultFind['LIEU_N_ETU']); ?></td>
                <td><?php echo ($resultFind['EMAIL_ETU']); ?></td>
                <td><?php echo ($resultFind['TEL_ETU']); ?></td>
                <td><?php echo ($resultFind['FILIERE_ETU']); ?></td>
                <td><?php echo ($resultFind['CLASSE_ETU']); ?></td>
            </tr>
            <?php
        }
        echo "</table>";
        ?>



    <?php
}
?>

</body>
</html>