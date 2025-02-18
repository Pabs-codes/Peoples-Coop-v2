<div class="ec-side-cat-overlay"></div>
<div class="col-lg-3 category-sidebar" data-animation="fadeIn">
  <div class="cat-sidebar">
    <div class="cat-sidebar-box">
      <div class="ec-sidebar-wrap">
        <!-- Sidebar Category Block -->
        <div class="ec-sidebar-block">
          <div class="ec-sb-title">
            <h3 class="ec-sidebar-title">
              Category<button class="ec-close">×</button>
            </h3>
          </div>
          
          <?php
        $cat_holder = '';

        foreach ($result as $row) {
          $item_name = $row['item_name'];
          $item_code = $row['item_code'];
          $item_description = $row['item_description'];
          $mrp = $row['mrp'];
          $selling_price = $row['selling_price'];
          $category = $row['category'];
          $subcategory = $row['subcategory'];
          $brand = $row['brand'];
          $rating = $row['rating'];
          $category_name= $row['category_name'];

          if ($cat_holder == $row['category']) {

          } else {
            $cat_holder = $row['category'];
            

            echo "<div class='ec-sb-block-content'>
            <ul>
              <li>
                <div class='ec-sidebar-block-item'>
                  <a class='nav-link' data-bs-toggle='tab' href='index.php# . $category . '>$category</a>
                </div>
                <ul style='display: block'>
                  <li>
                    <div class='ec-sidebar-sub-item'>
                      <a href='shop-left-sidebar-col-3.html'>Peoples Coop T - Shirt <span title='Available Stock'>-
                          125</span></a>
                    </div>
                  </li>
                  
                  
                  
                </ul>
              </li>
            </ul>
          </div>";

          }
          
        
        }
        ?>
          











        </div>






        <!-- Sidebar Category Block -->
      </div>
    </div>
    <div class="ec-sidebar-slider-cat">
      <div class="ec-sb-slider-title">Latest Products</div>
      <div class="ec-sb-pro-sl">

        <!-- Product 1: Kelalikarayo Book -->
        <div>
          <!-- <div class="ec-sb-pro-sl-item">
            <a href="product-left-sidebar.html" class="sidpeoplescoop_pro_img">
              <img src="assets/images/product-image/kelalikarayo.jpg" alt="Kelalikarayo" />
            </a>
            <div class="ec-pro-content">
              <h5 class="ec-pro-title">
                <a href="product-left-sidebar.html">Kelalikarayo - කැළලිකාරයෝ</a>
              </h5>
              <div class="ec-pro-rating">
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star"></i>
                <i class="ecicon eci-star"></i>
              </div>
              <span class="ec-price">
                <span class="old-price">Rs. 1200.00</span>
                <span class="new-price">Rs. 1000.00</span>
              </span>
            </div>
          </div> -->
        </div>



      </div>
    </div>
  </div>
</div>