<?php
include 'pb_connection.php';

$sql = "SELECT * FROM item WHERE status = 'active'";
$result = mysqli_query($conn, $sql);

// Start of the frontend template
?>

<!-- Product tab Area Start -->
<section class="section ec-product-tab section-space-p" id="collection">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="section-title">
          <h2 class="ec-bg-title">Our Top Collection</h2>
          <h2 class="ec-title">Our Top Collection</h2>
          <p class="sub-title">Browse The Collection of Top Products</p>
        </div>
      </div>

      <!-- Tab Start -->
      <div class="col-md-12 text-center">
        <ul class="ec-pro-tab-nav nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab-pro-for-all"> All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-men">T Shirts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-men"> Perfumes </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-women">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-child">Electronics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-pro-for-child">Shoes</a>
          </li>
        </ul>
      </div>
      <!-- Tab End -->
    </div>
    <div class="row">
      <div class="col">
        <div class="tab-content">
          <!-- 1st Product tab start -->
          <div class="tab-pane fade show active" id="tab-pro-for-all">
            <div class="row">
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                $item_name = $row['item_name'];
                $item_code = $row['item_code'];
                $item_description = $row['item_description'];
                $mrp = $row['mrp'];
                $selling_price = $row['selling_price'];
                $category = $row['category'];
                $subcategory = $row['subcategory'];
                $brand = $row['brand'];
                $rating = $row['rating'];
                $image_path = "assets/images/product-image/" . $item_code . ".jpg"; // Assuming images are named by item_code
              ?>
                <!-- Product Content -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content" data-animation="fadeIn">
                  <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                      <div class="ec-pro-image">
                        <a href="product-left-sidebar.html" class="image">
                          <img class="main-image" src="<?php echo $image_path; ?>" alt="<?php echo $item_name; ?>" />
                          <img class="hover-image" src="<?php echo $image_path; ?>" alt="<?php echo $item_name; ?>" />
                        </a>
                        <span class="percentage">20%</span>
                        <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal">
                          <img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" />
                        </a>
                        <div class="ec-pro-actions">
                          <a href="compare.html" class="ec-btn-group compare" title="Compare">
                            <img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" />
                          </a>
                          <button title="Add To Cart" class="add-to-cart">
                            <img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" />
                            Add To Cart
                          </button>
                          <a class="ec-btn-group wishlist" title="Wishlist">
                            <img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" />
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="ec-pro-content">
                      <h5 class="ec-pro-title">
                        <a href="product-left-sidebar.html"><?php echo $item_name; ?></a>
                      </h5>
                      <div class="ec-pro-rating">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                          if ($i <= $rating) {
                            echo '<i class="ecicon eci-star fill"></i>';
                          } else {
                            echo '<i class="ecicon eci-star"></i>';
                          }
                        }
                        ?>
                      </div>
                      <span class="ec-price">
                        <span class="old-price">$<?php echo $mrp; ?></span>
                        <span class="new-price">$<?php echo $selling_price; ?></span>
                      </span>
                      <div class="ec-pro-option">
                        <div class="ec-pro-color">
                          <span class="ec-pro-opt-label">Color</span>
                          <ul class="ec-opt-swatch ec-change-img">
                            <li class="active">
                              <a href="#" class="ec-opt-clr-img" data-src="<?php echo $image_path; ?>" data-src-hover="<?php echo $image_path; ?>" data-tooltip="Gray">
                                <span style="background-color: #e8c2ff"></span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="ec-opt-clr-img" data-src="<?php echo $image_path; ?>" data-src-hover="<?php echo $image_path; ?>" data-tooltip="Orange">
                                <span style="background-color: #9cfdd5"></span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="ec-pro-size">
                          <span class="ec-pro-opt-label">Size</span>
                          <ul class="ec-opt-size">
                            <li class="active">
                              <a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a>
                            </li>
                            <li>
                              <a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a>
                            </li>
                            <li>
                              <a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Large">X</a>
                            </li>
                            <li>
                              <a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00" data-tooltip="Extra Large">XL</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <div class="col-sm-12 shop-all-btn">
                <a href="shop-left-sidebar-col-3.html">Shop All Collection</a>
              </div>
            </div>
          </div>
          <!-- ec 1st Product tab end -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ec Product tab Area End -->

<?php
$conn->close();
?>