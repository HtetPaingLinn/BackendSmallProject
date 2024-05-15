<?php
echo "<pre>";
// print_r($_POST);
// print_r($_FILES);

$productFolder = "products";
$saveFolder = "productPhotos";
if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777);
}

if(!is_dir($productFolder)){
    mkdir($productFolder, 0777);
}

$saveFileName = $saveFolder . "/" . uniqid() . "_" . "." . pathinfo($_FILES['product_image']['name'])["extension"];

if(move_uploaded_file($_FILES['product_image']['tmp_name'], $saveFileName)){
    $_POST['product_image'] = $saveFileName;
}

$json = json_encode($_POST);
$productFile = $productFolder . "/" . uniqid() ."_". $_POST["product_name"]. ".json";
touch($productFile);
$fileStream = fopen($productFile, "w");
fwrite($fileStream, $json);
fclose($fileStream);
header("Location:product.php");