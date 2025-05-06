@extends('frontend.master_dashboard')
@section('main')

@section('title')

@endsection

<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> <a href="shop-grid-right.html">Fashion</a> <span></span> Mans Top Ware <span></span>Color
            Block Men Hooded Neck Red
        </div>
    </div>
</div>
<div class="container mb-30">
    <div class="row">
        <div class="col-xl-10 col-lg-12 m-auto">
            <div class="product-detail accordion-detail">
                <div class="row mb-50 mt-30">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                        <div class="detail-gallery">
                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                            <!-- MAIN SLIDES -->
                            <div class="product-image-slider">
                                <figure class="border-radius-10">
                                    <img src="{{ asset($product->product_thumnail)}}"
                                        alt="product image" />
                                </figure>
                            </div>
                            <!-- THUMBNAILS -->
                            <div class="slider-nav-thumbnails">
                                @foreach ($multi_imgs as $img)
                                <div><img
                                        src="{{ asset($img->photo_name)}}"
                                        alt="product image" /></div>
                                @endforeach


                            </div>
                        </div>
                        <!-- End Gallery -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="detail-info pr-30 pl-30">
                            <span class="stock-status in-stock">In Stock </span>



                            <h2 class="title-detail" id="dpname"> {{ $product->product_name }}</h2>
                            <div class="product-detail-rating">
                                <div class="product-rate-cover text-end">



                                    <div class="product-rate d-inline-block">

                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>



                                    <span class="font-small ml-5 text-muted"> (1 reviews)</span>
                                </div>
                            </div>
                            <div class="clearfix product-price-cover">


                                <div class="product-price primary-color float-left">
                                    <span>
                                        <span class="current-price text-brand">$</span>
                                        <span class="current-price text-brand" id="pprice" priceproduct>{{ $product->selling_price }}</span>
                                    </span>
                                    <span>
                                        <span class="save-price font-md color3 ml-15">20% Off</span>
                                        <span class="old-price font-md ml-15">${{ $product->discount_price == NULL ?  $product->selling_price : $product->discount_price}}</span>
                                    </span>
                                </div>



                            </div>
                            <div class="short-desc mb-30">
                                <p class="font-lg"> {{ $product->short_descp }}</p>
                            </div>






                            {{-- biến thể sản phẩm --}}
                            <div notivariant>

                            </div>

                            {{-- <div class="attr-detail attr-size mb-30">
                                    <strong class="mr-10 namevariant" style="width:100px;">chọn : </strong>
                                    <select class="form-control unicase-form-control valvariant" onchange="selectvari()" id="dsize">
                                        <option selected="" disabled="" value="">--Choose Size--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div> --}}



                            @for ($i=0; $i < count($arrvalue); $i++)
                                <div class="attr-detail attr-size mb-30">
                                <strong class="mr-10 namevariant" style="width:100px;">{{ $arrvalue[$i][0] }} : </strong>
                                <select class="form-control unicase-form-control valvariant" onchange="selectvari()" id="dsize">
                                    <option selected="" disabled="" value="">--Choose Size--</option>
                                    @for ($j=0; $j < count($arrvalue[$i][1]); $j++)
                                        <option value="{{ $arrvalue[$i][1][$j] }}">{{ $arrvalue[$i][1][$j] }}</option>
                                        @endfor
                                </select>
                        </div>
                        @endfor





                        <div class="detail-extralink mb-50">
                            <div class="detail-qty border radius">
                                <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                <input type="text" name="quantity" id="dqty" class="qty-val" value="1" min="1">
                                <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                            </div>
                            <div class="product-extra-link2">

                                <input type="hidden" id="dproduct_id" value="6">

                                <input type="hidden" id="vproduct_id" value="16">
                                <input type="hidden" id="idproduct" value="{{ $product->id }}">
                                <input type="hidden" id="idprode" value="{{ $product->id }}">

                                <button type="button" class="button button-add-to-cart" data-id="{{ $product->id }}"
                                    onclick="addToCart()">
                                    <i class="fi-rs-shopping-cart"></i> Add to cart
                                </button>


                                <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                    href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i
                                        class="fi-rs-shuffle"></i></a>
                            </div>
                        </div>

                        <h6> Sold By <a href="#"> <span class="text-danger"> Expart Fashion </span></a></h6>

                        <hr>

                        <div class="font-xs">
                            <ul class="mr-50 float-start">
                                <li class="mb-5">Brand: <span class="text-brand">Oppo</span></li>

                                <li class="mb-5">Category:<span class="text-brand"> Fashion</span></li>

                                <li>SubCategory: <span class="text-brand">Mans Top Ware</span></li>
                            </ul>

                            <ul class="float-start">
                                <li class="mb-5">Product Code: <a href="#">234234</a></li>

                                <li class="mb-5">Tags: <a href="#" rel="tag"> new product,top product,Color
                                        Block</a></li>

                                <li>Stock:<span class="in-stock text-brand ml-5">(200) Items In Stock</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Detail Info -->
                </div>
            </div>
            <div class="product-info">
                <div class="tab-style3">
                    <ul class="nav nav-tabs text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                href="#Description">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                href="#Additional-info">Additional info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Vendor-info-tab" data-bs-toggle="tab"
                                href="#Vendor-info">Vendor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews
                                (1)</a>
                        </li>
                    </ul>
                    <div class="tab-content shop_info_tab entry-main-content">
                        <div class="tab-pane fade show active" id="Description">
                            <div class="">

                                @php
                                echo $product->long_descp;
                                @endphp
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Additional-info">
                            <table class="font-md">
                                <tbody>
                                    <tr class="stand-up">
                                        <th>Stand Up</th>
                                        <td>
                                            <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                                        </td>
                                    </tr>
                                    <tr class="folded-wo-wheels">
                                        <th>Folded (w/o wheels)</th>
                                        <td>
                                            <p>32.5″L x 18.5″W x 16.5″H</p>
                                        </td>
                                    </tr>
                                    <tr class="folded-w-wheels">
                                        <th>Folded (w/ wheels)</th>
                                        <td>
                                            <p>32.5″L x 24″W x 18.5″H</p>
                                        </td>
                                    </tr>
                                    <tr class="door-pass-through">
                                        <th>Door Pass Through</th>
                                        <td>
                                            <p>24</p>
                                        </td>
                                    </tr>
                                    <tr class="frame">
                                        <th>Frame</th>
                                        <td>
                                            <p>Aluminum</p>
                                        </td>
                                    </tr>
                                    <tr class="weight-wo-wheels">
                                        <th>Weight (w/o wheels)</th>
                                        <td>
                                            <p>20 LBS</p>
                                        </td>
                                    </tr>
                                    <tr class="weight-capacity">
                                        <th>Weight Capacity</th>
                                        <td>
                                            <p>60 LBS</p>
                                        </td>
                                    </tr>
                                    <tr class="width">
                                        <th>Width</th>
                                        <td>
                                            <p>24″</p>
                                        </td>
                                    </tr>
                                    <tr class="handle-height-ground-to-handle">
                                        <th>Handle height (ground to handle)</th>
                                        <td>
                                            <p>37-45″</p>
                                        </td>
                                    </tr>
                                    <tr class="wheels">
                                        <th>Wheels</th>
                                        <td>
                                            <p>12″ air / wide track slick tread</p>
                                        </td>
                                    </tr>
                                    <tr class="seat-back-height">
                                        <th>Seat back height</th>
                                        <td>
                                            <p>21.5″</p>
                                        </td>
                                    </tr>
                                    <tr class="head-room-inside-canopy">
                                        <th>Head room (inside canopy)</th>
                                        <td>
                                            <p>25″</p>
                                        </td>
                                    </tr>
                                    <tr class="pa_color">
                                        <th>Color</th>
                                        <td>
                                            <p>Black, Blue, Red, White</p>
                                        </td>
                                    </tr>
                                    <tr class="pa_size">
                                        <th>Size</th>
                                        <td>
                                            <p>M, S</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="tab-pane fade" id="Vendor-info">
                            <div class="vendor-logo d-flex mb-30">
                                <img src="{{ asset('upload/vendor_images/202208060516logo0000.png')}}"
                                    alt="" />
                                <div class="vendor-name ml-15">
                                    <h6>
                                        <a href="vendor-details-2.html">Expart Fashion</a>
                                    </h6>

                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                            </div>

                            <ul class="contact-infor mb-50">
                                <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-location.svg')}}"
                                        alt="" /><strong>Address: </strong> <span>Abila Fashion Garments(PVT) Ltd.
                                        Plot - 127 Bscic 1/A Anayetenagor Fatullah</span></li>
                                <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-contact.svg')}}"
                                        alt="" /><strong>Contact Seller:</strong><span>01578522545</span></li>
                            </ul>


                            <p>Quality, Price , Delivery &amp; Service We are Introduce our company as X - Part
                                Fashion &amp; Clothing For more than 15 year we are engaged in Apparel manufacturing
                                and Trading business. X - Part Fashion &amp; Clothing has supplied all type of
                                Fashion wear</p>

                        </div>


                        <div class="tab-pane fade" id="Reviews">
                            <!--Comments-->
                            <div class="comments-area">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="mb-30">Customer questions & answers</h4>
                                        <div class="comment-list">




                                            <div class="single-comment justify-content-between d-flex mb-30">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center">
                                                        <img src="{{ asset('upload/user_images/2022082912100bfc3c5b20c439c4972383592e1c26bc.jpg')}}"
                                                            alt="" />
                                                        <a href="#" class="font-heading text-brand">kazi</a>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="font-xs text-muted"> 2 years ago
                                                                </span>
                                                            </div>
                                                            <div class="product-rate d-inline-block">

                                                                <div class="product-rating" style="width: 80%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10">So, I like them, and will likely order
                                                            again. My only complaint is that when I reach over my
                                                            head the shirt comes out of being tucked. A little
                                                            longer, like maybe 1&quot; Amazon (or 2&quot; to be
                                                            safe) and this would easily <a href="#"
                                                                class="reply">Reply</a></p>
                                                    </div>
                                                </div>
                                            </div>

















                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <h4 class="mb-30">Customer reviews</h4>
                                        <div class="d-flex mb-30">
                                            <div class="product-rate d-inline-block mr-15">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <h6>4.8 out of 5</h6>
                                        </div>
                                        <div class="progress">
                                            <span>5 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress">
                                            <span>4 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress">
                                            <span>3 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 45%"
                                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                        </div>
                                        <div class="progress">
                                            <span>2 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                        </div>
                                        <div class="progress mb-30">
                                            <span>1 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                        </div>
                                        <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                    </div>
                                </div>
                            </div>





                            <!--comment form-->
                            <div class="comment-form">
                                <h4 class="mb-15">Add a review</h4>




                                <div class="row">
                                    <div class="col-lg-8 col-md-12">
                                        <form class="form-contact comment_form"
                                            action="https://digi-poly.id.vn/store/review" method="post"
                                            id="commentForm">
                                            <input type="hidden" name="_token"
                                                value="UTRYxzsjdObWcfO5O1ab5cB4avMK1Eik0ZqnQvN8">

                                            <div class="row">

                                                <input type="hidden" name="product_id" value="6">

                                                <input type="hidden" name="hvendor_id" value="16">

                                                <table class="table" style=" width: 60%;">
                                                    <thead>
                                                        <tr>
                                                            <th class="cell-level">&nbsp;</th>
                                                            <th>1 star</th>
                                                            <th>2 star</th>
                                                            <th>3 star</th>
                                                            <th>4 star</th>
                                                            <th>5 star</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="cell-level">Quality</td>
                                                            <td><input type="radio" name="quality" class="radio-sm"
                                                                    value="1"></td>
                                                            <td><input type="radio" name="quality" class="radio-sm"
                                                                    value="2"></td>
                                                            <td><input type="radio" name="quality" class="radio-sm"
                                                                    value="3"></td>
                                                            <td><input type="radio" name="quality" class="radio-sm"
                                                                    value="4"></td>
                                                            <td><input type="radio" name="quality" class="radio-sm"
                                                                    value="5"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>






                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control w-100" name="comment"
                                                            id="comment" cols="30" rows="9"
                                                            placeholder="Write Comment"></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="button button-contactForm">Submit
                                                    Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mt-60">
                <div class="col-12">
                    <h2 class="section-title style-1 mb-30">Related products</h2>
                </div>
                <div class="col-12">
                    <div class="row related-products">


                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="https://digi-poly.id.vn/product/details/12/regular-fit-men-beige-cotton-blend-trousers"
                                            tabindex="0">
                                            <img class="default-img"
                                                src="{{ asset('upload/products/thambnail/1740390147168644.webp')}}"
                                                alt="" />

                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                            href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up"
                                            href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div>

                                    <div class="product-badges product-badges-position product-badges-mrg">




                                        <span class="hot"> 7 %</span>

                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="shop-product-right.html" tabindex="0">Regular Fit Men Beige Cotton
                                            Blend Trousers</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span> </span>
                                    </div>

                                    <div class="product-price">
                                        <span>$650</span>
                                        <span class="old-price">$700</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="https://digi-poly.id.vn/product/details/11/pack-of-2-solid-men-black,-blue-track"
                                            tabindex="0">
                                            <img class="default-img"
                                                src="{{ asset('upload/products/thambnail/1740390058801111.webp')}}"
                                                alt="" />

                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                            href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up"
                                            href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div>

                                    <div class="product-badges product-badges-position product-badges-mrg">




                                        <span class="hot"> 17 %</span>

                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="shop-product-right.html" tabindex="0">Pack of 2 Solid Men Black,
                                            Blue Track</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span> </span>
                                    </div>

                                    <div class="product-price">
                                        <span>$500</span>
                                        <span class="old-price">$600</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="https://digi-poly.id.vn/product/details/10/skinny-men-blue-jeans"
                                            tabindex="0">
                                            <img class="default-img"
                                                src="{{ asset('upload/products/thambnail/1740389985066584.webp')}}"
                                                alt="" />

                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                            href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up"
                                            href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div>

                                    <div class="product-badges product-badges-position product-badges-mrg">




                                        <span class="hot"> 15 %</span>

                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="shop-product-right.html" tabindex="0">Skinny Men Blue Jeans</a>
                                    </h2>
                                    <div class="rating-result" title="90%">
                                        <span> </span>
                                    </div>

                                    <div class="product-price">
                                        <span>$500</span>
                                        <span class="old-price">$590</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="https://digi-poly.id.vn/product/details/9/color-block-men-round-neck-pink-t-shirt"
                                            tabindex="0">
                                            <img class="default-img"
                                                src="{{ asset('upload/products/thambnail/1740389864437655.webp')}}"
                                                alt="" />

                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                class="fi-rs-search"></i></a>
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                            href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn small hover-up"
                                            href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    </div>

                                    <div class="product-badges product-badges-position product-badges-mrg">




                                        <span class="hot"> 32 %</span>

                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="shop-product-right.html" tabindex="0">Color Block Men Round Neck
                                            Pink T-Shirt</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span> </span>
                                    </div>

                                    <div class="product-price">
                                        <span>$400</span>
                                        <span class="old-price">$590</span>
                                    </div>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function addToCartDetails(button) {
        let product_id = button.getAttribute("data-id"); // Lấy ID từ button
        let quantity = document.getElementById("dqty").value;

        console.log("Product ID:", product_id);
        console.log("Quantity:", quantity);

        if (!product_id) {
            alert("Product ID is missing!");
            return;
        }
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        });
        jQuery.ajax({
            type: "POST",
            url: "/dcart/data/store/" + product_id, // Truyền ID vào URL
            data: {
                quantity: quantity
            },
            success: function(response) {
                console.log("Success:", response);
                alert(response.success);
            },
            error: function(error) {
                console.log("Error:", error);
            }
        });
    }
</script>

{{-- <script type="text/javascript">
    function selectvar() {
        alert("Bạn đã chọn kích thước: ");
    }
</script> --}}

@endsection