@extends('frontend.master_dashboard')
@section('main')

@section('title')
Category
@endsection


<div class="page-header mt-30 mb-50">
    <div class="container">
        <div class="archive-header">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <h5 class="mb-15">Electronics</h5>
                    <div class="breadcrumb">
                        <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                        <span></span> Electronics
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container mb-30">
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
                                <a href="https://digi-poly.id.vn/product/details/18/portronics-por-1196-modesk-plus">
                                    <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740390741204758.webp" alt="" />

                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" id="18" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                <a aria-label="Compare" class="action-btn" id="18" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="18" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                            </div>



                            <div class="product-badges product-badges-position product-badges-mrg">

                                <span class="new">New</span>


                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.html">Electronics</a>
                            </div>
                            <h2><a href="https://digi-poly.id.vn/product/details/18/portronics-por-1196-modesk-plus"> Portronics POR-1196 Modesk Plus </a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Sony</a></span>




                            </div>
                            <div class="product-card-bottom">

                                <div class="product-price">
                                    <span>$700</span>

                                </div>




                                <div class="add-cart">
                                    <a class="add" href="https://digi-poly.id.vn/product/details/18/portronics-por-1196-modesk-plus"><i class="fi-rs-shopping-cart mr-5"></i>Details </a>
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
                                <a href="https://digi-poly.id.vn/product/details/15/brother-dcp-t220-multi-function">
                                    <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740390426441547.webp" alt="" />

                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" id="15" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                <a aria-label="Compare" class="action-btn" id="15" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="15" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                            </div>



                            <div class="product-badges product-badges-position product-badges-mrg">

                                <span class="hot"> 15 %</span>


                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.html">Electronics</a>
                            </div>
                            <h2><a href="https://digi-poly.id.vn/product/details/15/brother-dcp-t220-multi-function"> brother DCP-T220 Multi-function </a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Walton</a></span>




                            </div>
                            <div class="product-card-bottom">

                                <div class="product-price">
                                    <span>$500</span>
                                    <span class="old-price">$590</span>
                                </div>



                                <div class="add-cart">
                                    <a class="add" href="https://digi-poly.id.vn/product/details/15/brother-dcp-t220-multi-function"><i class="fi-rs-shopping-cart mr-5"></i>Details </a>
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
                                <a href="https://digi-poly.id.vn/product/details/14/hp-315-multi-function-color-printe">
                                    <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740390365626068.webp" alt="" />

                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" id="14" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                <a aria-label="Compare" class="action-btn" id="14" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="14" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                            </div>



                            <div class="product-badges product-badges-position product-badges-mrg">

                                <span class="new">New</span>


                            </div>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <a href="shop-grid-right.html">Electronics</a>
                            </div>
                            <h2><a href="https://digi-poly.id.vn/product/details/14/hp-315-multi-function-color-printe"> HP 315 Multi-function Color Printe </a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <a href="vendor-details-1.html">Walton</a></span>




                            </div>
                            <div class="product-card-bottom">

                                <div class="product-price">
                                    <span>$300</span>

                                </div>




                                <div class="add-cart">
                                    <a class="add" href="https://digi-poly.id.vn/product/details/14/hp-315-multi-function-color-printe"><i class="fi-rs-shopping-cart mr-5"></i>Details </a>
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
            <div class="sidebar-widget widget-category-2 mb-30">
                <h5 class="section-title style-1 mb-30">Category</h5>
                <ul>




                    <li>
                        <a href="shop-grid-right.html"> <img src=" https://digi-poly.id.vn/upload/category/1740388475103826.webp " alt="" />Appliances</a><span class="count">0</span>
                    </li>



                    <li>
                        <a href="shop-grid-right.html"> <img src=" https://digi-poly.id.vn/upload/category/1740388510925410.webp " alt="" />Beauty</a><span class="count">0</span>
                    </li>



                    <li>
                        <a href="shop-grid-right.html"> <img src=" https://digi-poly.id.vn/upload/category/1740388410112488.webp " alt="" />Electronics</a><span class="count">6</span>
                    </li>



                    <li>
                        <a href="shop-grid-right.html"> <img src=" https://digi-poly.id.vn/upload/category/1740388456845535.webp " alt="" />Fashion</a><span class="count">7</span>
                    </li>



                    <li>
                        <a href="shop-grid-right.html"> <img src=" https://digi-poly.id.vn/upload/category/1740388599418960.webp " alt="" />Furniture</a><span class="count">0</span>
                    </li>



                    <li>
                        <a href="shop-grid-right.html"> <img src=" https://digi-poly.id.vn/upload/category/1740388649576724.webp " alt="" />Grocery</a><span class="count">0</span>
                    </li>



                    <li>
                        <a href="shop-grid-right.html"> <img src=" https://digi-poly.id.vn/upload/category/1740388203907617.png " alt="" />Meat &amp; Fish</a><span class="count">0</span>
                    </li>



                    <li>
                        <a href="shop-grid-right.html"> <img src=" https://digi-poly.id.vn/upload/category/1740388616630915.webp " alt="" />Mobiles</a><span class="count">5</span>
                    </li>



                    <li>
                        <a href="shop-grid-right.html"> <img src=" https://digi-poly.id.vn/upload/category/1740388444682193.webp " alt="" />Sweet Home</a><span class="count">5</span>
                    </li>



                    <li>
                        <a href="shop-grid-right.html"> <img src=" https://digi-poly.id.vn/upload/category/1740388803723655.webp " alt="" />Travel</a><span class="count">0</span>
                    </li>

                </ul>
            </div>
            <!-- Fillter By Price -->

            <!-- Product sidebar Widget -->
            <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                <h5 class="section-title style-1 mb-30">New products</h5>

                <div class="single-post clearfix">
                    <div class="image">
                        <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391997743770.webp" alt="#" />
                    </div>
                    <div class="content pt-10">
                        <p><a href="https://digi-poly.id.vn/product/details/28/apple-iphone-13-(starlight,-128-gb)">APPLE iPhone 13 (Starlight, 128 GB)</a></p>

                        <p class="price mb-0 mt-5">$1000</p>

                        <div class="product-rate">
                            <div class="product-rating" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391924552351.webp" alt="#" />
                    </div>
                    <div class="content pt-10">
                        <p><a href="https://digi-poly.id.vn/product/details/27/apple-iphone-13-(pink,-128-gb">APPLE iPhone 13 (Pink, 128 GB</a></p>

                        <p class="price mb-0 mt-5">$1000</p>

                        <div class="product-rate">
                            <div class="product-rating" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391863075855.webp" alt="#" />
                    </div>
                    <div class="content pt-10">
                        <p><a href="https://digi-poly.id.vn/product/details/26/samsung-galaxy-f13">SAMSUNG Galaxy F13</a></p>

                        <p class="price mb-0 mt-5">$500</p>

                        <div class="product-rate">
                            <div class="product-rating" style="width: 90%"></div>
                        </div>
                    </div>
                </div>



            </div>


        </div>
    </div>
</div>





@endsection