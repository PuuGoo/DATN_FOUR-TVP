@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content"> 
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add Coupon </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Coupon</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto"></div>
    </div>
    <!--end breadcrumb-->

    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <!-- Form to Add Coupon -->
                            <form id="myForm" method="post" action="{{ route('add.coupon') }}">
                                @csrf
                            
                                <!-- Coupon Name -->
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-3 col-form-label">Coupon Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" id="name" class="form-control" />
                                    </div>
                                </div>
                            
                                <!-- Coupon Code -->
                                <div class="row mb-3">
                                    <label for="code" class="col-sm-3 col-form-label">Coupon Code</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="code" id="code" class="form-control" />
                                    </div>
                                </div>
                            
                                <!-- Coupon Discount -->
                                <div class="row mb-3">
                                    <label for="discount" class="col-sm-3 col-form-label">Coupon Discount (%)</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="discount" id="discount" class="form-control" min="0" max="100" />
                                    </div>
                                </div>
                            
                                <!-- Expiry Date -->
                                <div class="row mb-3">
                                    <label for="expiry_date" class="col-sm-3 col-form-label">Expiry Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="expiry_date" id="expiry_date" class="form-control" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" />
                                    </div>
                                </div>
                            
                                <!-- Submit Button -->
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#myForm').validate({
            rules: {
                name: {
                    required: true,
                },
                code: {
                    required: true,
                },
                discount: {
                    required: true,
                    number: true,
                    min: 0,
                    max: 100
                },
                expiry_date: {
                    required: true,
                    date: true
                },
            },
            messages: {
                name: {
                    required: 'Please enter coupon name',
                },
                code: {
                    required: 'Please enter coupon code',
                },
                discount: {
                    required: 'Please enter coupon discount',
                    number: 'Please enter a valid number',
                    min: 'Discount cannot be less than 0%',
                    max: 'Discount cannot exceed 100%'
                },
                expiry_date: {
                    required: 'Please enter expiry date',
                    date: 'Please enter a valid date'
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element) {
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>
@endsection
