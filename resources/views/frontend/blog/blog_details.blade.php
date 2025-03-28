@extends('frontend.master_dashboard')
@section('main')

@section('title')

@endsection




<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> <a href="shop-grid-right.html">
                Baking material

            </a>
            <span></span> {{ $blogpost->post_title }}
        </div>
    </div>
</div>
<div class="page-content mb-50" style="transform: none;">
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
            <div class="col-xl-11 col-lg-12 m-auto" style="transform: none;">
                <div class="row" style="transform: none;">
                    <div class="col-lg-9">
                        <div class="single-page pt-50 pr-30">
                            <div class="single-header style-2">
                                <div class="row">
                                    <div class="col-xl-10 col-lg-12 m-auto">

                                        <h2 class="mb-10">{{ $blogpost->post_title }}</h2>
                                        <div class="single-header-meta">
                                            <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                                <a class="author-avatar" href="#">
                                                    <img class="img-circle" src="assets/imgs/blog/author-1.png" alt="">
                                                </a>
                                                <span class="post-by">By <a href="#">Admin</a></span>
                                                <span class="post-on has-dot">2 years ago</span>
                                                <span class="time-reading has-dot">8 mins read</span>
                                            </div>
                                            <div class="social-icons single-share">
                                                <ul class="text-grey-5 d-inline-block">
                                                    <li class="mr-5">
                                                        <a href="#"><img
                                                                src="https://digi-poly.id.vn/frontend/assets/imgs/theme/icons/icon-bookmark.svg"
                                                                alt=""></a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <figure class="single-thumbnail">
                                <img src="{{ $blogpost->post_image }}" alt="" style="width: 500px; height: 400px;">
                            </figure>
                            <div class="single-content">
                                <div class="row">
                                    <div class="col-xl-10 col-lg-12 m-auto">
                                        <p class="single-excerpt"> </p>
                                        <p class="single-excerpt"
                                            style="box-sizing: border-box; margin: 0px 0px 1.2em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 24px; line-height: 32px; font-family: Lato, sans-serif; vertical-align: baseline; color: #253d4e; background-color: #ffffff;">
                                            Helping everyone live happier, healthier lives at home through their
                                            kitchen. Kitchn is a daily food magazine on the Web celebrating life in the
                                            kitchen through home cooking and kitchen intelligence.</p>
                                        <p
                                            style="box-sizing: border-box; margin: 0px 0px 1.2em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: Lato, sans-serif; vertical-align: baseline; color: #253d4e; background-color: #ffffff;">
                                            We've reviewed and ranked all of the best smartwatches on the market right
                                            now, and we've made a definitive list of the top 10 devices you can buy
                                            today. One of the 10 picks below may just be your perfect next smartwatch.
                                        </p>
                                        <p
                                            style="box-sizing: border-box; margin: 0px 0px 1.2em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: Lato, sans-serif; vertical-align: baseline; color: #253d4e; background-color: #ffffff;">
                                            Those top-end wearables span from the Apple Watch to Fitbits, Garmin watches
                                            to Tizen-sporting Samsung watches. There's also Wear OS which is Google's
                                            own wearable operating system in the vein of Apple's watchOS - you’ll see it
                                            show up in a lot of these devices.</p>
                                        <h5 class="mt-50"
                                            style="box-sizing: border-box; line-height: 24px; font-size: 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-family: Quicksand, sans-serif; vertical-align: baseline; color: #253d4e; background-color: #ffffff; margin: 50px !important 0px 24px 0px;">
                                            Lorem ipsum dolor sit amet cons</h5>
                                        <p
                                            style="box-sizing: border-box; margin: 0px 0px 1.2em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: Lato, sans-serif; vertical-align: baseline; color: #253d4e; background-color: #ffffff;">
                                            Throughout our review process, we look at the design, features, battery
                                            life, spec, price and more for each smartwatch, rank it against the
                                            competition and enter it into the list you'll find below.</p>
                                        <p><img class="mb-30"
                                                style="box-sizing: border-box; border: 0px; vertical-align: baseline; padding: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: inherit; font-family: Lato, sans-serif; max-width: 100%; transition: all 0.3s ease 0s; color: #253d4e; background-color: #ffffff; margin: 0px 0px 30px !important 0px;"
                                                src="file:///C:/Users/AmjadeT/Desktop/Excise_File/Frontend%20Theme/assets/imgs/blog/blog-21.png"
                                                alt=""></p>
                                        <p
                                            style="box-sizing: border-box; margin: 0px 0px 1.2em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: Lato, sans-serif; vertical-align: baseline; color: #253d4e; background-color: #ffffff;">
                                            Tortor, lobortis semper viverra ac, molestie tortor laoreet amet euismod et
                                            diam quis aliquam consequat porttitor integer a nisl, in faucibus nunc et
                                            aenean turpis dui dignissim nec scelerisque ullamcorper eu neque, augue quam
                                            quis lacus pretium eros est amet turpis nunc in turpis massa et eget
                                            facilisis ante molestie penatibus dolor volutpat, porta pellentesque
                                            scelerisque at ornare dui tincidunt cras feugiat tempor lectus</p>
                                        <blockquote
                                            style="box-sizing: border-box; margin: 30px auto; padding: 40px 60px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 24px; line-height: inherit; font-family: Lato, sans-serif; vertical-align: baseline; quotes: none; background-color: #f4f6fa; border-radius: 15px; max-width: 80%; color: #253d4e;">
                                            <p
                                                style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 32px; font-family: inherit; vertical-align: baseline; color: #7e7e7e;">
                                                Integer eu faucibus&nbsp;<a
                                                    style="box-sizing: border-box; background-color: transparent; color: #3bb77e; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;"
                                                    href="file:///C:/Users/AmjadeT/Desktop/Excise_File/Frontend%20Theme/blog-post-right.html#">dolor</a><span
                                                    style="box-sizing: border-box; font: inherit; position: relative; vertical-align: baseline; top: -0.5em; margin: 0px; padding: 0px; border: 0px;"><a
                                                        style="box-sizing: border-box; background-color: transparent; color: #3bb77e; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; transition: all 0.3s ease 0s; cursor: pointer;"
                                                        href="file:///C:/Users/AmjadeT/Desktop/Excise_File/Frontend%20Theme/blog-post-right.html#">[5]</a></span>.
                                                Ut venenatis tincidunt diam elementum imperdiet. Etiam accumsan semper
                                                nisl eu congue. Sed aliquam magna erat, ac eleifend lacus rhoncus in.
                                            </p>
                                        </blockquote>
                                        <p
                                            style="box-sizing: border-box; margin: 0px 0px 1.2em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 17px; line-height: 24px; font-family: Lato, sans-serif; vertical-align: baseline; color: #253d4e; background-color: #ffffff;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet id enim,
                                            libero sit. Est donec lobortis cursus amet, cras elementum libero convallis
                                            feugiat. Nulla faucibus facilisi tincidunt a arcu, sem donec sed sed.
                                            Tincidunt morbi scelerisque lectus non. At leo mauris, vel augue. Facilisi
                                            diam consequat amet, commodo lorem nisl, odio malesuada cras. Tempus lectus
                                            sed libero viverra ut.</p>
                                        <p></p>
                                        <!--Entry bottom-->
                                        <div class="entry-bottom mt-50 mb-30">
                                            <div class="tags w-50 w-sm-100">
                                                <a href="blog-category-big.html" rel="tag"
                                                    class="hover-up btn btn-sm btn-rounded mr-10">deer</a>
                                                <a href="blog-category-big.html" rel="tag"
                                                    class="hover-up btn btn-sm btn-rounded mr-10">nature</a>
                                                <a href="blog-category-big.html" rel="tag"
                                                    class="hover-up btn btn-sm btn-rounded mr-10">conserve</a>
                                            </div>
                                            <div class="social-icons single-share">
                                                <ul class="text-grey-5 d-inline-block">
                                                    <li><strong class="mr-10">Share this:</strong></li>
                                                    <li class="social-facebook">
                                                        <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg"
                                                                alt=""></a>
                                                    </li>
                                                    <li class="social-twitter">
                                                        <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg"
                                                                alt=""></a>
                                                    </li>
                                                    <li class="social-instagram">
                                                        <a href="#"><img
                                                                src="assets/imgs/theme/icons/icon-instagram.svg"
                                                                alt=""></a>
                                                    </li>
                                                    <li class="social-linkedin">
                                                        <a href="#"><img
                                                                src="assets/imgs/theme/icons/icon-pinterest.svg"
                                                                alt=""></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Author box-->
                                        <div class="author-bio p-30 mt-50 border-radius-15 bg-white">
                                            <div class="author-image mb-30">
                                                <a href="author.html"><img src="assets/imgs/blog/author-1.png" alt=""
                                                        class="avatar"></a>
                                                <div class="author-infor">
                                                    <h5 class="mb-5">Barbara Cartland</h5>
                                                    <p class="mb-0 text-muted font-xs">
                                                        <span class="mr-10">306 posts</span>
                                                        <span class="has-dot">Since 2012</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="author-des">
                                                <p>Hi there, I am a veteran food blogger sharing my daily all kinds of
                                                    healthy and fresh recipes. I find inspiration in nature, on the
                                                    streets and almost everywhere. Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit. Amet id enim, libero sit. Est donec
                                                    lobortis cursus amet, cras elementum libero</p>
                                            </div>
                                        </div>
                                        <!--Comment form-->
                                        <div class="comment-form">
                                            <h3 class="mb-15">Leave a Comment</h3>
                                            <div class="product-rate d-inline-block mb-30"></div>
                                            <div class="row">
                                                <div class="col-lg-9 col-md-12">
                                                    <form class="form-contact comment_form mb-50" action="#"
                                                        id="commentForm">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control w-100" name="comment"
                                                                        id="comment" cols="30" rows="9"
                                                                        placeholder="Write Comment"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="name" id="name"
                                                                        type="text" placeholder="Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="email" id="email"
                                                                        type="email" placeholder="Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="website"
                                                                        id="website" type="text" placeholder="Website">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="button button-contactForm">Post
                                                                Comment</button>
                                                        </div>
                                                    </form>
                                                    <div class="comments-area">
                                                        <h3 class="mb-30">Comments</h3>
                                                        <div class="comment-list">
                                                            <div
                                                                class="single-comment justify-content-between d-flex mb-30">
                                                                <div class="user justify-content-between d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="assets/imgs/blog/author-2.png" alt="">
                                                                        <a href="#"
                                                                            class="font-heading text-brand">Sienna</a>
                                                                    </div>
                                                                    <div class="desc">
                                                                        <div
                                                                            class="d-flex justify-content-between mb-10">
                                                                            <div class="d-flex align-items-center">
                                                                                <span
                                                                                    class="font-xs text-muted">December
                                                                                    4, 2022 at 3:12 pm </span>
                                                                            </div>
                                                                            <div class="product-rate d-inline-block">
                                                                                <div class="product-rating"
                                                                                    style="width: 80%"></div>
                                                                            </div>
                                                                        </div>
                                                                        <p class="mb-10">Lorem ipsum dolor sit amet,
                                                                            consectetur adipisicing elit. Delectus,
                                                                            suscipit exercitationem accusantium
                                                                            obcaecati quos voluptate nesciunt facilis
                                                                            itaque modi commodi dignissimos sequi
                                                                            repudiandae minus ab deleniti totam officia
                                                                            id incidunt? <a href="#"
                                                                                class="reply">Reply</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="single-comment justify-content-between d-flex mb-30 ml-30">
                                                                <div class="user justify-content-between d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="assets/imgs/blog/author-3.png" alt="">
                                                                        <a href="#"
                                                                            class="font-heading text-brand">Brenna</a>
                                                                    </div>
                                                                    <div class="desc">
                                                                        <div
                                                                            class="d-flex justify-content-between mb-10">
                                                                            <div class="d-flex align-items-cer"> </div>
                                                                            <div class="product-rate d-inline-block">
                                                                                <div class="product-rating"
                                                                                    style="width: 80%"></div>
                                                                            </div>
                                                                        </div>
                                                                        <p class="mb-10">Lorem ipsum dolor sit amet,
                                                                            consectetur adipisicing elit. Delectus,
                                                                            suscipit exercitationem accusantium
                                                                            obcaecati quos voluptate nesciunt facilis
                                                                            itaque modi commodi dignissimos sequi
                                                                            repudiandae minus ab deleniti totam officia
                                                                            id incidunt? <a href="#"
                                                                                class="reply">Reply</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-comment justify-content-between d-flex">
                                                                <div class="user justify-content-between d-flex">
                                                                    <div class="thumb text-center">
                                                                        <img src="assets/imgs/blog/author-4.png" alt="">
                                                                        <a href="#"
                                                                            class="font-heading text-brand">Gemma</a>
                                                                    </div>
                                                                    <div class="desc">
                                                                        <div
                                                                            class="d-flex justify-content-between mb-10">
                                                                            <div class="d-flex align-items-center">
                                                                                <span
                                                                                    class="font-xs text-muted">December
                                                                                    4, 2022 at 3:12 pm </span>
                                                                            </div>
                                                                            <div class="product-rate d-inline-block">
                                                                                <div class="product-rating"
                                                                                    style="width: 80%"></div>
                                                                            </div>
                                                                        </div>
                                                                        <p class="mb-10">Lorem ipsum dolor sit amet,
                                                                            consectetur adipisicing elit. Delectus,
                                                                            suscipit exercitationem accusantium
                                                                            obcaecati quos voluptate nesciunt facilis
                                                                            itaque modi commodi dignissimos sequi
                                                                            repudiandae minus ab deleniti totam officia
                                                                            id incidunt? <a href="#"
                                                                                class="reply">Reply</a></p>
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
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar pt-50"
                        style="position: relative; overflow: visible; box-sizing: border-box; min-height: 913px;">

                        <div class="theiaStickySidebar"
                            style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(-122.969px); width: 216px; left: 744.5px; top: 0px;">
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

                                        <!-- blog category -->
                                        @foreach($blog_category as $ct)
                                        <li>
                                            <a
                                                href="{{ route('blog.category', ['id'=>$ct->id, 'slug'=>$ct->blog_category_slug]) }}">
                                                <img src="https://digi-poly.id.vn/frontend/assets/imgs/theme/icons/category-1.svg"
                                                    alt="">{{ $ct->blog_category_name }}</a><span
                                                class="count">{{ \App\Models\BlogPost::where('category_id', $ct->id)->count() }}
                                            </span>
                                        </li>
                                        @endforeach
                                        <!-- end blog category -->

                                    </ul>
                                </div>
                                <!-- Product sidebar Widget -->

                                <div class="banner-img wow fadeIn mb-50 animated d-lg-block d-none animated"
                                    style="visibility: visible;">
                                    <img src="https://digi-poly.id.vn/frontend/assets/imgs/banner/banner-11.png" alt="">
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
    </div>
</div>










@endsection