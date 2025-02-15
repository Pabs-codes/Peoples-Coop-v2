 <?php
    $imagePath="../pcbe/uploads/". $item_code."/main_image.jpg";
    $hooverImagePath="../pcbe/uploads/". $item_code."/hoover_image.jpg";
?>


              <!-- Product Content -->
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content" data-animation="fadeIn">
                <div class="ec-product-inner">
                  <div class="ec-pro-image-outer">
                    <div class="ec-pro-image">
                      <a href="product-left-sidebar.html" class="image">
                        <img class="main-image" src="<?php echo $imagePath; ?>" alt="Product" />
                        
                        <img class="hover-image" src="<?php echo $hooverImagePath;?>" alt="Product" />
                      </a>
                      <span class="percentage">20%</span>
                      <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                          src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                      <div class="ec-pro-actions">
                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><img
                            src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                        <button title="Add To Cart" class="add-to-cart">
                          <img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" />
                          Add To Cart
                        </button>
                        <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg"
                            class="svg_img pro_svg" alt="" /></a>
                      </div>
                    </div>
                  </div>
                  <div class="ec-pro-content">
                    <h5 class="ec-pro-title">
                      <a href="product-left-sidebar.html"><?php echo $row['item_name'];?></a>
                    </h5>
                    <div class="ec-pro-rating">
                      <i class="ecicon eci-star fill"></i>
                      <i class="ecicon eci-star fill"></i>
                      <i class="ecicon eci-star fill"></i>
                      <i class="ecicon eci-star fill"></i>
                      <i class="ecicon eci-star"></i>
                    </div>
                    <span class="ec-price">
                      <span class="old-price"><?php echo $row['mrp'];?></span>
                      <span class="new-price"><?php echo $row['selling_price'];?></span>
                    </span>
                    <div class="ec-pro-option">
                      <div class="ec-pro-color">
                        <span class="ec-pro-opt-label">Color</span>
                        <ul class="ec-opt-swatch ec-change-img">
                          <li class="active">
                            <a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_1.jpg"
                              data-src-hover="assets/images/product-image/6_1.jpg" data-tooltip="Gray"><span
                                style="background-color: #e8c2ff"></span></a>
                          </li>
                          <li>
                            <a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_2.jpg"
                              data-src-hover="assets/images/product-image/6_2.jpg" data-tooltip="Orange"><span
                                style="background-color: #9cfdd5"></span></a>
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
                            <a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00"
                              data-tooltip="Medium">M</a>
                          </li>
                          <li>
                            <a href="#" class="ec-opt-sz" data-old="$30.00" data-new="$25.00" data-tooltip="Large">X</a>
                          </li>
                          <li>
                            <a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00"
                              data-tooltip="Extra Large">XL</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              

              
            
<!-- ec Product tab Area End -->