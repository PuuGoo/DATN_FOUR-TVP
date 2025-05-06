@extends('vendor.vendor_dashboard')
@section('vendor')

<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Vendor All Product</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Vendor All Product <span class="badge rounded-pill bg-danger"> 6 </span> </li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">
				<a href="{{ route('vendor.add.product') }}" class="btn btn-primary">Add Product</a>
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
							<th>Image </th>
							<th>Product Name </th>
							<th>Price </th>
							<th>QTY </th>
							<th>Discount </th>
							<th>Status </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($products as $key => $product)
						<tr>
							<td> {{ $key+1 }} </td>
							<td> <img src="{{ asset($product->product_thumnail) }}" style="width: 70px; height:40px;"> </td>
							<td>{{ $product->product_name }}</td>
							<td>{{ $product->selling_price }}</td>
							<td>{{ $product->product_qty }}</td>
							<td>
								<span class="badge rounded-pill bg-danger"> {{ $product->discount }}%</span>
							</td>
							<td>
								<span class="badge rounded-pill bg-{{ $product->status == 1 ? 'success' : 'danger' }}">
									{{ $product->status == 1 ? 'Active' : 'Inactive' }}
								</span>
							</td>

							<td>
								<a href="{{ route('vendor.edit.product', $product->id) }}" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>
								<a href="{{ route('vendor.delete.product', $product->id) }}" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
								<a href="{{ route('vendor.product.inactive', $product->id) }}" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th>Sl</th>
							<th>Image </th>
							<th>Product Name </th>
							<th>Price </th>
							<th>QTY </th>
							<th>Discount </th>
							<th>Status </th>
							<th>Action</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection