@extends('vendor.vendor_dashboard')

@section('vendor')
<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Vendor Approve Review</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
					<li class="breadcrumb-item active" aria-current="page">Approve Review</li>
				</ol>
			</nav>
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
							<th>Image</th>
							<th>Product</th>
							<th>User</th>
							<th>Comment</th>
							<th>Rating</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($reviews as $key => $review)
						<tr>
							<td>{{ $key + 1 }}</td>
							<td>
								<img src="{{ asset('upload/products/thambnail/' . $review->product->product_thumbnail) }}" 
									style="width: 40px; height:40px;">
							</td>
							<td>{{ $review->product->product_name }}</td>
							<td>{{ $review->user->username }}</td>
							<td>{{ Str::limit($review->comment, 50) }}</td>
							<td>
								@for ($i = 1; $i <= 5; $i++)
									@if ($i <= $review->rating)
										<i class="bx bxs-star text-warning"></i>
									@else
										<i class="bx bxs-star text-secondary"></i>
									@endif
								@endfor
							</td>
							<td>
								<span class="badge rounded-pill {{ $review->status == 1 ? 'bg-success' : 'bg-warning' }}">
									{{ $review->status == 1 ? 'Approved' : 'Pending' }}
								</span>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Sl</th>
							<th>Image</th>
							<th>Product</th>
							<th>User</th>
							<th>Comment</th>
							<th>Rating</th>
							<th>Status</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
