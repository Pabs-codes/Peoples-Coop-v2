<?php
session_start();
include 'pb_connection.php';

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','pdf');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location: pb_add_Product.php?uploadsuccess");
            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "There was an error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }
}

$_product_name = $_POST['product_name'];
$rating = $_POST['rating'];
$description = $_POST['description'];
$mrp = $_POST['mrp'];
$saling_price = $_POST['saling_price'];
$size = $_POST['size'];
$qty = $_POST['qty'];
$color = $_POST['color'];
$brand = $_POST['brand'];
$category = $_POST['category'];
$subcategory = $_POST['subcategory'];
$make = $_POST['make'];
$model = $_POST['model'];
$product_name = $_POST['product_name'];
$keywords = $_POST['keywords'];
$meta_description = $_POST['meta_description'];
$meta_title = $_POST['meta_title'];
$meta_keywords = $_POST['meta_keywords'];
$offer = $_POST['offer'];


?>
