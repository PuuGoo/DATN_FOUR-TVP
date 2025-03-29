@extends('dashboard')
@section('user')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> My Account
        </div>
    </div>
</div>
<div class="page-content pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="row">

                    <!-- // Start Col md 3 menu -->

                    <div class="col-md-3">
                        <div class="dashboard-menu">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link  " href="https://digi-poly.id.vn/dashboard"><i class="fi-rs-settings-sliders mr-10"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="https://digi-poly.id.vn/user/order/page"><i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="https://digi-poly.id.vn/return/order/page"><i class="fi-rs-shopping-bag mr-10"></i>Return Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="https://digi-poly.id.vn/user/track/order"><i class="fi-rs-shopping-cart-check mr-10"></i>Track Your Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#address"><i class="fi-rs-marker mr-10"></i>My Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="https://digi-poly.id.vn/user/account/page"><i class="fi-rs-user mr-10"></i>Account details</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="https://digi-poly.id.vn/user/change/password"><i class="fi-rs-user mr-10"></i>Change Password</a>
                                </li>


                                <li class="nav-item" style="background:#ddd;">
                                    <a class="nav-link" href="https://digi-poly.id.vn/user/logout"><i class="fi-rs-sign-out mr-10"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- // End Col md 3 menu -->



                    <!-- // Start Col md 9  -->
                    <div class="col-md-9">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Shipping Details</h4>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <table class="table" style="background:#F4F6FA;font-weight: 600;">
                                            <tbody>
                                                <tr>
                                                    <th>Shipping Name:</th>
                                                    <th>User</th>
                                                </tr>

                                                <tr>
                                                    <th>Shipping Phone:</th>
                                                    <th>4343434</th>
                                                </tr>

                                                <tr>
                                                    <th>Shipping Email:</th>
                                                    <th>user@gmail.com</th>
                                                </tr>

                                                <tr>
                                                    <th>Shipping Address:</th>
                                                    <th>usa</th>
                                                </tr>


                                                <tr>
                                                    <th>Division:</th>
                                                    <th>Dhaka</th>
                                                </tr>

                                                <tr>
                                                    <th>District:</th>
                                                    <th>Gazipur</th>
                                                </tr>

                                                <tr>
                                                    <th>State :</th>
                                                    <th>Kaliakair Upazila</th>
                                                </tr>

                                                <tr>
                                                    <th>Post Code :</th>
                                                    <th>3333</th>
                                                </tr>

                                                <tr>
                                                    <th>Order Date :</th>
                                                    <th>22 August 2022</th>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                            <!-- // End col-md-6  -->


                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Order Details
                                            <span class="text-danger">Invoice : EOS85742385 </span>
                                        </h4>
                                    </div>
                                    <hr>
                                    <div class="card-body">
                                        <table class="table" style="background:#F4F6FA;font-weight: 600;">
                                            <tbody>
                                                <tr>
                                                    <th> Name :</th>
                                                    <th>User</th>
                                                </tr>

                                                <tr>
                                                    <th>Phone :</th>
                                                    <th>4343434111</th>
                                                </tr>

                                                <tr>
                                                    <th>Payment Type:</th>
                                                    <th>Stripe</th>
                                                </tr>


                                                <tr>
                                                    <th>Transx ID:</th>
                                                    <th>txn_3LZiVRALc6pn5BvM0nb9zZiE</th>
                                                </tr>

                                                <tr>
                                                    <th>Invoice:</th>
                                                    <th class="text-danger">EOS85742385</th>
                                                </tr>

                                                <tr>
                                                    <th>Order Amonut:</th>
                                                    <th>$1520.00</th>
                                                </tr>

                                                <tr>
                                                    <th>Order Status:</th>
                                                    <th><span class="badge rounded-pill bg-warning">pending</span></th>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                            <!-- // End col-md-6  -->

                        </div><!-- // End Row  -->




                    </div>
                    <!-- // End Col md 9  -->


                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table" style="font-weight: 600;">
                    <tbody>
                        <tr>
                            <td class="col-md-1">
                                <label>Image </label>
                            </td>
                            <td class="col-md-2">
                                <label>Product Name </label>
                            </td>
                            <td class="col-md-2">
                                <label>Vendor Name </label>
                            </td>
                            <td class="col-md-2">
                                <label>Product Code </label>
                            </td>
                            <td class="col-md-1">
                                <label>Color </label>
                            </td>
                            <td class="col-md-1">
                                <label>Size </label>
                            </td>
                            <td class="col-md-1">
                                <label>Quantity </label>
                            </td>

                            <td class="col-md-3">
                                <label>Price </label>
                            </td>

                        </tr>


                        <tr>
                            <td class="col-md-1">
                                <label><img src="{{ asset('upload/products/thambnail/1740390277372812.webp')}}" style="width:50px; height:50px;"> </label>
                            </td>
                            <td class="col-md-2">
                                <label>Canon PIXMA G1010 Single Function</label>
                            </td>
                            <td class="col-md-2">
                                <label>Nest Food.,Ltd </label>
                            </td>

                            <td class="col-md-2">
                                <label>434444 </label>
                            </td>
                            <td class="col-md-1">
                                <label>Red </label>
                            </td>

                            <td class="col-md-1">
                                <label>Small </label>
                            </td>
                            <td class="col-md-1">
                                <label>1 </label>
                            </td>

                            <td class="col-md-3">
                                <label>$1000.00 <br> Total = $1000 </label>
                            </td>

                        </tr>
                        <tr>
                            <td class="col-md-1">
                                <label><img src="{{ asset('upload/products/thambnail/1740389985066584.webp')}}" style="width:50px; height:50px;"> </label>
                            </td>
                            <td class="col-md-2">
                                <label>Skinny Men Blue Jeans</label>
                            </td>
                            <td class="col-md-2">
                                <label>Owner </label>
                            </td>

                            <td class="col-md-2">
                                <label>234234 </label>
                            </td>
                            <td class="col-md-1">
                                <label>Red </label>
                            </td>

                            <td class="col-md-1">
                                <label>Small </label>
                            </td>
                            <td class="col-md-1">
                                <label>1 </label>
                            </td>

                            <td class="col-md-3">
                                <label>$500.00 <br> Total = $500 </label>
                            </td>

                        </tr>
                        <tr>
                            <td class="col-md-1">
                                <label><img src="{{ asset('upload/products/thambnail/1740389527616484.webp')}}" style="width:50px; height:50px;"> </label>
                            </td>
                            <td class="col-md-2">
                                <label>Color Block Men Hooded Neck Red</label>
                            </td>
                            <td class="col-md-2">
                                <label>Expart Fashion </label>
                            </td>

                            <td class="col-md-2">
                                <label>234234 </label>
                            </td>
                            <td class="col-md-1">
                                <label>Red </label>
                            </td>

                            <td class="col-md-1">
                                <label>Small </label>
                            </td>
                            <td class="col-md-1">
                                <label>1 </label>
                            </td>

                            <td class="col-md-3">
                                <label>$400.00 <br> Total = $400 </label>
                            </td>

                        </tr>

                    </tbody>
                </table>

            </div>

        </div>

        <!--  // Start Return Order Option  -->


        <!--  // End Return Order Option  -->






    </div>
</div>















@endsection