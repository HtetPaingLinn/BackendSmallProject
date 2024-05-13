<?php
$folderName = "photo";
$file = $_GET['file'];
if (unlink($folderName . "/" . $file)) {
    header("Location:gallary.php");
}
