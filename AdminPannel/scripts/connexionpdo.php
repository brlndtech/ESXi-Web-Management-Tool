<?php
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=registration;charset=utf8','newuser','password',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=base_de_donnee','utilisateur','mot de passe'); 
// la deuxième ligne est pour activer la vérification des erreurs.
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?> 