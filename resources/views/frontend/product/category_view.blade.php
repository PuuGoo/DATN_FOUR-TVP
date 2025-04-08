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
                    <h5 class="mb-15"> <span></span> {{ $category_name }}
                    </h5>
                    <div class="breadcrumb">
                        <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                        <span></span> {{ $category_name }}
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
                    <p>We found <strong class="text-brand">{{ $product_category_number }}</strong> items for you!</p>
                </div>
                <div class="sort-by-product-area">
                    <div class="sort-by-cover mr-10">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps"></i>Show:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap">
                                <span id="selectedLimit">
                                    {{ request('limit', 'All') }} <i class="fi-rs-angle-small-down"></i>
                                </span>
                                <ul id="limitDropdown" class="hidden">
                                    <li><a href="{{ request()->fullUrlWithQuery(['limit' => 1]) }}">1</a></li>
                                    <li><a href="{{ request()->fullUrlWithQuery(['limit' => 20]) }}">20</a></li>
                                    <li><a href="{{ request()->fullUrlWithQuery(['limit' => 50]) }}">50</a></li>
                                    <li><a href="{{ request()->fullUrlWithQuery(['limit' => 'all']) }}">All</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Start sort by count -->
                        <div class="sort-by-dropdown">
                            <ul>
                                <li><a href="javascript:void(0);" onclick="updateProductLimit(1)">1 </a></li>
                                <li><a href="javascript:void(0);" onclick="updateProductLimit(20)">20 </a></li>
                                <li><a href="javascript:void(0);" onclick="updateProductLimit(50)">50 </a></li>
                                <li><a href="javascript:void(0);" onclick="updateProductLimit('all')">ALL</a></li>
                            </ul>
                        </div>
                        <!-- End sort by count -->


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
                                <li>
                                    <a class="{{ request('sort') == 'desc' ? 'active' : '' }}"
                                        href="{{ request()->fullUrlWithQuery(['sort' => 'desc']) }}">
                                        Price: High to Low
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request('sort') == 'asc' ? 'active' : '' }}"
                                        href="{{ request()->fullUrlWithQuery(['sort' => 'asc']) }}">
                                        Price: Low to High
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row product-grid">

                @foreach ($product_category as $pd)

                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="https://digi-poly.id.vn/product/details/18/portronics-por-1196-modesk-plus">
                                    <img class="default-img" src="{{ $pd->product_thumnail }}" alt="" />

                                </a>
                            </div>
                            <div class="product-action-1">
                                <a aria-label="Add To Wishlist" class="action-btn" id="18"
                                    onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>

                                <a aria-label="Compare" class="action-btn" id="18" onclick="addToCompare(this.id)"><i
                                        class="fi-rs-shuffle"></i></a>

                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal" id="18" onclick="productView(this.id)"><i
                                        class="fi-rs-eye"></i></a>
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
                                <a
                                    href="{{ route('product.category', ['id' => $pd->category_id, 'slug' => \App\Models\Category::where('id', $pd->category_id)->value('category_slug') ?? 'no-slug']) }}">
                                    {{ \App\Models\Category::where('id', $pd->category_id)->value('category_name') ?? 'N/A' }}
                                </a>


                            </div>
                            <h2><a href="https://digi-poly.id.vn/product/details/18/portronics-por-1196-modesk-plus">
                                    {{ $pd->product_name}}</a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating" style="width: 90%"></div>
                                </div>
                                <span class="font-small ml-5 text-muted"> (4.0)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By<a href="vendor-details-1.html">
                                        {{ \App\Models\Brand::where('id', $pd->brand_id)->value('brand_name') ?? 'N/A' }}
                                    </a>
                                </span>




                            </div>
                            <div class="product-card-bottom">

                                <div class="product-price">
                                    @if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
                                    <span
                                        style="font-size:12px;">${{ number_format($pd->discount_price, 0, ',', '.') }}</span>
                                    <span class="old-price"
                                        style="font-size:12px;">${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                    @else
                                    <span
                                        style="font-size:12px;">${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
                                    @endif
                                </div>




                                <div class="add-cart">
                                    <a class="add"
                                        href="https://digi-poly.id.vn/product/details/18/portronics-por-1196-modesk-plus"><i
                                            class="fi-rs-shopping-cart mr-5"></i>Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end product card-->
                @endforeach




            </div>
            <!--product grid-->
            <div class="pagination-area mt-20 mb-20">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        @if ($total_pages > 1)
                        {{-- Nút Prev --}}
                        @if ($product_category->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link"><i class="fi-rs-arrow-small-left"></i></span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $product_category->previousPageUrl() }}">
                                <i class="fi-rs-arrow-small-left"></i>
                            </a>
                        </li>
                        @endif

                        {{-- Hiển thị số trang --}}
                        @for ($i = 1; $i <= $total_pages; $i++) @if ($i==$product_category->currentPage())
                            <li class="page-item active">
                                <span class="page-link">{{ $i }}</span>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $product_category->url($i) }}">{{ $i }}</a>
                            </li>
                            @endif
                            @endfor

                            {{-- Nút Next --}}
                            @if ($product_category->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $product_category->nextPageUrl() }}">
                                    <i class="fi-rs-arrow-small-right"></i>
                                </a>
                            </li>
                            @else
                            <li class="page-item disabled">
                                <span class="page-link"><i class="fi-rs-arrow-small-right"></i></span>
                            </li>
                            @endif
                            @else
                            {{-- Nếu chỉ hiển thị 1 sản phẩm, chỉ hiện số trang 1 --}}
                            <li class="page-item active">
                                <span class="page-link">1</span>
                            </li>
                            @endif
                    </ul>
                </nav>
            </div>










            <!--End Deals-->


        </div>
        <div class="col-lg-1-5 primary-sidebar sticky-sidebar">
            <div class="sidebar-widget widget-category-2 mb-30">
                <h5 class="section-title style-1 mb-30">Category</h5>
                <ul>



                    @foreach ($categories as $ct)

                    <li>
                        <a href="{{ route('product.category', ['id' => $ct->id, 'slug' => $ct->category_slug]) }}"> <img
                                src="{{ $ct->category_image }}" alt="" />{{ $ct->category_name}}</a><span
                            class="count">{{ \App\Models\Product::where('category_id', $ct->id)->count() }}</span>
                    </li>

                    @endforeach






                </ul>
            </div>
            <!-- Fillter By Price -->

            <!-- Product sidebar Widget -->
            <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                <h5 class="section-title style-1 mb-30">New products</h5>

                <div class="single-post clearfix">
                    <div class="image">
                        <img src="{{ asset('upload/products/thambnail/1740391997743770.webp')}}" alt="#" />
                    </div>
                    <div class="content pt-10">
                        <p><a href="https://digi-poly.id.vn/product/details/28/apple-iphone-13-(starlight,-128-gb)">APPLE
                                iPhone 13 (Starlight, 128 GB)</a></p>

                        <p class="price mb-0 mt-5">$1000</p>

                        <div class="product-rate">
                            <div class="product-rating" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="{{ asset('upload/products/thambnail/1740391924552351.webp')}}" alt="#" />
                    </div>
                    <div class="content pt-10">
                        <p><a href="https://digi-poly.id.vn/product/details/27/apple-iphone-13-(pink,-128-gb">APPLE
                                iPhone 13 Pink, 128 GB</a></p>

                        <p class="price mb-0 mt-5">$1000</p>

                        <div class="product-rate">
                            <div class="product-rating" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="{{ asset('upload/products/thambnail/1740391863075855.webp')}}" alt="#" />
                    </div>
                    <div class="content pt-10">
                        <p><a href="https://digi-poly.id.vn/product/details/26/samsung-galaxy-f13">SAMSUNG Galaxy
                                F13</a></p>

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


<script>
function updateProductLimit(limit) {
    let url = new URL(window.location.href);
    url.searchParams.set('limit', limit); // Cập nhật tham số limit trên URL
    window.location.href = url.toString(); // Load lại trang với tham số mới
}
</script>





@endsection