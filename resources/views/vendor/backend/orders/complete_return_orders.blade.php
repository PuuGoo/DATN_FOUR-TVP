@extends('vendor.vendor_dashboard')
@section('vendor')


<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Vendor
			Complete Return Order</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Vendor Complete Return Order</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">

			</div>
		</div>
	</div>
	<!--end breadcrumb-->

	<hr />
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Sl</th>
							<th>Date </th>
							<th>Invoice </th>
							<th>Amount </th>
							<th>Payment </th>
							<th>Reason </th>
							<th>State </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>








						<tr>
							<td> 7 </td>
							<td>29 August 2022</td>
							<td>EOS82094998</td>
							<td>$320.00</td>
							<td>Cash On Delivery</td>
							<td>Not Happy</td>
							<td>
								<span class="badge rounded-pill bg-success"> Done </span>

							</td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/7" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>



						<tr>
							<td> 9 </td>
							<td>22 August 2022</td>
							<td>EOS32084004</td>
							<td>$960.00</td>
							<td>Stripe</td>
							<td>Broken</td>
							<td>
								<span class="badge rounded-pill bg-success"> Done </span>

							</td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/3" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>



					</tbody>
					<tfoot>
						<tr>
							<th>Sl</th>
							<th>Date </th>
							<th>Invoice </th>
							<th>Amount </th>
							<th>Payment </th>
							<th>Reason </th>
							<th>State </th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>



</div>




</div>
<!--end page wrapper -->



@endsection