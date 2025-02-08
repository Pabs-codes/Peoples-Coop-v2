<?php
session_start();
include 'pb_connection.php'; // Include your database connection file

if (isset($_POST['submit'])) {
    // File upload handling
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                // File uploaded successfully, proceed with database insertion
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
                $keywords = $_POST['keywords'];
                $meta_description = $_POST['meta_description'];
                $meta_title = $_POST['meta_title'];
                $meta_keywords = $_POST['meta_keywords'];
                $offer = $_POST['offer'];

                // Generate or define additional fields
                $item_code = uniqid(); // Generate a unique item code
                $status = 'active'; // Default status
                $auther = ''; // Leave empty or set a default
                $publisher = ''; // Leave empty or set a default
                $ibsn = ''; // Leave empty or set a default

                // Insert data into the `item` table
                $sql = "INSERT INTO `item` (
                    `item_code`, 
                    `item_name`, 
                    `offer_id`, 
                    `Make`, 
                    `Model`, 
                    `item_description`, 
                    `mrp`, 
                    `selling_price`, 
                    `availability`, 
                    `size_code`, 
                    `colour_code`, 
                    `status`, 
                    `auther`, 
                    `publisher`, 
                    `ibsn`, 
                    `rating`,
                    `brand`, 
                    `category`, 
                    `subcategory`, 
                    `keywords`, 
                    `meta_description`, 
                    `meta_title`, 
                    `meta_keywords`
                ) VALUES (
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
                )";

                // Prepare the SQL statement
                $stmt = $conn->prepare($sql);
                if ($stmt) {
                    // Bind parameters to the statement
                    $stmt->bind_param(
                        "ssssssddsssssssisssssss",
                        $item_code,
                        $_product_name,
                        $offer,
                        $make,
                        $model,
                        $description,
                        $mrp,
                        $saling_price,
                        $qty,
                        $size,
                        $color,
                        $status,
                        $auther,
                        $publisher,
                        $ibsn,
                        $rating,
                        $brand,
                        $category,
                        $subcategory,
                        $keywords,
                        $meta_description,
                        $meta_title,
                        $meta_keywords
                    );

                    // Execute the statement
                    if ($stmt->execute()) {
                        header("Location: pb_add_Product.php?uploadsuccess");
                        exit();
                    } else {
                        echo "Error inserting data: " . $stmt->error;
                    }

                    // Close the statement
                    $stmt->close();
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}

// Close the database connection
$conn->close();
?>