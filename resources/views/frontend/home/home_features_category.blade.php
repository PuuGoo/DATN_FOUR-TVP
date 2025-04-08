<section class="popular-categories section-padding">
    <div class="container wow animate__animated animate__fadeIn">
        <div class="section-title">
            <div class="title">
                <h3>Featured Categories </h3>

            </div>
            <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow"
                id="carausel-10-columns-arrows"></div>
        </div>
        <div class="carausel-10-columns-cover position-relative">
            <div class="carausel-10-columns" id="carausel-10-columns">
                @foreach ($categories as $ct )

                <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="{{ route('product.category', ['id' => $ct->id, 'slug' => $ct->category_slug]) }}"><img
                                src="{{ $ct->category_image }}" alt="" /></a>
                    </figure>
                    <h6><a
                            href="{{ route('product.category', ['id' => $ct->id, 'slug' => $ct->category_slug]) }}">{{ $ct->category_name }}</a>
                    </h6>

                    <span>{{ \App\Models\Product::where('category_id', $ct->id)->count() }} items</span>

                </div>

                @endforeach

                <!-- <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="https://digi-poly.id.vn/product/category/5/beauty"><img upload/category/1740388510925410.webp" alt="" /></a>
                    </figure>
                    <h6><a href="https://digi-poly.id.vn/product/category/5/beauty">Beauty</a></h6>


                    <span>0 items</span>
                </div>
                <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="https://digi-poly.id.vn/product/category/2/electronics"><img upload/category/1740388410112488.webp" alt="" /></a>
                    </figure>
                    <h6><a href="https://digi-poly.id.vn/product/category/2/electronics">Electronics</a></h6>


                    <span>6 items</span>
                </div>
                <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="https://digi-poly.id.vn/product/category/1/fashion"><img upload/category/1740388456845535.webp" alt="" /></a>
                    </figure>
                    <h6><a href="https://digi-poly.id.vn/product/category/1/fashion">Fashion</a></h6>


                    <span>7 items</span>
                </div>
                <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="https://digi-poly.id.vn/product/category/8/furniture"><img upload/category/1740388599418960.webp" alt="" /></a>
                    </figure>
                    <h6><a href="https://digi-poly.id.vn/product/category/8/furniture">Furniture</a></h6>


                    <span>0 items</span>
                </div>
                <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="https://digi-poly.id.vn/product/category/10/grocery"><img upload/category/1740388649576724.webp" alt="" /></a>
                    </figure>
                    <h6><a href="https://digi-poly.id.vn/product/category/10/grocery">Grocery</a></h6>


                    <span>0 items</span>
                </div>
                <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="https://digi-poly.id.vn/product/category/7/meat-&amp;-fish"><img upload/category/1740388203907617.png" alt="" /></a>
                    </figure>
                    <h6><a href="https://digi-poly.id.vn/product/category/7/meat-&amp;-fish">Meat &amp; Fish</a></h6>


                    <span>0 items</span>
                </div> -->
                <!-- <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="https://digi-poly.id.vn/product/category/9/mobiles"><img
                                upload/category/1740388616630915.webp" alt="" /></a>
                    </figure>
                    <h6><a href="https://digi-poly.id.vn/product/category/9/mobiles">Mobiles</a></h6>


                    <span>5 items</span>
                </div>
                <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="https://digi-poly.id.vn/product/category/3/sweet-home"><img
                                upload/category/1740388444682193.webp" alt="" /></a>
                    </figure>
                    <h6><a href="https://digi-poly.id.vn/product/category/3/sweet-home">Sweet Home</a></h6>


                    <span>5 items</span>
                </div>
                <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="https://digi-poly.id.vn/product/category/11/travel"><img
                                upload/category/1740388803723655.webp" alt="" /></a>
                    </figure>
                    <h6><a href="https://digi-poly.id.vn/product/category/11/travel">Travel</a></h6>


                    <span>0 items</span>
                </div> -->


            </div>
        </div>
    </div>
</section>
<!--End category slider-->
