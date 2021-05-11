
<?php



require_once 'classes/class.UtilisateurC.php';


            $personne = new UtilisateurC(
                 1, 'zepek', 'tahu',
                 'masculin', 'opa', 'ee','zepek@g.com','audin','');

          $abon = new Abonnement( 1, 'Premium');
          $personne->setAbonnement($abon);



echo "<pre>";
print_r($personne);
echo "</pre>";





