@extends('frontend.master_dashboard')
@section('main')
@section('title')

@endsection



<div class="page-header mt-30 mb-75">
    <div class="container">
        <div class="archive-header">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <h3 class="mb-15">
                        {{ $blog_category->blog_category_name }}
                    </h3>
                    <div class="breadcrumb">
                        <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                        <span></span>
                        {{ $blog_category->blog_category_name }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="page-content mb-50" style="transform: none;">
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
            <div class="col-lg-9">
                <div class="shop-product-fillter mb-50 pr-30">
                    <div class="totall-product">

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
                                    <span><i class="fi-rs-apps-sort"></i>Sort:</span>
                                </div>
                                <div class="sort-by-dropdown-wrap">
                                    <span>Featured <i class="fi-rs-angle-small-down"></i></span>
                                </div>
                            </div>
                            <div class="sort-by-dropdown">
                                <ul>
                                    <li><a class="active" href="#">Featured</a></li>
                                    <li><a href="#">Newest</a></li>
                                    <li><a href="#">Most comments</a></li>
                                    <li><a href="#">Release Date</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="loop-grid loop-list pr-30 mb-50">

                    <!-- Start post -->
                    @foreach($blogs as $bg)
                    <article class="wow fadeIn animated hover-up mb-30 animated animated" style="visibility: visible;">
                        <div class="post-thumb" style="background-image: url({{ $bg->post_image }})">
                            <div class="entry-meta">
                                <a class="entry-meta meta-2" href="blog-category-grid.html"><i
                                        class="fi-rs-play-alt"></i></a>
                            </div>
                        </div>
                        <div class="entry-content-2 pl-50">
                            <h3 class="post-title mb-20">
                                <a href="{{ route('blog.details', ['id'=>$bg->id, 'slug'=>$bg->post_slug]) }}">
                                    {{ $bg->post_title }}</a>
                            </h3>
                            <p class="post-exerpt mb-40">{{ $bg->post_short_description }}.</p>
                            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                <div>
                                    <span class="post-on">{{$bg->created_at}}</span>

                                </div>
                                <a href="{{ route('blog.details', ['id'=>$bg->id, 'slug'=>$bg->post_slug]) }}"
                                    class="text-brand font-heading font-weight-bold">Read more <i
                                        class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    <!-- end post -->



                </div>
                <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
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
            </div>
            <div class="col-lg-3 primary-sidebar sticky-sidebar"
                style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                <div class="theiaStickySidebar"
                    style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <div class="widget-area">
                        <div class="sidebar-widget-2 widget_search mb-50">
                            <div class="search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search…">
                                    <button type="submit"><i class="fi-rs-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget widget-category-2 mb-50">
                            <h5 class="section-title style-1 mb-30">Category</h5>
                            <ul>


                                <li>
                                    <a href="https://digi-poly.id.vn/post/category/4/baking-material"> <img
                                            src="{{ asset('frontend/assets/imgs/theme/icons/category-1.svg')}}"
                                            alt="">Baking material</a><span class="count">0</span>
                                </li>


                                <li>
                                    <a href="https://digi-poly.id.vn/post/category/3/fresh-fruit"> <img
                                            src="{{ asset('frontend/assets/imgs/theme/icons/category-1.svg')}}"
                                            alt="">Fresh Fruit</a><span class="count">0</span>
                                </li>


                                <li>
                                    <a href="https://digi-poly.id.vn/post/category/2/pet-foods"> <img
                                            src="{{ asset('frontend/assets/imgs/theme/icons/category-1.svg')}}"
                                            alt="">Pet Foods</a><span class="count">2</span>
                                </li>


                                <li>
                                    <a href="https://digi-poly.id.vn/post/category/1/clothing"> <img
                                            src="{{ asset('frontend/assets/imgs/theme/icons/category-1.svg')}}"
                                            alt="">Clothing</a><span class="count">1</span>
                                </li>
                            </ul>
                        </div>



                        <!-- Product sidebar Widget -->


                        <!--Tags-->

                        <div class="banner-img wow fadeIn mb-50 animated d-lg-block d-none"
                            style="visibility: hidden; animation-name: none;">
                            <img src="{{ asset('frontend/assets/imgs/banner/banner-11.png')}}" alt="">
                            <div class="banner-text">
                                <span>Oganic</span>
                                <h4>
                                    Save 17% <br>
                                    on <span class="text-brand">Oganic</span><br>
                                    Juice
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








@endsection