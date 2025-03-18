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
				<a href="https://digi-poly.id.vn/vendor/add/product" class="btn btn-primary">Add Product</a>
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

						<tr>
							<td> 1 </td>
							<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740391100708280.webp" style="width: 70px; height:40px;"> </td>
							<td>Fashion Bizz Antique Handmade Vintag</td>
							<td>590</td>
							<td>400</td>

							<td>
								<span class="badge rounded-pill bg-danger"> 15%</span>
							</td>



							<td> <span class="badge rounded-pill bg-success">Active</span>
							</td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/edit/product/20" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/delete/product/20" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>

								<a href="https://digi-poly.id.vn/edit/category/20" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/product/inactive/20" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

							</td>
						</tr>

						<tr>
							<td> 2 </td>
							<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390669284753.webp" style="width: 70px; height:40px;"> </td>
							<td>Meraki Wonder Adjustable Cell Phone Holder</td>
							<td>1200</td>
							<td>400</td>

							<td>
								<span class="badge rounded-pill bg-danger"> 17%</span>
							</td>



							<td> <span class="badge rounded-pill bg-success">Active</span>
							</td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/edit/product/17" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/delete/product/17" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>

								<a href="https://digi-poly.id.vn/edit/category/17" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/product/inactive/17" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

							</td>
						</tr>

						<tr>
							<td> 3 </td>
							<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390521459260.jpeg" style="width: 70px; height:40px;"> </td>
							<td>Epson L3200 Multi-function Color</td>
							<td>1200</td>
							<td>400</td>

							<td>
								<span class="badge rounded-pill bg-danger"> 67%</span>
							</td>



							<td> <span class="badge rounded-pill bg-success">Active</span>
							</td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/edit/product/16" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/delete/product/16" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>

								<a href="https://digi-poly.id.vn/edit/category/16" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/product/inactive/16" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

							</td>
						</tr>

						<tr>
							<td> 4 </td>
							<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390277372812.webp" style="width: 70px; height:40px;"> </td>
							<td>Canon PIXMA G1010 Single Function</td>
							<td>1200</td>
							<td>400</td>

							<td>
								<span class="badge rounded-pill bg-danger"> 17%</span>
							</td>



							<td> <span class="badge rounded-pill bg-success">Active</span>
							</td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/edit/product/13" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/delete/product/13" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>

								<a href="https://digi-poly.id.vn/edit/category/13" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/product/inactive/13" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

							</td>
						</tr>

						<tr>
							<td> 5 </td>
							<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740390147168644.webp" style="width: 70px; height:40px;"> </td>
							<td>Regular Fit Men Beige Cotton Blend Trousers</td>
							<td>700</td>
							<td>400</td>

							<td>
								<span class="badge rounded-pill bg-danger"> 7%</span>
							</td>



							<td> <span class="badge rounded-pill bg-success">Active</span>
							</td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/edit/product/12" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/delete/product/12" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>

								<a href="https://digi-poly.id.vn/edit/category/12" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/product/inactive/12" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

							</td>
						</tr>

						<tr>
							<td> 6 </td>
							<td> <img src="https://digi-poly.id.vn/upload/products/thambnail/1740389864437655.webp" style="width: 70px; height:40px;"> </td>
							<td>Color Block Men Round Neck Pink T-Shirt</td>
							<td>590</td>
							<td>200</td>

							<td>
								<span class="badge rounded-pill bg-danger"> 32%</span>
							</td>



							<td> <span class="badge rounded-pill bg-success">Active</span>
							</td>

							<td>
								<a href="https://digi-poly.id.vn/vendor/edit/product/9" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/delete/product/9" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>

								<a href="https://digi-poly.id.vn/edit/category/9" class="btn btn-warning" title="Details Page"> <i class="fa fa-eye"></i> </a>

								<a href="https://digi-poly.id.vn/vendor/product/inactive/9" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>

							</td>
						</tr>


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