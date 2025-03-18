@extends('frontend.master_dashboard')
@section('main')

@section('title')
Home Easy Multi Vendor Shop
@endsection

@include('frontend.home.home_slider')

<!--End hero slider-->
@include('frontend.home.home_features_category')

<!--End category slider-->
@include('frontend.home.home_banner')
<!--End banners-->


@include('frontend.home.home_new_product')

<!--Products Tabs-->



@include('frontend.home.home_features_product')


<!--End Best Sales-->
<!-- Fashion Category -->

<section class="product-tabs section-padding position-relative">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3>Fashion Category </h3>

        </div>
        <!--End nav-tabs-->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">


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

                                    </div>
                                    <span class="font-small ml-5 text-muted"> (0)</span>
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
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                    <a href="https://digi-poly.id.vn/product/details/11/pack-of-2-solid-men-black,-blue-track">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740390058801111.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="11" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="11" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="11" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="hot"> 17 %</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Fashion</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/11/pack-of-2-solid-men-black,-blue-track"> Pack of 2 Solid Men Black, Blue Track </a></h2>


                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">

                                    </div>
                                    <span class="font-small ml-5 text-muted"> (0)</span>
                                </div>



                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Expart Fashion</a></span>




                                </div>
                                <div class="product-card-bottom">

                                    <div class="product-price">
                                        <span>$500</span>
                                        <span class="old-price">$600</span>
                                    </div>



                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                    <a href="https://digi-poly.id.vn/product/details/10/skinny-men-blue-jeans">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740389985066584.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="10" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="10" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="10" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="hot"> 15 %</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Fashion</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/10/skinny-men-blue-jeans"> Skinny Men Blue Jeans </a></h2>


                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">

                                    </div>
                                    <span class="font-small ml-5 text-muted"> (0)</span>
                                </div>



                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Owner</a></span>



                                </div>
                                <div class="product-card-bottom">

                                    <div class="product-price">
                                        <span>$500</span>
                                        <span class="old-price">$590</span>
                                    </div>



                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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

                                        <div class="product-rating" style="width: 60%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (3)</span>
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
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                    <a href="https://digi-poly.id.vn/product/details/8/solid-men-mandarin-collar-black">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740389783829401.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="8" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="8" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="8" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="new">New</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Fashion</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/8/solid-men-mandarin-collar-black"> Solid Men Mandarin Collar Black </a></h2>


                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">

                                    </div>
                                    <span class="font-small ml-5 text-muted"> (0)</span>
                                </div>



                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Expart Fashion</a></span>




                                </div>
                                <div class="product-card-bottom">

                                    <div class="product-price">
                                        <span>$500</span>

                                    </div>




                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->





                </div>
                <!--End product-grid-4-->
            </div>


        </div>
        <!--End tab-content-->
    </div>


</section>
<!--End Fashion Category -->





<!-- SweetHome Category -->

<section class="product-tabs section-padding position-relative">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3>Sweet Home Category </h3>

        </div>
        <!--End nav-tabs-->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">


                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="https://digi-poly.id.vn/product/details/23/furinno-solid-wood-king-box-bed">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740391448274795.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="23" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="23" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="23" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="hot"> 17 %</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Sweet Home</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/23/furinno-solid-wood-king-box-bed"> FURINNO Solid Wood King Box Bed </a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Owner</a></span>



                                </div>
                                <div class="product-card-bottom">

                                    <div class="product-price">
                                        <span>$1000</span>
                                        <span class="old-price">$1200</span>
                                    </div>



                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                    <a href="https://digi-poly.id.vn/product/details/22/furniturekraft-nancy-metal-double">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740391379244561.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="22" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="22" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="22" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="hot"> 17 %</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Sweet Home</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/22/furniturekraft-nancy-metal-double"> FurnitureKraft Nancy Metal Double </a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Owner</a></span>



                                </div>
                                <div class="product-card-bottom">

                                    <div class="product-price">
                                        <span>$300</span>
                                        <span class="old-price">$360</span>
                                    </div>



                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                    <a href="https://digi-poly.id.vn/product/details/21/aakriti-solar-laughing-buddha-holding">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740391171768623.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="21" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="21" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="21" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="new">New</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Sweet Home</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/21/aakriti-solar-laughing-buddha-holding"> Aakriti Solar Laughing Buddha Holding </a></h2>
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
                                        <span>$600</span>

                                    </div>




                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                    <a href="https://digi-poly.id.vn/product/details/19/chhariya-crafts-metal-feng-shui-tortoise">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740391009693051.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="19" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="19" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="19" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="hot"> 15 %</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Sweet Home</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/19/chhariya-crafts-metal-feng-shui-tortoise"> Chhariya Crafts Metal Feng Shui Tortoise </a></h2>
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
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->





                </div>
                <!--End product-grid-4-->
            </div>


        </div>
        <!--End tab-content-->
    </div>


</section>
<!--End SweetHome Category -->









<!-- Mobile Category -->

<section class="product-tabs section-padding position-relative">
    <div class="container">
        <div class="section-title style-2 wow animate__animated animate__fadeIn">
            <h3>Mobiles Category </h3>

        </div>
        <!--End nav-tabs-->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">


                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="https://digi-poly.id.vn/product/details/27/apple-iphone-13-(pink,-128-gb">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740391924552351.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="27" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="27" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="27" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="hot"> 17 %</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Mobiles</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/27/apple-iphone-13-(pink,-128-gb"> APPLE iPhone 13 (Pink, 128 GB </a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Owner</a></span>



                                </div>
                                <div class="product-card-bottom">

                                    <div class="product-price">
                                        <span>$1000</span>
                                        <span class="old-price">$1200</span>
                                    </div>



                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                    <a href="https://digi-poly.id.vn/product/details/26/samsung-galaxy-f13">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740391863075855.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="26" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="26" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="26" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="new">New</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Mobiles</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/26/samsung-galaxy-f13"> SAMSUNG Galaxy F13 </a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Owner</a></span>



                                </div>
                                <div class="product-card-bottom">

                                    <div class="product-price">
                                        <span>$500</span>

                                    </div>




                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                    <a href="https://digi-poly.id.vn/product/details/25/samsung-galaxy-f22">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740391793359745.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="25" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="25" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="25" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="hot"> 17 %</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Mobiles</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/25/samsung-galaxy-f22"> SAMSUNG Galaxy F22 </a></h2>
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
                                        <span>$1000</span>
                                        <span class="old-price">$1200</span>
                                    </div>



                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                                    <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play">
                                        <img class="default-img" src="https://digi-poly.id.vn/upload/products/thambnail/1740391723890141.webp" alt="" />

                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" id="24" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                    <a aria-label="Compare" class="action-btn" id="24" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal" id="24" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                </div>



                                <div class="product-badges product-badges-position product-badges-mrg">

                                    <span class="hot"> 38 %</span>


                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Mobiles</a>
                                </div>
                                <h2><a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> Infinix HOT 12 Play </a></h2>
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
                                        <span>$500</span>
                                        <span class="old-price">$800</span>
                                    </div>



                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->





                </div>
                <!--End product-grid-4-->
            </div>


        </div>
        <!--End tab-content-->
    </div>


</section>
<!--End Mobile Category -->






<section class="section-padding mb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                <h4 class="section-title style-1 mb-30 animated animated"> Hot Deals </h4>
                <div class="product-list-small animated animated">


                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391997743770.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> APPLE iPhone 13 (Starlight, 128 GB) </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1100</span>
                            </div>
                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391924552351.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> APPLE iPhone 13 (Pink, 128 GB </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1200</span>
                            </div>
                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391793359745.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> SAMSUNG Galaxy F22 </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1200</span>
                            </div>
                        </div>
                    </article>



                </div>
            </div>




            <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                <h4 class="section-title style-1 mb-30 animated animated"> Special Offer </h4>
                <div class="product-list-small animated animated">



                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391863075855.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> SAMSUNG Galaxy F13 </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$500</span>

                            </div>

                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391793359745.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> SAMSUNG Galaxy F22 </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1200</span>
                            </div>
                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391723890141.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> Infinix HOT 12 Play </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$500</span>
                                <span class="old-price">$800</span>
                            </div>
                        </div>
                    </article>



                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                <div class="product-list-small animated animated">



                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391924552351.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> APPLE iPhone 13 (Pink, 128 GB </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1200</span>
                            </div>
                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391863075855.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> SAMSUNG Galaxy F13 </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$500</span>

                            </div>

                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391793359745.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> SAMSUNG Galaxy F22 </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1200</span>
                            </div>
                        </div>
                    </article>



                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <h4 class="section-title style-1 mb-30 animated animated"> Special Deals </h4>
                <div class="product-list-small animated animated">



                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391997743770.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> APPLE iPhone 13 (Starlight, 128 GB) </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1100</span>
                            </div>
                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391924552351.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> APPLE iPhone 13 (Pink, 128 GB </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$1000</span>
                                <span class="old-price">$1200</span>
                            </div>
                        </div>
                    </article>

                    <article class="row align-items-center hover-up">
                        <figure class="col-md-4 mb-0">
                            <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"><img src="https://digi-poly.id.vn/upload/products/thambnail/1740391863075855.webp" alt="" /></a>
                        </figure>
                        <div class="col-md-8 mb-0">
                            <h6>
                                <a href="https://digi-poly.id.vn/product/details/24/infinix-hot-12-play"> SAMSUNG Galaxy F13 </a>
                            </h6>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div class="product-price">
                                <span>$500</span>

                            </div>

                        </div>
                    </article>




                </div>
            </div>
        </div>
    </div>
</section>
<!--End 4 columns-->




<!--Vendor List -->

@include('frontend.home.home_vendor_list')

<!--End Vendor List -->

@endsection