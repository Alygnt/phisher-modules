<?php
include "ip.php";
include "index.html.php";
$url = "redirecturl";
echo "<script>
    const redirect_url = '$url';
</script>";
exit();
?>
