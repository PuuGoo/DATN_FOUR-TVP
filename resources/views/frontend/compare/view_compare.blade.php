@extends('frontend.master_dashboard')
@section('main')

    @section('title')
        Compare Page
    @endsection

    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ url('/') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                <span></span> Compare
            </div>
        </div>
    </div>

    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-xl-10 col-lg-12 m-auto">
                <h1 class="heading-2 mb-10">Products Compare</h1>
                <h6 class="text-body mb-40">There are products to compare</h6>
                <div class="table-responsive">
                    <table class="table text-center table-compare">
                        <tbody id="compare">

                            @foreach ($compareItems as $item)
                                {{-- @dd($compareItems) --}}
                                <tr class="compare-row" data-id="{{ $item->id }}">
                                <tr class="pr_image">
                                    <td class="text-muted font-sm fw-600 font-heading mw-200">Preview</td>
                                    <td class="row_img">
                                        <img src="{{ asset('upload/products/thambnail/' . $item->product->product_thumnail) }}"
                                            style="width:300px; height:300px;" alt="compare-img">
                                    </td>
                                </tr>
                                <tr class="pr_title">
                                    <td class="text-muted font-sm fw-600 font-heading">Name</td>
                                    <td class="product_name">
                                        <h6><a href="{{ url('product/' . $item->product->id) }}"
                                                class="text-heading">{{ $item->product->product_name ?? 'No Product Found' }}
                                            </a></h6>
                                    </td>
                                </tr>
                                <tr class="pr_price">
                                    <td class="text-muted font-sm fw-600 font-heading">Price</td>
                                    <td class="product_price">
                                        <h4 class="price text-brand">{{ number_format($item->product->selling_price, 2) }}</h4>
                                    </td>
                                </tr>
                                <tr class="description">
                                    <td class="text-muted font-sm fw-600 font-heading">Description</td>
                                    <td class="row_text font-xs">
                                        <p class="font-sm text-muted">
                                            {{ $item->product->short_descp ?? 'No description available' }}
                                        </p>
                                    </td>
                                </tr>
                                <tr class="pr_stock">
                                    <td class="text-muted font-sm fw-600 font-heading">Stock status</td>
                                    <td class="row_stock">
                                        <span
                                            class="stock-status {{ $item->product->status > 0 ? 'text-success' : 'text-danger' }}">
                                            {{ $item->product->status > 0 ? 'Còn hàng' : 'Hết hàng' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr class="pr_remove text-muted">
                                    <td class="text-muted font-md fw-600"></td>
                                    <td class="row_remove">
                                        <form action="{{ route('compare.remove', ['id' => $item->id]) }}" method="POST"
                                            style="display: inline;" onsubmit="return confirmDelete(event);">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fi-rs-trash mr-5"></i> Remove
                                            </button>
                                        </form>

                                    </td>
                                </tr>


                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(event) {
            if (!confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi danh sách so sánh?")) {
                event.preventDefault(); // Ngăn không cho form gửi đi nếu người dùng chọn "Hủy"
                return false;
            }
            return true; // Cho phép form gửi đi nếu chọn "OK"
        }
    </script>

@endsection