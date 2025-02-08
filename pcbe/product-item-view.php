<?php
// Include the database connection file
include 'pb_connection.php';

// Fetch the product details based on the item_id from the URL
if (isset($_GET['id'])) {
    $item_id = $_GET['id'];
    $sql = "SELECT * FROM `item` WHERE `item_id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_assoc();

    if (!$item) {
        // Redirect if the item is not found
        header('location:product-list.php');
        exit();
    }
} else {
    // Redirect if no item ID is provided
    // header('location:product-list.php');
    exit();
}

// Handle Delete Action
if (isset($_POST['delete'])) {
    $delete_sql = "update `item` set status='suspended' WHERE `item_id` = ?";
    $delete_stmt = $conn->prepare($delete_sql);
    $delete_stmt->bind_param("i", $item_id);

    if ($delete_stmt->execute()) {
        // Redirect to product list after deletion
        // header('location:product-list.php');
        exit();
    } else {
        echo "Error deleting product: " . $conn->error;
    }
}

// Handle Update Action
if (isset($_POST['update'])) {
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

    // Update query
    $update_sql = "UPDATE `item` SET 
        `item_code` = ?, 
        `item_name` = ?, 
        `rating` = ?, 
        `item_description` = ?, 
        `mrp` = ?, 
        `selling_price` = ?, 
        `size_code` = ?, 
        `availability` = ?, 
        `colour_code` = ?, 
        `brand` = ?, 
        `category` = ?, 
        `subcategory` = ?, 
        `Make` = ?, 
        `Model` = ?, 
        `keywords` = ?, 
        `meta_description` = ?, 
        `meta_title` = ?, 
        `meta_keywords` = ?, 
        `offer_id` = ? 
        WHERE `item_id` = ?";

    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param(
        "ssisdssisssssssssssi",
        $item_code,
        $product_name,
        $rating,
        $description,
        $mrp,
        $saling_price,
        $size,
        $qty,
        $color,
        $brand,
        $category,
        $subcategory,
        $make,
        $model,
        $keywords,
        $meta_description,
        $meta_title,
        $meta_keywords,
        $offer,
        $item_id
    );

    if ($update_stmt->execute()) {
        // Redirect to the same page after successful update
        // header("Location: product-item-view.php?id=$item_id");
        exit();
    } else {
        echo "Error updating product: " . $conn->error;
    }
}
?>



            <!-- CONTENT WRAPPER -->
            <div class="ec-content-wrapper">
                <div class="content">
                    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                        <div>
                            <h1>View Product</h1>
                            <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Product
                            </p>
                        </div>
                        <div>
                            <a href="product-list.php" class="btn btn-primary"> Back to List </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-default">
                                <div class="card-header card-header-border-bottom">
                                    <h2>Product Details</h2>
                                </div>

                                <div class="card-body">
                                    <div class="row ec-vendor-uploads">
                                        <div class="col-lg-4">
                                            <div class="ec-vendor-img-upload">
                                                <div class="ec-vendor-main-img">
                                                    <div class="avatar-upload">
                                                        <div class="avatar-preview ec-preview">
                                                            <div class="imagePreview ec-div-preview">
                                                                <img class="ec-image-preview" src="uploads/<?= $item['item_code'] ?>/main_image.jpg" alt="Product Image" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ec-vendor-upload-detail">
                                                <!-- Form for View and Update -->
                                                <form class="row g-3" method="POST">
                                                    <!-- Item Code -->
                                                    <div class="col-md-6">
                                                        <label for="item_code" class="form-label">Item Code</label>
                                                        <input type="text" class="form-control" id="item_code" name="item_code" value="<?= $item['item_code'] ?>" readonly>
                                                    </div>

                                                    <!-- Product Name -->
                                                    <div class="col-md-6">
                                                        <label for="product_name" class="form-label">Product Name</label>
                                                        <input type="text" class="form-control" id="product_name" name="product_name" value="<?= $item['item_name'] ?>">
                                                    </div>

                                                    <!-- Rating -->
                                                    <div class="col-md-6">
                                                        <label for="rating" class="form-label">Rating</label>
                                                        <input type="number" class="form-control" id="rating" name="rating" value="<?= $item['rating'] ?>">
                                                    </div>

                                                    <!-- Description -->
                                                    <div class="col-md-12">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="2"><?= $item['item_description'] ?></textarea>
                                                    </div>

                                                    <!-- MRP -->
                                                    <div class="col-md-6">
                                                        <label for="mrp" class="form-label">MRP</label>
                                                        <input type="number" class="form-control" id="mrp" name="mrp" value="<?= $item['mrp'] ?>">
                                                    </div>

                                                    <!-- Selling Price -->
                                                    <div class="col-md-6">
                                                        <label for="saling_price" class="form-label">Selling Price</label>
                                                        <input type="number" class="form-control" id="saling_price" name="saling_price" value="<?= $item['selling_price'] ?>">
                                                    </div>

                                                    <!-- Size -->
                                                    <div class="col-md-6">
                                                        <label for="size" class="form-label">Size</label>
                                                        <input type="text" class="form-control" id="size" name="size" value="<?= $item['size_code'] ?>">
                                                    </div>

                                                    <!-- Quantity -->
                                                    <div class="col-md-6">
                                                        <label for="qty" class="form-label">Quantity</label>
                                                        <input type="number" class="form-control" id="qty" name="qty" value="<?= $item['availability'] ?>">
                                                    </div>

                                                    <!-- Color -->
                                                    <div class="col-md-6">
                                                        <label for="color" class="form-label">Color</label>
                                                        <input type="text" class="form-control" id="color" name="color" value="<?= $item['colour_code'] ?>">
                                                    </div>

                                                    <!-- Brand -->
                                                    <div class="col-md-6">
                                                        <label for="brand" class="form-label">Brand</label>
                                                        <input type="text" class="form-control" id="brand" name="brand" value="<?= $item['brand'] ?>">
                                                    </div>

                                                    <!-- Category -->
                                                    <div class="col-md-6">
                                                        <label for="category" class="form-label">Category</label>
                                                        <input type="text" class="form-control" id="category" name="category" value="<?= $item['category'] ?>">
                                                    </div>

                                                    <!-- Subcategory -->
                                                    <div class="col-md-6">
                                                        <label for="subcategory" class="form-label">Subcategory</label>
                                                        <input type="text" class="form-control" id="subcategory" name="subcategory" value="<?= $item['subcategory'] ?>">
                                                    </div>

                                                    <!-- Make -->
                                                    <div class="col-md-6">
                                                        <label for="make" class="form-label">Make</label>
                                                        <input type="text" class="form-control" id="make" name="make" value="<?= $item['Make'] ?>">
                                                    </div>

                                                    <!-- Model -->
                                                    <div class="col-md-6">
                                                        <label for="model" class="form-label">Model</label>
                                                        <input type="text" class="form-control" id="model" name="model" value="<?= $item['Model'] ?>">
                                                    </div>

                                                    <!-- Keywords -->
                                                    <div class="col-md-12">
                                                        <label for="keywords" class="form-label">Keywords</label>
                                                        <input type="text" class="form-control" id="keywords" name="keywords" value="<?= $item['keywords'] ?>">
                                                    </div>

                                                    <!-- Meta Description -->
                                                    <div class="col-md-12">
                                                        <label for="meta_description" class="form-label">Meta Description</label>
                                                        <textarea class="form-control" id="meta_description" name="meta_description" rows="2"><?= $item['meta_description'] ?></textarea>
                                                    </div>

                                                    <!-- Meta Title -->
                                                    <div class="col-md-12">
                                                        <label for="meta_title" class="form-label">Meta Title</label>
                                                        <input type="text" class="form-control" id="meta_title" name="meta_title" value="<?= $item['meta_title'] ?>">
                                                    </div>

                                                    <!-- Meta Keywords -->
                                                    <div class="col-md-12">
                                                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                                        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="<?= $item['meta_keywords'] ?>">
                                                    </div>

                                                    <!-- Offer -->
                                                    <div class="col-md-12">
                                                        <label for="offer" class="form-label">Offer</label>
                                                        <input type="text" class="form-control" id="offer" name="offer" value="<?= $item['offer_id'] ?>">
                                                    </div>

                                                    <!-- Update Button -->
                                                    <div class="col-md-6">
                                                        <button type="submit" name="update" class="btn btn-primary">Update Product</button>
                                                    </div>

                                                    <!-- Delete Button -->
                                                    <div class="col-md-6">
                                                        <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete Product</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Content -->
            </div> <!-- End Content Wrapper -->

            