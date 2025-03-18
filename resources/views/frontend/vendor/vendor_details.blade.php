@extends('frontend.master_dashboard')
@section('main')
@section('title')
Vendor Details Page
@endsection
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> Vendor Details Page
        </div>
    </div>
</div>
<div class="container mb-30">
    <div class="archive-header-2 text-center pt-80 pb-50">
        <h1 class="display-2 mb-50"> Nest Food.,Ltd </h1>

    </div>
    <div class="row flex-row-reverse">
        <div class="col-lg-4-5">
            <div class="shop-product-fillter">
                <div class="totall-product">
                    <p>We found <strong class="text-brand">6</strong> items for you!</p>
                </div>
                <div class="sort-by-product-area">
                    <div class="sort-by-cover mr-10">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps"></i>Show:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap">
                                <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown">
                            <ul>
                                <li><a class="active" href="#">50</a></li>
                                <li><a href="#">100</a></li>
                                <li><a href="#">150</a></li>
                                <li><a href="#">200</a></li>
                                <li><a href="#">All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sort-by-cover">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap">
                                <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown">
                            <ul>
                                <li><a class="active" href="#">Featured</a></li>
                                <li><a href="#">Price: Low to High</a></li>
                                <li><a href="#">Price: High to Low</a></li>
                                <li><a href="#">Release Date</a></li>
                                <li><a href="#">Avg. Rating</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row product-grid">



                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="https://digi-poly.id.vn/product/details/9/color-block-men-round-neck-pink-t-shirt">
                                    <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740389864437655.webp" alt="" />

                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" id="9" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                <a aria-label="Compare" class="action-btn" id="9" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="9" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                            </div>



                            <div class="product-badges product-badges-position product-badges-mrg">

                                <span class="hot"> 32 %</span>


                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.html">Fashion</a>
                            </div>
                            <h2><a href="https://digi-poly.id.vn/product/details/9/color-block-men-round-neck-pink-t-shirt"> Color Block Men Round Neck Pink T-Shirt </a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Nest Food.,Ltd</a></span>




                            </div>
                            <div class="product-card-bottom">

                                <div class="product-price">
                                    <span>$400</span>
                                    <span class="old-price">$590</span>
                                </div>



                                <div class="add-cart">
                                    <a class="add" href="https://digi-poly.id.vn/product/details/9/color-block-men-round-neck-pink-t-shirt"><i class="fi-rs-shopping-cart mr-5"></i>Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="https://digi-poly.id.vn/product/details/12/regular-fit-men-beige-cotton-blend-trousers">
                                    <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740390147168644.webp" alt="" />

                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" id="12" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                <a aria-label="Compare" class="action-btn" id="12" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="12" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                            </div>



                            <div class="product-badges product-badges-position product-badges-mrg">

                                <span class="hot"> 7 %</span>


                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.html">Fashion</a>
                            </div>
                            <h2><a href="https://digi-poly.id.vn/product/details/12/regular-fit-men-beige-cotton-blend-trousers"> Regular Fit Men Beige Cotton Blend Trousers </a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Nest Food.,Ltd</a></span>




                            </div>
                            <div class="product-card-bottom">

                                <div class="product-price">
                                    <span>$650</span>
                                    <span class="old-price">$700</span>
                                </div>



                                <div class="add-cart">
                                    <a class="add" href="https://digi-poly.id.vn/product/details/12/regular-fit-men-beige-cotton-blend-trousers"><i class="fi-rs-shopping-cart mr-5"></i>Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="https://digi-poly.id.vn/product/details/13/canon-pixma-g1010-single-function">
                                    <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740390277372812.webp" alt="" />

                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" id="13" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                <a aria-label="Compare" class="action-btn" id="13" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="13" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                            </div>



                            <div class="product-badges product-badges-position product-badges-mrg">

                                <span class="hot"> 17 %</span>


                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.html">Electronics</a>
                            </div>
                            <h2><a href="https://digi-poly.id.vn/product/details/13/canon-pixma-g1010-single-function"> Canon PIXMA G1010 Single Function </a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Nest Food.,Ltd</a></span>




                            </div>
                            <div class="product-card-bottom">

                                <div class="product-price">
                                    <span>$1000</span>
                                    <span class="old-price">$1200</span>
                                </div>



                                <div class="add-cart">
                                    <a class="add" href="https://digi-poly.id.vn/product/details/13/canon-pixma-g1010-single-function"><i class="fi-rs-shopping-cart mr-5"></i>Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="https://digi-poly.id.vn/product/details/16/epson-l3200-multi-function-color">
                                    <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740390521459260.jpeg" alt="" />

                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" id="16" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                <a aria-label="Compare" class="action-btn" id="16" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="16" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                            </div>



                            <div class="product-badges product-badges-position product-badges-mrg">

                                <span class="hot"> 67 %</span>


                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.html">Electronics</a>
                            </div>
                            <h2><a href="https://digi-poly.id.vn/product/details/16/epson-l3200-multi-function-color"> Epson L3200 Multi-function Color </a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Nest Food.,Ltd</a></span>




                            </div>
                            <div class="product-card-bottom">

                                <div class="product-price">
                                    <span>$400</span>
                                    <span class="old-price">$1200</span>
                                </div>



                                <div class="add-cart">
                                    <a class="add" href="https://digi-poly.id.vn/product/details/16/epson-l3200-multi-function-color"><i class="fi-rs-shopping-cart mr-5"></i>Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="https://digi-poly.id.vn/product/details/17/meraki-wonder-adjustable-cell-phone-holder">
                                    <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740390669284753.webp" alt="" />

                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" id="17" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                <a aria-label="Compare" class="action-btn" id="17" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="17" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                            </div>



                            <div class="product-badges product-badges-position product-badges-mrg">

                                <span class="hot"> 17 %</span>


                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.html">Electronics</a>
                            </div>
                            <h2><a href="https://digi-poly.id.vn/product/details/17/meraki-wonder-adjustable-cell-phone-holder"> Meraki Wonder Adjustable Cell Phone Holder </a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Nest Food.,Ltd</a></span>




                            </div>
                            <div class="product-card-bottom">

                                <div class="product-price">
                                    <span>$1000</span>
                                    <span class="old-price">$1200</span>
                                </div>



                                <div class="add-cart">
                                    <a class="add" href="https://digi-poly.id.vn/product/details/17/meraki-wonder-adjustable-cell-phone-holder"><i class="fi-rs-shopping-cart mr-5"></i>Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="https://digi-poly.id.vn/product/details/20/fashion-bizz-antique-handmade-vintag">
                                    <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740391100708280.webp" alt="" />

                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" id="20" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                <a aria-label="Compare" class="action-btn" id="20" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="20" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                            </div>



                            <div class="product-badges product-badges-position product-badges-mrg">

                                <span class="hot"> 15 %</span>


                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.html">Sweet Home</a>
                            </div>
                            <h2><a href="https://digi-poly.id.vn/product/details/20/fashion-bizz-antique-handmade-vintag"> Fashion Bizz Antique Handmade Vintag </a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Nest Food.,Ltd</a></span>




                            </div>
                            <div class="product-card-bottom">

                                <div class="product-price">
                                    <span>$500</span>
                                    <span class="old-price">$590</span>
                                </div>



                                <div class="add-cart">
                                    <a class="add" href="https://digi-poly.id.vn/product/details/20/fashion-bizz-antique-handmade-vintag"><i class="fi-rs-shopping-cart mr-5"></i>Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->






            </div>
            <!--product grid-->
            <div class="pagination-area mt-20 mb-20">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!--End Deals-->
        </div>
        <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
            <div class="sidebar-widget widget-store-info mb-30 bg-3 border-0">
                <div class="vendor-logo mb-30">
                    <img src="https://digi-poly.id.vn/upload/vendor_images/202207212102vendor-16 (1).png" alt="" />
                </div>
                <div class="vendor-info">
                    <div class="product-category">
                        <span class="text-muted">Since 2023</span>
                    </div>
                    <h4 class="mb-5"><a href="vendor-details-1.html" class="text-heading">Nest Food.,Ltd</a></h4>
                    <div class="product-rate-cover mb-15">
                        <div class="product-rate d-inline-block">
                            <div class="product-rating" style="width: 90%"></div>
                        </div>
                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                    </div>
                    <div class="vendor-des mb-30">
                        <p class="font-sm text-heading">Got a smooth, buttery spread in your fridge? Chances are good that it&#039;s Good Chef. This brand made Lionto&#039;s list of the most popular grocery brands across the country.</p>
                    </div>
                    <div class="follow-social mb-20">
                        <h6 class="mb-15">Follow Us</h6>
                        <ul class="social-network">
                            <li class="hover-up">
                                <a href="#">
                                    <img src="https://digi-poly.id.vn/frontend/assets/imgs/theme/icons/social-tw.svg" alt="" />
                                </a>
                            </li>
                            <li class="hover-up">
                                <a href="#">
                                    <img src="https://digi-poly.id.vn/frontend/assets/imgs/theme/icons/social-fb.svg" alt="" />
                                </a>
                            </li>
                            <li class="hover-up">
                                <a href="#">
                                    <img src="https://digi-poly.id.vn/frontend/assets/imgs/theme/icons/social-insta.svg" alt="" />
                                </a>
                            </li>
                            <li class="hover-up">
                                <a href="#">
                                    <img src="https://digi-poly.id.vn/frontend/assets/imgs/theme/icons/social-pin.svg" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="vendor-info">
                        <ul class="font-sm mb-20">
                            <li><img class="mr-5" src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>Campbell Ave undefined</span></li>
                            <li><img class="mr-5" src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>540-025-124553</span></li>
                        </ul>
                        <a href="vendor-details-1.html" class="btn btn-xs">Contact Seller <i class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>


            <!-- Fillter By Price -->


        </div>
    </div>
</div>



@endsection