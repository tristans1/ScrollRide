

<head>
    <meta charset="UTF-8">
    <title>accueil</title>

</head>
<body>

<form id="form" method="POST" action="login.php">
            <p>Votre Nom :</p>
            <input type="text" id="nom" name="nom"><br/>

            <p>Votre Prénom :</p>
            <input type="text" id="prenom" name="prenom"><br/>

            <p>Votre Sexe :</p>
            <select id="sexe" name="sexe">
                <option value="Masculin">Masculin</option>
                <option value="Féminin">Féminin</option>
                <option value="Autre">Autre</option>
            </select>

            <p> Votre Mail :</p>
            <input type="email" id="mail" name="mail"><br/>
            <br/>
    <p> Votre ville :</p>
    <input type="text" id="mail" name="ville"><br/>

    <p> Votre photo :</p>
    <input type="text" id="mail" name="ville"><br/>

            <p>Votre pseudo :</p>
            <input type="text" id="identifiant" name="username"><br/>

            <p>Mot de passe :</p>
            <input type="password" id="password" name="password">

            <button name="submit" type="submit">Valider</button>
</form>

<?php

    $db = new PDO('mysql:host=localhost;dbname=scrollride', 'root','root');

    if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['sexe']) AND isset($_POST['identifiant']) AND
                                                                                   isset($_POST['password']) AND
                                                                                   isset($_POST['mail']))
    {

        $requete = $db->prepare("INSERT INTO `utilisateur` 
    (`ID_UTILISATEUR`, `NOM`, `PRENOM`, `SEXE`, `IDENTIFIANT`, `PASSWORD`, `MAIL`, `VILLE`, `PHOTO`, `ID_ABONNEMENT`) 
    VALUES (?, ?, ?,? ,? , ?, ?, ?, ?, ?) ");
        $requete->execute(array($_POST['nom'], $_POST['prenom'], $_POST['sexe'], $_POST['identifiant'],$_POST['password']
       ,$_POST['mail'] ));



    }


