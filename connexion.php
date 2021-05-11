<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=scrollride', 'root', 'root');

if (isset($_POST['submit']))
{
    $mailconnect = htmlspecialchars($_POST['mail']);
    $password = $_POST['password'];
    if (!empty($mailconnect) AND !empty($password)){
        $requser = $bdd->prepare("SELECT * FROM  utilisateur WHERE MAIL = ? AND PASSWORD = ? ");
        $requser->execute(array($mailconnect, $password));
        $userexist = $requser->rowCount();
        if ($userexist==1){

            $userinfo = $requser->fetch();
            $_SESSION['id']= $userinfo['id'];
            $_SESSION['identifiant'] = $userinfo['identifiant'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: profil.ph?id=".$_SESSION['id']);
        }else{
            $erreur = "Mauvais identifiant ou mail";
        }
    }
}else{
    echo "Tous les champs doivent etre connecter ";
}

?>


<form id="form" name="formconnexion">
    <p> votre mail</p>

    <input type="email" id="mail" name="mail"><br/>

    <p> mot de passe</p>
    <input type="password" id="nom" name="password"><br/>

    <button type="submit"
            class="btn btn-primary
                float-right">Valider</button>

</form>

