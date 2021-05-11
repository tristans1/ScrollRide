<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Utilisateur.php';


if (isset($_POST['identifiant'])){
    $_GET['identifiant'] = $_POST['identifiant'];

}else {
    if (isset($_GET['identifiant'])) {
        $_POST['identifiant'] = $_GET['identifiant'];

    }

}

if ( isset($_POST['identifiant'])){

    // recherche de la villageois par son id
    $sql = "SELECT * FROM utilisateur 
                 WHERE   IDENTIFIANT = ? ";



    // préparation de la requete
    $requete = $pdo->prepare($sql);


    $requete->bindValue(1, $_POST['identifiant']);
    $utilisateur = null;

    if ($requete->execute()){
        //recupérer le resultat
        if($donnees = $requete->fetch()){
            $utilisateur = new Utilisateur(
                $donnees['ID_VILLAGEOIS'],
                $donnees['ID_UTILISATEUR']

            );


        }

    }
    echo json_encode($utilisateur);

}else{
    echo -1;
}