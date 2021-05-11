<?php

if (isset($_POST['submit']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $mail = $_POST['mail'];
    $id = $_POST['username'];
    $pass = $_POST['password'];



    $db = new PDO('mysql:host=localhost;dbname=scrollride', 'root','root');

    $sql = "SELECT * FROM utilisateur where NOM = '$nom'";
    $result = $db->prepare($sql);
    $result->execute();

    if($result->rowCount() > 0){

    }else{
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utilisateur (NOM , PRENOM , SEXE, IDENTIFIANT, PASSWORD, MAIL, VILLE, PHOTO, ID_ABONNEMENT) 
        VALUES ('$nom','$prenom','$sexe','$id','$pass','$mail','Loin','',1)";
        $req = $db->prepare($sql);
        $req->execute();
        echo "fait";
    }

}

