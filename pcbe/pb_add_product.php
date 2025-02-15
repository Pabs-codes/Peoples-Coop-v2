<?php
session_start();
include 'pb_connection.php'; // Include your database connection file

if (isset($_POST['submit'])) {
    // Retrieve form data
    $item_code = $_POST['item_code'];
    $product_name = $_POST['product_name'];
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

    // Additional fields for "Books Category"
    $author = $_POST['author'] ?? '';
    $publisher = $_POST['publisher'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    $edition = $_POST['edition'] ?? '';
    $pages = $_POST['pages'] ?? '';
    $binding = $_POST['binding'] ?? '';
    $language = $_POST['language'] ?? '';
    $genre = $_POST['genre'] ?? '';

    // File upload handling
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                // Create a folder for the item code if it doesn't exist
                $uploadDir = "uploads/$item_code/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true); // Use 0755 for better security
                }

                // Move the uploaded file to the folder
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = $uploadDir . "/main_image.jpg";
                if (move_uploaded_file($fileTmpName, $fileDestination)) {
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
                        `meta_keywords`,
                        `edition`, 
                        `pages`, 
                        `binding`, 
                        `language`, 
                        `genre`
                    ) VALUES (
                        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
                    )";

                    // Prepare the SQL statement
                    $stmt = $conn->prepare($sql);
                    if ($stmt) {
                        // Set default values
                        $status = 'active';

                        // Bind parameters to the statement
                        $stmt->bind_param(
                            "ssssssddsssssssissssssssssss",
                            $item_code,
                            $product_name,
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
                            $author,
                            $publisher,
                            $isbn,
                            $rating,
                            $brand,
                            $category,
                            $subcategory,
                            $keywords,
                            $meta_description,
                            $meta_title,
                            $meta_keywords,
                            $edition,
                            $pages,
                            $binding,
                            $language,
                            $genre
                        );

                        // Execute the statement
                        if ($stmt->execute()) {
                            header("Location: product-add.php?uploadsuccess");
                            exit();
                        } else {
                            error_log("Error inserting data: " . $stmt->error); // Log errors
                            echo "An error occurred. Please try again later.";
                        }

                        // Close the statement
                        $stmt->close();
                    } else {
                        error_log("Error preparing statement: " . $conn->error); // Log errors
                        echo "An error occurred. Please try again later.";
                    }
                } else {
                    echo "Failed to move uploaded file.";
                }
            } else {
                echo "Your file is too big! Maximum size allowed is 1MB.";
            }
        } else {
            echo "There was an error uploading your file. Error code: $fileError.";
        }
    } else {
        echo "You can only upload JPG, JPEG, or PNG files.";
    }
}

// Close the database connection
$conn->close();
?>