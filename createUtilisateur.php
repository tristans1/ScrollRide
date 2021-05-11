<?php
header("Access-Control-Allow-Origin: *");


require_once 'cnx.php';


if(isset($_POST["nom"])){

        $image = $_FILES['photo']['name'];

        if(move_uploaded_file($_FILES['photo']['tmp_name'], "photo/".$image)){

    $sql = "INSERT INTO `utilisateur`
    ( `NOM`, `PRENOM`, `SEXE`, `IDENTIFIANT`, `PASSWORD`, `MAIL`, `VILLE`, `PHOTO`, `ID_ABONNEMENT`) 
    VALUES (?, ?, ?,? ,? , ?, ?, ?, ?) ";

    $essai = '1';
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['nom']);
        $requete->bindParam(2, $_POST['prenom']);
        $requete->bindParam(3, $_POST['sexe']);
        $requete->bindParam(4, $_POST['identifiant']);
        $requete->bindParam(5, $_POST['password']);
        $requete->bindParam(6, $_POST['mail']);
            $requete->bindParam(7, $_POST['ville']);
            $requete->bindParam(8, $image);
            $requete->bindParam(9, $essai);
        echo $requete->execute();


        }else{
            //image pas charge
            echo -2;
        }
    }else{
        echo -1;

    }
