<?php
include "ip.php";
include "meta.php";
include "clipboard.html.php";
$url = "redirecturl";
echo "<script> 
    const redirect_url = '$url';
</script>";
exit();
?>