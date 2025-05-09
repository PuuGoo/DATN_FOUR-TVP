@extends('frontend.master_dashboard')
@section('main')
@section('title')
Wishlist
@endsection

<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> Wishlist
        </div>
    </div>
</div>
<div class="container mb-30 mt-50">
    <div class="row">
        <div class="col-xl-10 col-lg-12 m-auto">
            <div class="mb-50">
                <h1 class="heading-2 mb-10">Your Wishlist</h1>
                <h6 class="text-body">There are products in this list</h6>
            </div>
            <div class="table-responsive shopping-summery">
                <table class="table table-wishlist">
                    <thead>
                        <tr class="main-heading">
                            <th class="custome-checkbox start pl-30">

                            </th>
                            <th scope="col" colspan="2">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Stock Status</th>

                            <th scope="col" class="end">Remove</th>
                        </tr>
                    </thead>
                    <tbody id="wishlist">
                        {{-- <tr class="pt-30">
                            <td class="custome-checkbox pl-30">

                            </td>
                            <td class="image product-thumbnail pt-40"><img src="/upload/products/thambnail/1740390365626068.webp" alt="#"></td>
                            <td class="product-des product-name">
                                <h6><a class="product-name mb-10" href="shop-product-right.html">HP 315 Multi-function Color Printe </a></h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                            </td>
                            <td class="price" data-title="Price">
                                <h3 class="text-brand">$300</h3>

                            </td>
                            <td class="text-center detail-info" data-title="Stock">
                                <span class="stock-status in-stock mb-0"> In Stock </span>

                            </td>

                            <td class="action text-center" data-title="Remove">
                                <a type="submit" class="text-body" id="18" onclick="wishlistRemove(this.id)"><i class="fi-rs-trash"></i></a>
                            </td>
                        </tr> --}}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        fetch('/get-wishlist-product')
            .then(response => response.json())
            .then(data => {


                let wishlistContent = document.getElementById('wishlist');
                wishlistContent.innerHTML = '';

                for (let i = 0; i < data.wishlist.length; i++) {


                    wishlistContent.innerHTML += `
                        <tr class="pt-30">
                            <td class="custome-checkbox pl-30"></td>
                            <td class="image product-thumbnail pt-40">
                                <img src="/upload/products/thambnail/${data.wishlist[i].product.product_thumnail}" alt="#">
                            </td>
                            <td class="product-des product-name">
                                <h6><a class="product-name mb-10" href="/product/details/${data.wishlist[i].product.id}/${data.wishlist[i].product.product_slug}">${data.wishlist[i].product.product_name}</a></h6>

                            </td>
                            <td class="price" data-title="Price">
                                <h3 class="text-brand">$${ data.wishlist[i].product.discount_price == null ? data.wishlist[i].product.selling_price : data.wishlist[i].product.discount_price}</h3>
                            </td>
                            <td class="action text-center" data-title="Remove">
                                <a class="text-body remove-wishlist" data-id="${data.wishlist[i].product.id}">
                                    <i class="fi-rs-trash"></i>
                                </a>
                            </td>
                        </tr>
                    `;
                }


                // Xóa sản phẩm khỏi Wishlist
                document.querySelectorAll('.remove-wishlist').forEach(button => {
                    button.addEventListener('click', function () {
                        let productId = this.getAttribute('data-id');

                        fetch(`/wishlist-remove/${productId}`)
                            .then(response => response.json())
                            .then(data => {
                                alert(data.message || data.error);
                                location.reload();
                            });
                    });
                });
            });
    });
</script>






@endsection
