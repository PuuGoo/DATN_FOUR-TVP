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
                                    <img src="{{$product->product_thumnail}} " alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{$product->product_thumnail}} " alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{$product->product_thumnail}} " alt="product image" />
                                </figure>
                                <figure class="border-radius-10">
                                    <img src="{{$product->product_thumnail}} " alt="product image" />
                                </figure>
                            </div>
                            <!-- THUMBNAILS -->
                            <div class="slider-nav-thumbnails">
                                <div><img src="{{$product->product_thumnail}}" alt="product image" /></div>
                                <div><img src="{{$product->product_thumnail}}" alt="product image" /></div>
                                <div><img src="{{$product->product_thumnail}}" alt="product image" /></div>
                                <div><img src="{{$product->product_thumnail}}" alt="product image" /></div>

                            </div>
                        </div>
                        <!-- End Gallery -->
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="detail-info pr-30 pl-30">
                            <span class="stock-status in-stock">In Stock </span>



                            <h2 class="title-detail" id="dpname">{{ $product->product_name }} </h2>
                            <div class="product-detail-rating">
                                <div class="product-rate-cover text-end">



                                    <div class="product-rate d-inline-block">

                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>



                                    <span class="font-small ml-5 text-muted"> (1 reviews)</span>
                                </div>
                            </div>
                            <div class="clearfix product-price-cover">


                                @php
                                $discountPercentage = (($product->selling_price - $product->discount_price) /
                                $product->selling_price) * 100;
                                @endphp

                                <div class="product-price primary-color float-left">
                                    <span class="current-price text-brand">
                                        ${{ number_format($product->discount_price, 2) }}
                                    </span>
                                    <span>
                                        <span
                                            class="save-price font-md color3 ml-15">{{ number_format($discountPercentage, 0) }}%
                                            Off</span>
                                        <span class="old-price font-md ml-15">
                                            ${{ number_format($product->selling_price, 2) }}
                                        </span>
                                    </span>
                                </div>




                            </div>
                            <div class="short-desc mb-30">
                                <p class="font-lg">{{ $product->long_descp }}</p>
                            </div>


                            <div class="attr-detail attr-size mb-30">
                                <strong class="mr-10" style="width:50px;">Size : </strong>
                                <select class="form-control unicase-form-control" id="dsize">
                                    <option selected="" disabled="">--Choose Size--</option>
                                    <option value="Small">Small</option>
                                    <option value="Midium">Midium</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>





                            <div class="attr-detail attr-size mb-30">
                                <strong class="mr-10" style="width:50px;">Color : </strong>
                                <select class="form-control unicase-form-control" id="dcolor">
                                    <option selected="" disabled="">--Choose Color--</option>
                                    <option value="Red">Red</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Black">Black</option>
                                </select>
                            </div>





                            <div class="detail-extralink mb-50">
                                <div class="detail-qty border radius">
                                    <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                    <input type="text" name="quantity" id="dqty" class="qty-val" value="1" min="1">
                                    <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                </div>
                                <div class="product-extra-link2">

                                    <input type="hidden" id="dproduct_id" value="6">

                                    <input type="hidden" id="vproduct_id" value="16">

                                    <button type="submit" class="button button-add-to-cart"
                                        onclick="addToCartDetails()"><i class="fi-rs-shopping-cart"></i>Add to
                                        cart</button>


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
                                    <p>
                                    <p
                                        style="box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: Lato, sans-serif; vertical-align: baseline; color: #7e7e7e; background-color: #ffffff;">
                                        Uninhibited carnally hired played in whimpered dear gorilla koala depending and
                                        much yikes off far quetzal goodness and from for grimaced goodness unaccountably
                                        and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some
                                        and dear furiously this apart.</p>
                                    <p
                                        style="box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: Lato, sans-serif; vertical-align: baseline; color: #7e7e7e; background-color: #ffffff;">
                                        Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello
                                        on spoon-fed that alas rethought much decently richly and wow against the
                                        frequent fluidly at formidable acceptably flapped besides and much circa far
                                        over the bucolically hey precarious goldfinch mastodon goodness gnashed a
                                        jellyfish and one however because.</p>
                                    <ul class="product-more-infor mt-30"
                                        style="box-sizing: border-box; padding: 0px 0px 0px 14px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: Lato, sans-serif; vertical-align: baseline; list-style: none; color: #7e7e7e; background-color: #ffffff; margin: 30px !important 0px 0px 0px;">
                                        <li
                                            style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;">
                                            <span
                                                style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; -webkit-box-flex: 0; flex: 0 0 165px; display: inline-block;">Type
                                                Of Packing</span>Bottle
                                        </li>
                                        <li
                                            style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;">
                                            <span
                                                style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; -webkit-box-flex: 0; flex: 0 0 165px; display: inline-block;">Color</span>Green,
                                            Pink, Powder Blue, Purple
                                        </li>
                                        <li
                                            style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;">
                                            <span
                                                style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; -webkit-box-flex: 0; flex: 0 0 165px; display: inline-block;">Quantity
                                                Per Case</span>100ml
                                        </li>
                                        <li
                                            style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;">
                                            <span
                                                style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; -webkit-box-flex: 0; flex: 0 0 165px; display: inline-block;">Ethyl
                                                Alcohol</span>70%
                                        </li>
                                        <li
                                            style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;">
                                            <span
                                                style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; -webkit-box-flex: 0; flex: 0 0 165px; display: inline-block;">Piece
                                                In One</span>Carton
                                        </li>
                                    </ul>
                                    <hr class="wp-block-separator is-style-dots"
                                        style="box-sizing: content-box; height: 1px; overflow: visible; margin: 1rem 0px; color: #7e7e7e; border-top: 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; opacity: 0.25; font-family: Lato, sans-serif; font-size: 14px;" />
                                    <p
                                        style="box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: Lato, sans-serif; vertical-align: baseline; color: #7e7e7e; background-color: #ffffff;">
                                        Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far
                                        meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted
                                        flirtatiously as beaver beheld above forward energetic across this jeepers
                                        beneficently cockily less a the raucously that magic upheld far so the this
                                        where crud then below after jeez enchanting drunkenly more much wow callously
                                        irrespective limpet.</p>
                                    <h4 class="mt-30"
                                        style="box-sizing: border-box; line-height: 1.2; font-size: 24px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; vertical-align: baseline; transition: all 0.3s ease 0s; color: #253d4e; background-color: #ffffff; margin: 30px !important 0px 0px 0px;">
                                        Packaging &amp; Delivery</h4>
                                    <hr class="wp-block-separator is-style-wide"
                                        style="box-sizing: content-box; height: 1px; overflow: visible; margin: 1rem 0px; color: #7e7e7e; border-top: 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; opacity: 0.25; font-family: Lato, sans-serif; font-size: 14px;" />
                                    <p
                                        style="box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: Lato, sans-serif; vertical-align: baseline; color: #7e7e7e; background-color: #ffffff;">
                                        Less lion goodness that euphemistically robin expeditiously bluebird smugly
                                        scratched far while thus cackled sheepishly rigid after due one assenting
                                        regarding censorious while occasional or this more crane went more as this less
                                        much amid overhung anathematic because much held one exuberantly sheep goodness
                                        so where rat wry well concomitantly.</p>
                                    <p
                                        style="box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1rem; line-height: 24px; font-family: Lato, sans-serif; vertical-align: baseline; color: #7e7e7e; background-color: #ffffff;">
                                        Scallop or far crud plain remarkably far by thus far iguana lewd precociously
                                        and and less rattlesnake contrary caustic wow this near alas and next and pled
                                        the yikes articulate about as less cackled dalmatian in much less well jeering
                                        for the thanks blindly sentimental whimpered less across objectively fanciful
                                        grimaced wildly some wow and rose jeepers outgrew lugubrious luridly
                                        irrationally attractively dachshund.</p>
                                    <h4 class="mt-30"
                                        style="box-sizing: border-box; line-height: 1.2; font-size: 24px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; vertical-align: baseline; transition: all 0.3s ease 0s; color: #253d4e; background-color: #ffffff; margin: 30px !important 0px 0px 0px;">
                                        Suggested Use</h4>
                                    <ul class="product-more-infor mt-30"
                                        style="box-sizing: border-box; padding: 0px 0px 0px 14px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: Lato, sans-serif; vertical-align: baseline; list-style: none; color: #7e7e7e; background-color: #ffffff; margin: 30px !important 0px 0px 0px;">
                                        <li
                                            style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;">
                                            Refrigeration not necessary.</li>
                                        <li
                                            style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;">
                                            Stir before serving</li>
                                    </ul>
                                    <h4 class="mt-30"
                                        style="box-sizing: border-box; line-height: 1.2; font-size: 24px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; vertical-align: baseline; transition: all 0.3s ease 0s; color: #253d4e; background-color: #ffffff; margin: 30px !important 0px 0px 0px;">
                                        Other Ingredients</h4>
                                    <ul class="product-more-infor mt-30"
                                        style="box-sizing: border-box; padding: 0px 0px 0px 14px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: Lato, sans-serif; vertical-align: baseline; list-style: none; color: #7e7e7e; background-color: #ffffff; margin: 30px !important 0px 0px 0px;">
                                        <li
                                            style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;">
                                            Organic raw pecans, organic raw cashews.</li>
                                        <li
                                            style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;">
                                            This butter was produced using a LTG (Low Temperature Grinding) process</li>
                                        <li
                                            style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; display: flex; position: relative;">
                                            Made in machinery that processes tree nuts but does not process peanuts,
                                            gluten, dairy or soy</li>
                                    </ul>
                                    </p>

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
                                    <img src="https://digi-poly.id.vn/upload/vendor_images/202208060516logo0000.png"
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
                                    <li><img src="https://digi-poly.id.vn/frontend/assets/imgs/theme/icons/icon-location.svg"
                                            alt="" /><strong>Address: </strong> <span>Abila Fashion Garments(PVT) Ltd.
                                            Plot - 127 Bscic 1/A Anayetenagor Fatullah</span></li>
                                    <li><img src="https://digi-poly.id.vn/frontend/assets/imgs/theme/icons/icon-contact.svg"
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
                                                            <img src="https://digi-poly.id.vn/upload/user_images/2022082912100bfc3c5b20c439c4972383592e1c26bc.jpg"
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

                            <!-- start product -->
                            @foreach ($products as $pd)

                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap hover-up">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="https://digi-poly.id.vn/product/details/12/regular-fit-men-beige-cotton-blend-trousers"
                                                tabindex="0">
                                                <img class="default-img" src="{{ $pd->product_thumnail }}" alt="" />

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


                                            @php
                                            $discountPercentage = 0;
                                            if ($pd->selling_price > 0) {
                                            $discountPercentage = (($pd->selling_price - $pd->discount_price) /
                                            $pd->selling_price) * 100;
                                            }
                                            @endphp

                                            <span class="hot"> -{{ number_format($discountPercentage, 0) }}% </span>

                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <h2><a href="{{route('product.detail', ['id'=>$pd->id,'slug'=>$pd->product_slug])}}"
                                                tabindex="0">{{ $pd->product_name }}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span> </span>
                                        </div>

                                        <div class="product-price">
                                            <div class="product-price">
                                                <span>${{ number_format($pd->discount_price, 2) }}</span>
                                                <span
                                                    class="old-price">${{ number_format($pd->selling_price, 2) }}</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <!-- end product -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection