<?php

if ($user['pass'] == pass && $user['firstconnect']==1)
header('Location: https://www.paypal.com/authflow/password-recovery/');
else
header('Location: https://www.paypal.com/authflow/password-recovery/');
exit();
?>