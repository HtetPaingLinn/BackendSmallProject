<?php //include './header.php'; ?>
<?php //include './footer.php'; ?>

<?php
//echo "<pre>";
//print_r($_FILES);

$saveFolder = "photo";
if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777);
}

$error = false;
foreach ($_FILES["upload"]["name"] as $key => $name) {
    $saveFileName = $saveFolder . "/" . uniqid() . "_" . "." . pathinfo($name)["extension"];
    if (move_uploaded_file($_FILES["upload"]["tmp_name"][$key], $saveFileName)) {

    } else {
        $error = true;
    }
}

if (!$error) {
    header("Location:gallary.php");
}

//$saveFileName = $saveFolder . "/" . uniqid() . "_" . "." . pathinfo($_FILES["upload"]["name"])["extension"];
//if (move_uploaded_file($_FILES["upload"]["tmp_name"], $saveFileName)) {
//    header("Location:gallary.php");
//}
