<?php
    $title='Shop Page';
    $subTitle='Shop Page';
?>

<?php include './layouts/layout-top.php'?>

    <!--==============================
    Product Area
    ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-9 col-lg-8">
                    <div class="shop-sort-bar">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md">
                                <p class="woocommerce-result-count">Showing 1-15 of 52 results</p>
                            </div>

                            <div class="col-md-auto">
                                <form class="woocommerce-ordering" method="get">
                                    <div class="form-group mb-0">
                                        <select name="orderby" class="single-select orderby" aria-label="Shop order">
                                            <option value="menu_order" selected="selected">Default Sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-40">
                        <div class="col-xl-4 col-md-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_1.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="ri-eye-line"></i></a>
                                        <a href="cart.php" class="icon-btn"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="wishlist.php" class="icon-btn"><i class="ri-heart-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <span class="star-rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    <h3 class="product-title"><a href="shop-details.php">Hardware Toolbox</a></h3>
                                    <span class="price"><del>$30</del> $25</span>
                                </div>
                            </div>
                        </div>    
                        <div class="col-xl-4 col-md-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_2.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="ri-eye-line"></i></a>
                                        <a href="cart.php" class="icon-btn"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="wishlist.php" class="icon-btn"><i class="ri-heart-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <span class="star-rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    <h3 class="product-title"><a href="shop-details.php">Drill Machine</a></h3>
                                    <span class="price"><del>$300</del> $250</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_3.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="ri-eye-line"></i></a>
                                        <a href="cart.php" class="icon-btn"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="wishlist.php" class="icon-btn"><i class="ri-heart-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <span class="star-rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    <h3 class="product-title"><a href="shop-details.php">Claw Hammer</a></h3>
                                    <span class="price"><del>$130</del> $125</span>
                                </div>
                            </div>
                        </div>   
                        <div class="col-xl-4 col-md-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_4.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="ri-eye-line"></i></a>
                                        <a href="cart.php" class="icon-btn"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="wishlist.php" class="icon-btn"><i class="ri-heart-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <span class="star-rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    <h3 class="product-title"><a href="shop-details.php">Chainsaw Machine</a></h3>
                                    <span class="price"><del>$130</del> $125</span>
                                </div>
                            </div>
                        </div> 
                        <div class="col-xl-4 col-md-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_5.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="ri-eye-line"></i></a>
                                        <a href="cart.php" class="icon-btn"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="wishlist.php" class="icon-btn"><i class="ri-heart-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <span class="star-rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    <h3 class="product-title"><a href="shop-details.php">Construction Hat</a></h3>
                                    <span class="price"><del>$150</del> $125</span>
                                </div>
                            </div>
                        </div> 
                        <div class="col-xl-4 col-md-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_6.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="ri-eye-line"></i></a>
                                        <a href="cart.php" class="icon-btn"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="wishlist.php" class="icon-btn"><i class="ri-heart-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <span class="star-rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    <h3 class="product-title"><a href="shop-details.php">Sparta Demolition Hamme</a></h3>
                                    <span class="price"><del>$150</del> $125</span>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-4 col-md-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_7.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="ri-eye-line"></i></a>
                                        <a href="cart.php" class="icon-btn"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="wishlist.php" class="icon-btn"><i class="ri-heart-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <span class="star-rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    <h3 class="product-title"><a href="shop-details.php">Hitachi Zaxis 110m</a></h3>
                                    <span class="price"><del>$350</del> $225</span>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-4 col-md-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_8.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="ri-eye-line"></i></a>
                                        <a href="cart.php" class="icon-btn"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="wishlist.php" class="icon-btn"><i class="ri-heart-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <span class="star-rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    <h3 class="product-title"><a href="shop-details.php">Sprayer Mowers Machine</a></h3>
                                    <span class="price"><del>$450</del> $320</span>
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-4 col-md-6">
                            <div class="product-card">
                                <div class="product-img">
                                    <img src="assets/img/product/product_1_9.jpg" alt="Product Image">
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i class="ri-eye-line"></i></a>
                                        <a href="cart.php" class="icon-btn"><i class="ri-shopping-cart-line"></i></a>
                                        <a href="wishlist.php" class="icon-btn"><i class="ri-heart-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <span class="star-rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </span>
                                    <h3 class="product-title"><a href="shop-details.php">Compaction Machine</a></h3>
                                    <span class="price"><del>$550</del> $450</span>
                                    
                                </div>
                            </div>
                        </div>  
                    </div> 
                    <div class="pagination justify-content-center">
                        <ul>
                            <li><a class="active" href="blog.php">01</a></li>
                            <li><a href="blog.php">02</a></li>
                            <li><a href="blog.php">03</a></li>
                            <li><a href="blog.php"><i class="ri-arrow-right-line"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <h3 class="widget_title">Search Here</h3>
                            <form class="search-form">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </form>
                        </div>

                        <div class="widget widget_categories">
                            <h3 class="widget_title">Product Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog.php">Construction <span>12</span></a>
                                </li>
                                <li>
                                    <a href="blog.php">Architecture <span>7</span></a>
                                </li>
                                <li>
                                    <a href="blog.php">Business <span>5</span></a>
                                </li>
                                <li>
                                    <a href="blog.php">Engineering <span>3</span></a>
                                </li>
                                <li>
                                    <a href="blog.php">Building <span>2</span></a>
                                </li>                                
                            </ul>
                        </div>

                        <div class="widget widget_price_filter  ">
                            <h4 class="widget_title">Filter By Price</h4>
                            <div class="price_slider_wrapper">
                                <div class="price_slider"></div>
                                <div class="price_label">
                                    Price: <span class="from">$0</span> - <span class="to">$70</span>
                                    <button type="submit" class="button btn">Filter</button>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.php">Architecture</a>
                                <a href="blog.php">Building</a>
                                <a href="blog.php">Home</a>
                                <a href="blog.php">Factory</a>
                                <a href="blog.php">Construction</a>
                                <a href="blog.php">Business</a>
                                <a href="blog.php">Design</a>
                                <a href="blog.php">Industry</a>
                            </div>
                        </div>          
                    </aside>
                </div>
            </div>
        </div>
    </section>   

<?php include './layouts/layout-bottom.php'?>