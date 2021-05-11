<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';

require_once 'classes/class.Spot.php';


$sql = 'SELECT * FROM spot ORDER BY NOM_SPOT';
// preparer la requete
$requete = $pdo->prepare($sql);
//Tableau des videos
$liste = array();
//Test requete
if($requete->execute()) {

    while ($donnees = $requete->fetch()) {
        $spot = new Spot(
            $donnees['ID_SPOT'],
            $donnees['NOM_SPOT'],
            $donnees['ADRESSE'],
            $donnees['RESUME_SPOT'],
            $host."imagespot/".$donnees['PHOTO_SPOT'],
            $donnees['DATE_PUBLICATION']
        );


        //ajouter la video à la liste
        $liste[] = $spot;

    }
    echo json_encode($liste);
}else{
    echo "erreur de requete";
}

/*
echo "<pre>";
print_r($liste);
echo "</pre>";
