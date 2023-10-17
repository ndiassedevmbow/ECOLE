<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>addEtudiant</title>
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

        <table>

            <tr>
                <td>
                    <label for="mat">
                        Votre Matricule
                    </label>
                </td>
                <td>
                    <input type="text" name="mat" id="mat">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nomC">
                        Votre Nom complet
                    </label>
                </td>
                <td>
                    <input type="text" name="nomC" id="nomC">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="genr">
                        Votre Genre
                    </label>
                </td>
                <td>
                    <select id="genr" name="genr">
                        <option value="">Choix</option>
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Feminin</option>
                        <option value="autre">Autres</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="datNais">
                        Votre Date naissance
                    </label>
                </td>
                <td><input type="date" name="datNais" id="datNais"></td>
            </tr>

            <tr>
                <td>
                    <label for="lieuNais">
                        Votre Lieu de naissance
                    </label>
                </td>
                <td>
                    <input type="text" name="lieuNais" id="lieuNais">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="email">
                        Votre Email
                    </label>
                </td>
                <td><input type="email" name="email" id="email"></td>
            </tr>

            <tr>
                <td>
                    <label for="tel">
                        Votre Telephone
                    </label>
                </td>
                <td id="tel">
                    <input type="number" name="tel" id="tel">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="fil">
                        Votre fil
                    </label>
                </td>
                <td><input type="text" name="fil" id="fil">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="class">
                        Votre Classe
                    </label>
                </td>
                <td><input type="text" name="class" id="class"></td>
            </tr>

            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" name="envoyer" value="Ajouter Etudiant">
                </td>
            </tr>

        </table>

    </form>



<?php 
require_once 'ourFicConnection.php';

if (isset($_POST['envoyer'])) {

    if(!empty($_POST["mat"]) && !empty($_POST["nomC"]) && !empty($_POST["genr"]) && !empty($_POST["datNais"]) && !empty($_POST["lieuNais"]) && !empty($_POST["email"]) && !empty($_POST["tel"]) && !empty($_POST["fil"]) && !empty($_POST["class"]))
        {

            $mat = $_POST['mat']; 
            $nomC = $_POST['nomC']; 
            $genr = $_POST['genr'];
            $datNais = $_POST['datNais']; 
            $lieuNais = $_POST['lieuNais']; 
            $email = $_POST['email'];
            $tel = $_POST['tel']; 
            $fil = $_POST['fil']; 
            $class = $_POST['class'];

            $recupOursConnection = oursConnection();

            if(!$recupOursConnection)
            {
                echo "Connexion echouée";
           
            }else{
                $selectReq = "INSERT INTO Etudiant VALUES(NULL, '$mat', '$nomC', '$genr', '$datNais', '$lieuNais', '$email', '$tel', '$fil', '$class')";
                
                if(mysqli_query($recupOursConnection, $selectReq)) 
                {
                    echo "Etudiant ajouté à la base de données.";
                }
            }

        }else{
            echo "Un des champs n'a pas été rempli.";
        }
    }
    ?>

</body>
</html>