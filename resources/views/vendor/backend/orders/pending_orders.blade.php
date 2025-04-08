@extends('vendor.vendor_dashboard')
@section('vendor')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Vendor Pending Order</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Vendor Pending Order</li>
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
							<th>State </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td> 1 </td>
							<td>26 February 2025</td>
							<td>EOS74570215</td>
							<td>$735.00</td>
							<td>Cash On Delivery</td>
							<td> <span class="badge rounded-pill bg-success"> pending</span></td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/14" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>

						<tr>
							<td> 2 </td>
							<td>26 February 2025</td>
							<td>EOS74570215</td>
							<td>$735.00</td>
							<td>Cash On Delivery</td>
							<td> <span class="badge rounded-pill bg-success"> pending</span></td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/14" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>

						<tr>
							<td> 3 </td>
							<td>26 February 2025</td>
							<td>EOS51556421</td>
							<td>$980.00</td>
							<td>Cash On Delivery</td>
							<td> <span class="badge rounded-pill bg-success"> pending</span></td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/13" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>

						<tr>
							<td> 4 </td>
							<td>26 February 2025</td>
							<td>EOS51556421</td>
							<td>$980.00</td>
							<td>Cash On Delivery</td>
							<td> <span class="badge rounded-pill bg-success"> pending</span></td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/13" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>

						<tr>
							<td> 5 </td>
							<td>06 September 2022</td>
							<td>EOS66716188</td>
							<td>$520.00</td>
							<td>Cash On Delivery</td>
							<td> <span class="badge rounded-pill bg-success"> pending</span></td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/11" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>

						<tr>
							<td> 6 </td>
							<td>06 September 2022</td>
							<td>EOS95189836</td>
							<td>$320.00</td>
							<td>Cash On Delivery</td>
							<td> <span class="badge rounded-pill bg-success"> pending</span></td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/10" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>

						<tr>
							<td> 7 </td>
							<td>29 August 2022</td>
							<td>EOS82094998</td>
							<td>$320.00</td>
							<td>Cash On Delivery</td>
							<td> <span class="badge rounded-pill bg-success"> deliverd</span></td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/7" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>

						<tr>
							<td> 8 </td>
							<td>23 August 2022</td>
							<td>EOS62923939</td>
							<td>$640.00</td>
							<td>Stripe</td>
							<td> <span class="badge rounded-pill bg-success"> processing</span></td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/5" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>

						<tr>
							<td> 9 </td>
							<td>22 August 2022</td>
							<td>EOS32084004</td>
							<td>$960.00</td>
							<td>Stripe</td>
							<td> <span class="badge rounded-pill bg-success"> deliverd</span></td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/3" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


							</td>
						</tr>

						<tr>
							<td> 10 </td>
							<td>22 August 2022</td>
							<td>EOS85742385</td>
							<td>$1520.00</td>
							<td>Stripe</td>
							<td> <span class="badge rounded-pill bg-success"> pending</span></td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/order/details/2" class="btn btn-info" title="Details"><i class="fa fa-eye"></i> </a>


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