
<?php

header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';

require_once 'classes/class.UtilisateurC.php';



    $sql = "SELECT * FROM utilisateur, abonnement, discipline_pratique, discipline
            WHERE utilisateur.ID_ABONNEMENT = abonnement.ID_ABONNEMENT
            AND utilisateur.ID_UTILISATEUR = discipline_pratique.ID_UTILISATEUR
           AND discipline_pratique.ID_UTILISATEUR = discipline_pratique.ID_DISCIPLINE
            AND discipline_pratique.ID_DISCIPLINE =  discipline.ID_DISCIPLINE
                    ORDER BY NOM";

    $requete = $pdo->prepare($sql);

    $liste = array();

    if ($requete->execute()) {

        while ($donnees = $requete->fetch()) {
            $personne = new UtilisateurC (
                    $donnees['ID_UTILISATEUR'],
                    $donnees['NOM'],
                    $donnees['PRENOM'],
                    $donnees['SEXE'],
                    $donnees['IDENTIFIANT'],
                    $donnees['PASSWORD'],
                    $donnees['MAIL'],
                    $donnees['VILLE'],
                    $donnees['PHOTO']
            );

            $abon = new Abonnement( $donnees['ID_ABONNEMENT'],  $donnees['LIB_ABONNEMENT']);
            $personne->setAbonnement($abon);


            $disc = new Discipline(
                $donnees['ID_DISCIPLINE'],
                $donnees['LIB_DISCIPLINE']
            );
            $personne->setDisciplineExercees((array)$disc);

            $liste[] = $personne;
        }
        echo json_encode($liste);
    }else{
        echo -1;
    }

echo "<pre>";
print_r($liste);
echo "</pre>";





