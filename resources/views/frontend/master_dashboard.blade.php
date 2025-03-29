<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title> @yield('title')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="title" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/theme/favicon.svg') }}" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css?v=5.3') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <script src="https://js.stripe.com/v3/"></script>

</head>

<body>
    <!-- Modal -->

    <!-- Quick view -->
    @include('frontend.body.quickview')
    <!-- Header  -->

    @include('frontend.body.header')
    <!--End header-->



    <main class="main">
        @yield('main')

    </main>

    @include('frontend.body.footer')



    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{ asset('frontend/assets/imgs/theme/loading.gif') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.vticker-min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
    <!-- Template  JS -->
    <script src="{{ asset('frontend/assets/js/main.js?v=5.3') }}"></script>
    <script src="{{ asset('frontend/assets/js/shop.js?v=5.3') }}"></script>

    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>




    {{-- hiển thị thông tin sản phẩm quickview --}}
    <script type="text/javascript">

        function productView(id){
            const $ = document.querySelector.bind(document);
            const $$ = document.querySelectorAll.bind(document);
            // console.log(id);
            var idprodcs = document.querySelectorAll('div[idprod]');

            $('#pvaiant').innerHTML = '';
            idprodcs.forEach(function(idprodc) {
                idprodc.innerHTML = `<input type="hidden" id="idprode" value="${id}">`;
            });

            fetch('/product/view/modal/'+id)
			.then(response => response.json())
			.then(data => {


                $('#pname').innerText = data.data.product.product_name;
                $('#pimage').src = '/'+data.data.product.product_thumnail;

                // console.log((data.data.showvariant).length);

                for (let i = 0; i < (data.data.showvariant).length; i++) {
                    $('#pvaiant').innerHTML += `<div class="attr-detail attr-size mb-30">
                                                    <strong class="mr-10 namevariant" style="width:110px;">${data.data.showvariant[i][0]}: </strong>
                                                    <select class="form-control unicase-form-control valvariant" onchange="selectvari(${data.data.product.id})" id="dsize">
                                                        <option selected="" disabled="" value="">--Choose Variant--</option>
                                                        ${valuevariant((data.data.showvariant[i][1]).length, data.data.showvariant[i][1])}
                                                    </select>
                                                </div>`;
                    
                }
                // console.log(data);

                $('#quickprice').innerHTML = data.data.product.discount_price == null ? pricequick(false, data.data.product.selling_price) : pricequick(true, data.data.product.selling_price, data.data.product.discount_price);


                $('#pbrand').innerText = data.data.product.brand.brand_name;
                $('#pcategory').innerText = data.data.product.category.category_name;

				}) 
			.catch(error => console.error('Lỗi:', error));


            

        }

        function pricequick(chekdiscount, sellprice, discoutprice = null){
            var resprice = '';
            if(chekdiscount == true){
                resprice = `<span class="current-price text-brand">$</span>
                            <span class="current-price text-brand" priceproduct id="pprice">${discoutprice}</span>

                            <span class="old-price font-md ml-15">$ </span>
                            <span class="old-price font-md ml-15" id="oldprice">${sellprice}</span>`;
            }else{
                resprice = `<span class="current-price text-brand">$</span>
                            <span class="current-price text-brand" priceproduct id="pprice">${sellprice}</span>`;
            }
            return resprice;
        }

        function valuevariant(solanlap, valuevri){
            var res = '';
            for (let j = 0; j < solanlap; j++) {
                res += `<option value="${valuevri[j]}">${valuevri[j]}</option>`;
            }
            return res;
        }
    </script>


    {{-- sử lý logic khi select các option variant --}}

<script type="text/javascript">
// document.addEventListener("DOMContentLoaded", () => {
    function selectvari(idpr = null){
        console.log('alo');
        var notivariants = document.querySelectorAll("div[notivariant]");
        var idinfors = document.getElementById("idinfor");
        var priceproducts = document.querySelectorAll("span[priceproduct]");
        var valvariant = document.getElementsByClassName("valvariant");
        var idproduct = idpr == null ? document.getElementById("idproduct").value : idpr;
        var flagv = false;
        var noti =  idpr == null ? false : true;



        notivariants.forEach(function(notivariant) {
            notivariant.innerHTML = '';
        });

        for (let i = 0; i < valvariant.length; i++) {
            console.log(valvariant[i].value);
            if(valvariant[i].value == ''){
                flagv = true;
            }
        }

        if(flagv == false){
            console.log('đã vào');
            var value_ = '';
            for (let i = 0; i < valvariant.length; i++) {
                value_ += i == --valvariant.length ?  valvariant[i].value : valvariant[i].value + ", ";
            }

            fetch('/api/product/variant/'+idproduct)
			.then(response => response.json())
			.then(data => {
                // console.log(data.data[0].variant_value);
                    var pricemain = data.data[0].discount_price == null ? data.data[0].selling_price : data.data[0].discount_price;
                    var flagcheck = false;

                    for (let i = 0; i < data.data.variants.length; i++) {
                        if(value_ == data.data.variants[i].variant_value){
                            flagcheck = true;

                            if(data.data.variants[i].quantity == 0){
                                noti = false;
                            }else{
                                console.log(data.data.variants[i].variant_value);
                                console.log(data.data.variants[i].price);
                                console.log(data.data.variants[i].quantity);
                                

                                priceproducts.forEach(function(priceproduct) {
                                    priceproduct.innerText = data.data.variants[i].price == null ? pricemain : data.data.variants[i].price;
                                });

                                console.log('id infor: ',data.data.variants[i].id_infor);
                                idinfors.value = data.data.variants[i].id_infor;

                                
                                noti = true;
                            }
                        }
                    }
                    if(noti == false || flagcheck == false){
                        priceproducts.forEach(function(priceproduct) {
                            priceproduct.innerText = pricemain;
                        });

                        notivariants.forEach(function(notivariant) {
                            notivariant.innerHTML = `<div nottiprod class="col-12 alert alert-warning alert-dismissible fade show" role="alert">
                                                                                <p class="m-0"><strong>thông báo: </strong>loại này đã hết hàng</p>
                                                                            </div>`;
                        });
                        
                    }

				}) 
			.catch(error => console.error('Lỗi:', error));

        }




    };
// });
</script>


{{-- thêm vào giỏ hàng trong với quickview --}}
<script type="text/javascript">
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

    function addToCart(){
    
        
        
        var csrftoken = $('meta[name="csrf-token"]').getAttribute('content');
        // console.log(csrftoken);
        var id = $('#idprode').value;
        var idinfors = $("#idinfor").value;
        var selevari = $$('.valvariant');
        var namevariant = $$('.namevariant');
        var flagv = false;



        for (let i = 0; i < selevari.length; i++) {
            if(selevari[i].value == ''){
                flagv = true;
            }
        }
        
        if(flagv == false && ($$("div[nottiprod]").length > 0) == false){

            var value_ = '';
            for (let i = 0; i < selevari.length; i++) {
                value_ += i == --selevari.length ?  namevariant[i].innerText + ' ' + selevari[i].value : namevariant[i].innerText + ' ' + selevari[i].value + ", ";
            }

            var qty = $('#qaty').value;
            var pprice = $('#pprice').innerText;


            console.log(qty);
            console.log(pprice);
            console.log(value_);
            console.log(idinfors);

            var res = {
                'qty': qty,
                'price': pprice,
                'variant_pd': value_,
                'idinfors': idinfors
            };

            var option = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                    'X-CSRF-Token': csrftoken,
                },
                body: JSON.stringify(res),
            };
            fetch("/cart/data/store/"+id, option)
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    miniCart();

                })
                .catch(er => console.log(er)); 


            console.log('có số lượng');

        }


    }

    function miniCart(){
        fetch('/product/mini/cart')
			.then(response => response.json())
			.then(data => {
                    console.log(data);
                    // console.log(data.cartTotal);
                    $('span[id="cartSubTotal"]').innerText =  data.cartTotal;
                    $('#cartQty').innerText = data.cartQty;

                    var miniCart = "";

                    let cartsArray = Object.values(data.carts);

                    cartsArray.forEach(function(value, key) {
                        miniCart += ` <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Nest" src="/${value.options.image} " style="width:50px;height:50px;" /></a>
                                            </div>
                                            <div class="shopping-cart-title" style="margin: -73px 74px 14px; width" 146px;>
                                                <h4><a href="shop-product-right.html"> ${value.name} </a></h4>
                                                <h4><span>${value.qty} × </span>${value.price}</h4>
                                            </div>
                                            <div class="shopping-cart-delete" style="margin: -85px 1px 0px;">
                                                <a type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"  ><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li> 
                                    </ul>
                                    <hr><br>`
                    });

                    $('#miniCart').innerHTML = miniCart;

				}) 
			.catch(error => console.error('Lỗi:', error));
    }
    miniCart();


    function miniCartRemove(rowId){
        console.log(rowId);
        fetch('/minicart/product/remove/'+rowId)
			.then(response => response.json())
			.then(data => {
                // console.log(data);
                miniCart();
            }) 
			.catch(error => console.error('Lỗi:', error));
   }
</script>
    

</body>

</html>