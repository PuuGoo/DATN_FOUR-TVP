@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">All Inactive Vendor</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Inactive Vendor</li>
				</ol>
			</nav>
		</div>
		<div class="ms-auto">
			<div class="btn-group">

			</div>
		</div>
	</div>
	<!--end breadcrumb-->

	<hr/>
	<div class="card">
		<div class="card-body">
			<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
<tr>
	<th>Sl</th>
	<th>Shop Name </th>
	<th>Vendor Username </th>
	<th>Join Date  </th>
	<th>Vendor Email </th>
	<th>Status </th>
	<th>Action</th>
</tr>
</thead>
<tbody>
    @foreach($inactiveVendors as $key => $vendor)
    <tr>
        <th>{{ $key+1 }}</th>
		<td>{{ $vendor->name }}</td>
		<td>{{ $vendor->username }}</td>
		<td>{{ $vendor->created_at }}</td>
		<td>{{ $vendor->email }}</td>
        <th>
            <span class="badge bg-warning">Inactive</span>
        </th>
        <th>
            <!-- Nút chuyển đến trang chi tiết vendor -->
            <a href="{{ route('inactive.vendor.details', $vendor->id) }}" class="btn btn-info">Vendor Details</a>

            <!-- Form cập nhật trạng thái -->
            <form action="{{ route('vendor.updateStatus', $vendor->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success">Active</button>
            </form>
        </th>
    </tr>
    @endforeach

</tbody>
<tfoot>
    <tr>
        <th>Sl</th>
        <th>Shop Name </th>
        <th>Vendor Username </th>
        <th>Join Date  </th>
        <th>Vendor Email </th>
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
