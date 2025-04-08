<section class="product-tabs section-padding position-relative">
	<div class="container">
		<div class="section-title style-2 wow animate__animated animate__fadeIn">
			<h3> New Products </h3>
			<ul class="nav nav-tabs links" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one"
						type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
				</li>
				<!-- <li class="nav-item" role="presentation">
					<a class="nav-link" id="nav-tab-two" data-bs-toggle="tab" href="#category4" type="button"
						role="tab" aria-controls="tab-two" aria-selected="false">Appliances</a>
				</li> -->

				@foreach ($categories as $ct)
				@php
				$hasProducts = \App\Models\Product::where('category_id', $ct->id)->exists();
				$href = $hasProducts ? "#category-{$ct->id}" : "#category4";
				@endphp
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="tab-{{ $ct->id }}" data-bs-toggle="tab" href="{{ $href }}" type="button"
						role="tab" aria-controls="category-{{ $ct->id }}" aria-selected="false">
						{{ $ct->category_name }}
					</a>
				</li>
				@endforeach



			</ul>
		</div>
		<!--End nav-tabs-->
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
				<div class="row product-grid-4">
					@foreach ($products as $pd)
					<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
						<div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"
							data-wow-delay=".1s">
							<div class="product-img-action-wrap">
								<div class="product-img product-img-zoom">
									<a
										href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
										<img class="default-img" src="{{ $pd->product_thumnail }}"
											alt="{{ $pd->product_name }}" />
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
									$category = \App\Models\Category::find($pd->category_id);
									@endphp
									@if ($category)
									<a
										href="{{ route('product.category', ['id' => $category->id, 'slug' => $category->category_slug]) }}">
										{{ $category->category_name }}
									</a>
									@endif
								</div>

								<h2>
									<a
										href="{{ route('product.detail', ['id'=>$pd->id, 'slug'=>$pd->product_slug]) }}">
										{{ $pd->product_name }}
									</a>
								</h2>

								<div class="product-rate-cover">
									<div class="product-rate d-inline-block">
										<div class="product-rating" style="width: 80%"></div>
									</div>
									<span class="font-small ml-5 text-muted"> ({{ $pd->product_qty }})</span>
								</div>

								<div>
									@php
									$brand = \App\Models\Brand::find($pd->brand_id);
									@endphp
									@if ($brand)
									<span class="font-small text-muted">By <a
											href="vendor-details-1.html">{{ $brand->brand_name }}</a></span>
									@endif
								</div>

								<div class="product-card-bottom">
									<div class="product-price">
										@if ($pd->discount_price && $pd->selling_price > $pd->discount_price)
										<span>${{ number_format($pd->discount_price, 0, ',', '.') }}</span>
										<span
											class="old-price">${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
										@else
										<span>${{ number_format($pd->selling_price, 0, ',', '.') }}</span>
										@endif
									</div>

									<div class="add-cart">
										<a class="add" href="shop-cart.html"><i
												class="fi-rs-shopping-cart mr-5"></i>Add </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach






				</div>
				<!--End product-grid-4-->
			</div>
			<!--En tab one-->



			<div class="tab-pane fade" id="category4" role="tabpanel" aria-labelledby="tab-two">
				<div class="row product-grid-4">



					<h5 class="text-danger"> No Product Found </h5>






				</div>
				<!--End product-grid-4-->
			</div>
			<!--En tab two-->
			<div class="tab-pane fade" id="category5" role="tabpanel" aria-labelledby="tab-two">
				<div class="row product-grid-4">



					<h5 class="text-danger"> No Product Found </h5>






				</div>
				<!--End product-grid-4-->
			</div>
			<!--En tab two-->
			@foreach ($categories as $ct)
			@php
			$products = \App\Models\Product::where('category_id', $ct->id)->take(10)->get();
			@endphp
			<div class="tab-pane fade" id="category-{{ $ct->id }}" role="tabpanel" aria-labelledby="tab-{{ $ct->id }}">
				<div class="row product-grid-4">
					@foreach ($products as $product)
					<div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
						<div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"
							data-wow-delay=".1s">
							<div class="product-img-action-wrap">
								<div class="product-img product-img-zoom">
									<a href="{{ url('product/details/' . $product->id . '/' . $product->slug) }}">
										<img class="default-img" src="{{ $product->product_thumnail }}" alt="" />
									</a>
								</div>
								<div class="product-action-1">
									<a aria-label="Add To Wishlist" class="action-btn" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="fi-rs-heart"></i></a>
									<a aria-label="Compare" class="action-btn"  id="{{ $product->id }}" onclick="addToCompare(this.id)"><i class="fi-rs-shuffle"></i></a>
									<a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
										data-bs-target="#quickViewModal" id="{{ $product->id }}" onclick="productView(this.id)"><i class="fi-rs-eye"></i></a>
								</div>
								<div class="product-badges product-badges-position product-badges-mrg">
									@if ($product->discount_price && $product->selling_price >
									$product->discount_price)
									@php
									$discountPercent = round((($product->selling_price - $product->discount_price) /
									$product->selling_price) * 100);
									@endphp
									<span class="hot">-{{ $discountPercent }} %</span>
									@endif
								</div>
							</div>
							<div class="product-content-wrap">
								<div class="product-category">
									<a href="shop-grid-right.html">{{ $ct->category_name }}</a>
								</div>
								<h2>
									<a href="{{ url('product/details/' . $product->id . '/' . $product->slug) }}">
										{{ $product->product_name }}
									</a>
								</h2>
								<div class="product-rate-cover">
									<div class="product-rate d-inline-block">
										<div class="product-rating" style="width: 90%"></div>
									</div>
									<span class="font-small ml-5 text-muted"> (4.0)</span>
								</div>
								<div>
									<span class="font-small text-muted">By <a
											href="vendor-details-1.html">Sony</a></span>
								</div>
								<div class="product-card-bottom">
									<div class="product-price">
										@if ($product->discount_price && $product->selling_price >
										$product->discount_price)
										<span>${{ number_format($product->discount_price, 0, ',', '.') }}</span>
										<span
											class="old-price">${{ number_format($product->selling_price, 0, ',', '.') }}</span>
										@else
										<span>${{ number_format($product->selling_price, 0, ',', '.') }}</span>
										@endif
									</div>
									<div class="add-cart">
										<a class="add" href="shop-cart.html"><i
												class="fi-rs-shopping-cart mr-5"></i>Add</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			@endforeach

			<!--En tab two-->


		</div>
		<!--End tab-content-->
	</div>
</section>

<script>
	function addToWishList(productId) {
		fetch(`/add-to-wishlist/${productId}`, {
			method: "POST",
			headers: {
				"X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
				"Content-Type": "application/json"
			},
			body: JSON.stringify({})
		})
			.then(response => response.json())
			.then(data => {
				if (data.success) {
					alert(data.success);
				} else {
					alert(data.error || data.message);
				}
			})
			.catch(error => console.error('Lỗi:', error));
	}

	function addToCompare(productId) {
		fetch(`/add-to-compare/${productId}`, {
			method: "POST",
			headers: {
				"X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
				"Content-Type": "application/json"
			},
			body: JSON.stringify({})
		})
			.then(response => response.json())
			.then(data => {
				if (data.success) {
					alert(data.success);
				} else {
					alert(data.error || data.message);
				}
			})
			.catch(error => console.error('Lỗi:', error));
	}


</script>
