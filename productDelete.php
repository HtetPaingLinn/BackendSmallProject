<?php
print_r($_GET);
$content = json_decode(file_get_contents("./products/" . $_GET["filename"]), true);
if(unlink($content["product_image"])){
    unlink("./products/" . $_GET["filename"]);
    header("Location:product.php");
}
