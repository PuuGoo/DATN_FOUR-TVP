<section class="section-padding pb-5">
    <div class="container">
        <div class="section-title wow animate__animated animate__fadeIn">
            <h3 class=""> Featured Products </h3>

        </div>
        <div class="row">
            <div class="col-lg-3 d-none d-lg-flex wow animate__animated animate__fadeIn">
                <div class="banner-img style-2">
                    <div class="banner-text">
                        <h2 class="mb-100">Bring nature into your home</h2>
                        <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i
                                class="fi-rs-arrow-small-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 wow animate__animated animate__fadeIn" data-wow-delay=".4s">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                        <div class="carausel-4-columns-cover arrow-center position-relative">
                            <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                id="carausel-4-columns-arrows"></div>
                            <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">

                                <!-- start Product -->
                                @foreach (\App\Models\Product::whereIn('category_id', [8,
                                9])->inRandomOrder()->limit(10)->get() as $pd)
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a
                                                href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
                                                <img class="default-img" src="{{ $pd->product_thumnail }}" alt="" />

                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Add To Wishlist" class="action-btn" id="{{ $pd->id }}" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn"  id="{{ $pd->id }}" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal" id="{{ $pd->id }}" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                        </div>



                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                            @php
                                            $discountPercent = round((($pd->selling_price - $pd->discount_price) /
                                            $pd->selling_price) * 100);
                                            @endphp
                                            <span class="hot">-{{ $discountPercent }} %</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            @php
                                            $category = \App\Models\Category::where('id', $pd->category_id)->first();
                                            @endphp

                                            <a
                                                href="{{ route('product.category', ['id' => $category->id, 'slug' => $category->category_slug]) }}">
                                                {{ $category->category_name }}
                                            </a>

                                        </div>
                                        <h2><a
                                                href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">{{ $pd->product_name }}</a>
                                        </h2>


                                        <div class="product-rate d-inline-block">

                                        </div>
                                        <div class="product-price mt-10">
                                            @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                            <span>${{ number_format($pd->discount_price, 0, ',', '.') }}</span>
                                            <span
                                                class="old-price">${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                            @else
                                            <span>${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                            @endif
                                        </div>

                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">


                                                <div class="progress-bar" role="progressbar" style="width: 50%"
                                                    aria-valuemin="0" aria-valuemax="100"></div>


                                            </div>

                                        </div>
                                        <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>

                                @endforeach
                                <!-- end product -->
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a
                                                href="https://digi-poly.id.vn/product/details/27/apple-iphone-13-(pink,-128-gb">
                                                <img class="default-img"
                                                    src="{{ asset('upload/products/thambnail/1740391924552351.webp')}}"
                                                    alt="" />

                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Add To Wishlist" class="action-btn" id="27"
                                                onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                            <a aria-label="Compare" class="action-btn" id="27"
                                                onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal" id="27"
                                                onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                        </div>



                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot"> 17 %</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Mobiles</a>
                                        </div>
                                        <h2><a
                                                href="https://digi-poly.id.vn/product/details/27/apple-iphone-13-(pink,-128-gb">APPLE
                                                iPhone 13 (Pink, 128 GB)</a></h2>


                                        <div class="product-rate d-inline-block">

                                        </div>

                                        <div class="product-price mt-10">
                                            <span>$1000 </span>
                                            <span class="old-price">$1200</span>
                                        </div>

                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">


                                                <div class="progress-bar" role="progressbar" style="width: 50%"
                                                    aria-valuemin="0" aria-valuemax="100"></div>


                                            </div>

                                        </div>
                                        <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!--End product Wrap-->
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="https://digi-poly.id.vn/product/details/26/samsung-galaxy-f13">
                                                <img class="default-img"
                                                    src="{{ asset('upload/products/thambnail/1740391863075855.webp')}}"
                                                    alt="" />

                                            </a>
                                        </div>
                                        <div class="product-action-1">

                                            <a aria-label="Add To Wishlist" class="action-btn" id="26"
                                                onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                            <a aria-label="Compare" class="action-btn" id="26"
                                                onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>

                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal" id="26"
                                                onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
                                        </div>



                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="shop-grid-right.html">Mobiles</a>
                                        </div>
                                        <h2><a href="https://digi-poly.id.vn/product/details/26/samsung-galaxy-f13">SAMSUNG
                                                Galaxy F13</a></h2>


                                        <div class="product-rate d-inline-block">

                                        </div>

                                        <div class="product-price mt-10">
                                            <span>$500 </span>

                                        </div>

                                        <div class="sold mt-15 mb-15">
                                            <div class="progress mb-5">


                                                <div class="progress-bar" role="progressbar" style="width: 50%"
                                                    aria-valuemin="0" aria-valuemax="100"></div>


                                            </div>

                                        </div>
                                        <a href="shop-cart.html" class="btn w-100 hover-up"><i
                                                class="fi-rs-shopping-cart mr-5"></i>Add To Cart</a>
                                    </div>
                                </div>
                                <!-- !--End product Wrap-->



                            </div>
                        </div>
                    </div>
                    <!--End tab-pane-->


                </div>
                <!--End tab-content-->
            </div>
            <!--End Col-lg-9-->
        </div>
    </div>
</section>