<?php

if(isset($_POST['submit']))
{
    $nom = htmlentities(trim($_POST['nom']));
    $prenom = htmlentities(trim($_POST['prenom']));
   // $sexe = htmlentities(trim($_POST['']));

    $username = htmlentities(trim($_POST['username']));
    $password = htmlentities(trim($_POST['password']));
    $repeatpassword = htmlentities(trim($_POST['repeatpassword']));
    if($username&&$password&&$repeatpassword)
    {
        if($password==$repeatpassword)
        {
            $connect = mysqli_connect('localhost','root','root') or die ('Error');
            mysqli_select_db('projet');

            $query = mysqli_query("INSERT INTO utilisateur VALUES ('','$nom','$prenom','','$username','$password','','','','')");

            die("Inscription terminée <a href ='login.php'> connectez vous</a>");

        }else echo " Les deux passwords doivent être identiques";

    }else echo "Veuillez saisir tous les champs";


}

?>







<form method="POST" action="register.php">
    <p>Votre Nom :</p>
    <input type="text" name="nom"><br/>
    <p>Votre Prénom :</p>
    <input type="text" name="prenom"><br/>
    <p>Votre Sexe :</p>
    <select id="sexe">
        <option value="Masculin">Masculin</option>
        <option value="Féminin">Féminin</option>
        <option value="Autre">Autre</option>
    </select>
    <br/>
    <p>Votre pseudo :</p>
    <input type="text" name="username"><br/>
    <p>Mot de passe :</p>
    <input type="password" name="password">
    <p>Repetez votre password :</p>
    <input type="password" name="repeatpassword"><br/><br/>
    <input type="submit" value="S'inscrire" name="submit">

    <

</form>