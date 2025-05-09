@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

	{{-- <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
		<div class="col">
			<div class="card radius-10 bg-gradient-deepblue">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">$0USD</h5>
						<div class="ms-auto">
							<i class='bx bx-cart fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Today's Sale</p>
						<p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 bg-gradient-orange">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">$0USD</h5>
						<div class="ms-auto">
							<i class='bx bx-dollar fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Monthly Sale</p>
						<p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 bg-gradient-ohhappiness">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">$4577.00USD</h5>
						<div class="ms-auto">
							<i class='bx bx-group fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Yearly Sale</p>
						<p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10 bg-gradient-ibiza">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">6</h5>
						<div class="ms-auto">
							<i class='bx bx-envelope fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Pending Orders</p>
						<p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>



		<div class="col">
			<div class="card radius-10 bg-gradient-ibiza">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">6</h5>
						<div class="ms-auto">
							<i class='bx bx-envelope fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Total Vendor </p>
						<p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>




		<div class="col">
			<div class="card radius-10 bg-gradient-ibiza">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0 text-white">4</h5>
						<div class="ms-auto">
							<i class='bx bx-envelope fs-3 text-white'></i>
						</div>
					</div>
					<div class="progress my-3 bg-light-transparent" style="height:3px;">
						<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="d-flex align-items-center text-white">
						<p class="mb-0">Total User </p>
						<p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
					</div>
				</div>
			</div>
		</div>




	</div><!--end row--> --}}






	<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">Orders Summary</h5>
				</div>
				<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
				</div>
			</div>
			<hr>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th>Sl</th>
							<th>Date</th>
							<th>Invoice</th>
							<th>Amount</th>
							<th>Payment</th>
							<th>Status</th>
						</tr>
					</thead>


					<tbody>


						<tr>
							<td>1</td>

							<td>26 February 2025</td>
							<td>EOS74570215</td>
							<td>$735.00</td>
							<td>Cash On Delivery</td>
							<td>
								<div class="badge rounded-pill bg-light-info text-info w-100">
									pending</div>
							</td>

						</tr>

						<tr>
							<td>2</td>

							<td>26 February 2025</td>
							<td>EOS51556421</td>
							<td>$980.00</td>
							<td>Cash On Delivery</td>
							<td>
								<div class="badge rounded-pill bg-light-info text-info w-100">
									pending</div>
							</td>

						</tr>

						<tr>
							<td>3</td>

							<td>08 February 2025</td>
							<td>EOS21994871</td>
							<td>$2260.00</td>
							<td>Cash On Delivery</td>
							<td>
								<div class="badge rounded-pill bg-light-info text-info w-100">
									pending</div>
							</td>

						</tr>

						<tr>
							<td>4</td>

							<td>06 September 2022</td>
							<td>EOS66716188</td>
							<td>$520.00</td>
							<td>Cash On Delivery</td>
							<td>
								<div class="badge rounded-pill bg-light-info text-info w-100">
									pending</div>
							</td>

						</tr>

						<tr>
							<td>5</td>

							<td>06 September 2022</td>
							<td>EOS95189836</td>
							<td>$320.00</td>
							<td>Cash On Delivery</td>
							<td>
								<div class="badge rounded-pill bg-light-info text-info w-100">
									pending</div>
							</td>

						</tr>

						<tr>
							<td>6</td>

							<td>22 August 2022</td>
							<td>EOS85742385</td>
							<td>$1520.00</td>
							<td>Stripe</td>
							<td>
								<div class="badge rounded-pill bg-light-info text-info w-100">
									pending</div>
							</td>

						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

</div>
<!--end page wrapper -->


<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->

@endsection
