<?php
header("Access-Control-Allow-Origin: *");


require_once 'cnx.php';

if(isset($_POST["nom"])){


            $image = $_FILES['photo']['name'];


  /*  $requeteId = $pdo->prepare($sql);
    $requete->bindParam(1, $_POST['nom']);
    $identifiant = $requeteId->execute();
    echo $requeteId->execute();  $identifiant = "SELECT ID_UTILISATEUR FROM utilisateur
                 WHERE   IDENTIFIANT = 'Sgoffine' ";*/


    $identifiant = '1';



            if(move_uploaded_file($_FILES['photo']['tmp_name'], "imagespot/".$image)){

                $sql = "INSERT INTO `spot`
            ( `NOM_SPOT`, `ADRESSE`, `RESUME_SPOT`, `PHOTO_SPOT`, `DATE_PUBLICATION`, `ID_UTILISATEUR`) 
            VALUES (?,?,?,?,?,?) ";


                $requete = $pdo->prepare($sql);
                $requete->bindParam(1, $_POST['nom']);
                $requete->bindParam(2, $_POST['adresse']);
                $requete->bindParam(3, $_POST['resume']);
                $requete->bindParam(4, $image);
                $requete->bindParam(5, $_POST['date']);
                $requete->bindParam(6, $identifiant);

                echo $requete->execute();


            }else{
                //image pas charge
                echo -2;
            }
        }else{
            echo -1;

        }
