@extends('vendor.vendor_dashboard')
@section('vendor')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Vendor Return Order</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Vendor Return Order</li>
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
						@foreach($orders as $key => $order)
						<tr>
							<td>{{ $key + 1 }}</td>
							<td>{{ $order->created_at->format('d-m-Y') }}</td>
							<td>{{ $order->invoice_no }}</td>
							<td>${{ number_format($order->total_amount, 2) }}</td>
							<td>{{ $order->payment_method }}</td>
							<td>{{ $order->return_reason ?? 'N/A' }}</td>
							<td>
								<span class="badge bg-warning">{{ ucfirst($order->status) }}</span>
							</td>
							<td>
								<a href="{{ route('vendor.order.details', $order->id) }}" class="btn btn-info btn-sm">
									View
								</a>
							</td>
						</tr>
						@endforeach
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