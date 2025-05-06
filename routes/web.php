<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ActiveUserController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ReturnController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\VendorOrderController;
use App\Http\Controllers\Backend\VendorProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\AllUserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\CompareController;
use App\Http\Controllers\User\StripeController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;



/// Admin Dashboard

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');
});

Route::get('/api/categories/{idpr}', [CategoryController::class, 'subcategoryapi']);

Route::middleware(['auth', 'role:admin'])->group(function () {


    // Brand All Route 
    Route::controller(BrandController::class)->group(function () {
        Route::get('/all/brand', 'AllBrand')->name('all.brand');
        Route::get('/add/brand', 'AddBrand')->name('add.brand');
        Route::post('/store/brand', 'StoreBrand')->name('store.brand');
        Route::get('/edit/brand/{id}', 'EditBrand')->name('edit.brand');
        Route::post('/update/brand', 'UpdateBrand')->name('update.brand');
        Route::get('/delete/brand/{id}', 'DeleteBrand')->name('delete.brand');
    });


    // Category All Route 
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });



    // Vendor Active and Inactive All Route
    Route::controller(AdminController::class)->group(function () {
        Route::get('/inactive/vendor', 'InactiveVendor')->name('inactive.vendor');
        Route::get('/active/vendor', 'ActiveVendor')->name('active.vendor');
        Route::get('/inactive/vendor/details/{id}', 'InactiveVendorDetails')->name('inactive.vendor.details');
        Route::get('/active/vendor/details/{id}', 'ActiveVendorDetails')->name('active.vendor.details');
        Route::post('/vendor/update-status/{id}', 'UpdateVendorStatus')->name('vendor.updateStatus');
    });


    // Product All Route 
    Route::controller(ProductController::class)->group(function () {
        Route::get('/all/product', 'AllProduct')->name('all.product');
        Route::get('/add/product', 'AddProduct')->name('add.product');
        Route::post('/store/product', 'StoreProduct')->name('store.product');
        Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product');
        Route::post('/update/product', 'UpdateProduct')->name('update.product');
        Route::get('/inactive/product/{id}', 'InactiveProduct')->name('inactive.product');
        Route::get('/delete/product/{id}', 'DeleteProduct')->name('delete.product');
    });


    // Slider All Route
    Route::controller(SliderController::class)->group(function () {
        Route::get('/all/slider', 'AllSlider')->name('all.slider');
        Route::get('/add/slider', 'AddSlider')->name('add.slider');
        Route::post('/store/slider', 'StoreSlider')->name('store.slider');
        Route::get('/edit/slider/{id}', 'EditSlider')->name('edit.slider');
        Route::post('/edit_/slider', 'UpdateSlider')->name('edit_.slider');
        Route::get('/delete/slider/{id}', 'DeleteSlider')->name('delete.slider');
    });

    // Banner All Route 
    Route::controller(BannerController::class)->group(function () {
        Route::get('/all/banner', 'AllBanner')->name('all.banner');
        Route::get('/add/banner', 'AddBanner')->name('add.banner.form'); //hiển thị form
        Route::post('/add/banner', 'storeBanner')->name('add.banner'); //thêm
        Route::get('/delete/banner/{id}', 'deleteBanner')->name('delete.banner'); //xoá
        Route::get('/edit/banner/{id}', 'editBanner')->name('edit.banner'); //hiển thị form edit
        Route::post('/update/banner/{id}', 'updateBanner')->name('update.banner'); //cập nhật
    });


    // Coupon All Route 
    Route::controller(CouponController::class)->group(function () {
        Route::get('/all/coupon', 'AllCoupon')->name('all.coupon');
        Route::match(['get', 'post'], '/add/coupon', 'AddCoupon')->name('add.coupon');
        Route::get('/edit/coupon/{id}', 'EditCoupon')->name('edit.coupon');
        Route::put('/update/coupon/{id}', 'UpdateCoupon')->name('update.coupon');

        Route::delete('/delete/coupon/{id}', [CouponController::class, 'DeleteCoupon'])->name('delete.coupon');
    });

    // Admin Order All Route 
    Route::controller(OrderController::class)->group(function () {
        Route::get('/pending/order', 'PendingOrder')->name('pending.order');
        Route::get('/admin/order/details/{id}', 'AdminOrderDetails')->name('admin.order.details'); //chi tiết đơn hàng
        Route::get('/admin/confirmed/order', 'AdminConfirmedOrder')->name('admin.confirmed.order'); //danh sách đã xác nhận
        Route::get('/admin/processing/order', 'AdminProcessingOrder')->name('admin.processing.order'); //danh sách đang xử lý
        Route::get('/admin/delivered/order', 'AdminDeliveredOrder')->name('admin.delivered.order'); //danh sách đã giao hàng

        Route::get('order/change/confirmed/{id}', 'ChangeConfirmedOrder')->name('change.order.confirmed'); //confirmed

        Route::get('order/change/processing/{id}', 'ChangeProcessingOrder')->name('change.order.processing'); //processing

        Route::get('order/change/delivered/{id}', 'ChangeDeliveryOrder')->name('change.order.delivered'); //delivery
    });


    // Return Order All Route 
    Route::controller(ReturnController::class)->group(function () {
        Route::get('/return/request', 'ReturnRequest')->name('return.request');

        Route::get('/complete/return/request', 'CompleteReturnRequest')->name('complete.return.request');
    });


    // Report All Route 
    Route::controller(ReportController::class)->group(function () {
        Route::get('/report/view', 'ReportView')->name('report.view');
        Route::get('/order/by/user', 'OrderByUser')->name('order.by.user');
    });


    // Active user and vendor All Route 
    Route::controller(ActiveUserController::class)->group(function () {
        //user
        Route::get('/all/user', 'AllUser')->name('all-user');
        Route::get('/user/edit/{id}', 'editUser')->name('edit.users');
        Route::post('/user/update/{id}', 'updateUser')->name('update.users');
        Route::get('/user/delete/{id}', 'delelteUser')->name('delete.users');
        //vendor
        Route::get('/all/vendor', 'AllVendor')->name('all-vendor');
        Route::get('/vendor/edit/{id}', 'editVendor')->name('edit.Vendor');
        Route::post('/vendor/update/{id}', 'updateVendor')->name('update.Vendor');
        Route::get('/vendor/delete/{id}', 'delelteVendor')->name('delete.Vendor');
    });


    // Blog Category All Route
    Route::controller(BlogCategoryController::class)->group(function () {
        Route::get('/admin/blog/category', 'AllBlogCategory')->name('admin.blog.category');
        Route::get('/admin/add/blog/category', 'AddBlogCategory')->name('add.blog.category');
        Route::post('/admin/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
        Route::get('/admin/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
        Route::post('/admin/update/blog/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');
        Route::get('/admin/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
    });



    // Blog Post All Route
    Route::controller(BlogController::class)->group(function () {
        Route::get('/admin/blog/post', 'AllBlogPost')->name('admin.blog.post');
        Route::get('/admin/add/blog/post', 'AddBlogPost')->name('add.blog.post');
        Route::post('/admin/store/blog/post', 'StoreBlogPost')->name('store.blog.post');
        Route::get('/admin/edit/blog/post/{id}', 'EditBlogPost')->name('edit.blog.post');
        Route::post('/admin/update/blog/post', 'UpdateBlogPost')->name('update.blog.post');
        Route::get('/admin/delete/blog/post/{id}', 'DeleteBlogPost')->name('delete.blog.post');
    });


    // Admin Reviw All Route 
    Route::controller(ReviewController::class)->group(function () {
        Route::get('/pending/review', 'PendingReview')->name('pending.review');
        Route::get('/review/approve/{id}', 'ReviewApprove')->name('review.approve');
        Route::get('/publish/review', 'PublishReview')->name('publish.review');
        Route::get('/review/delete/{id}', 'ReviewDelete')->name('review.delete');
    });



    // Site Setting All Route 
    Route::controller(SiteSettingController::class)->group(function () {
        Route::get('/site/setting', [SiteSettingController::class, 'editSiteSetting'])->name('site.setting');

        Route::get('/seo/setting', 'SeoSetting')->name('seo.setting'); // Hiển thị trang SEO
        Route::post('/site/setting/update/{id}', [SiteSettingController::class, 'UpdateSiteSetting'])->name('site.setting.update');
    });


    // Permission All Route 
    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/permission', 'AllPermission')->name('all.permission');
        Route::get('/add/permission', 'AddPermission')->name('add.permission');
        Route::post('/store/permission', 'StorePermission')->name('store.permission');
        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
        Route::get('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');
    });


    // Roles All Route 
    // Roles All Route 
    Route::controller(RoleController::class)->group(function () {

        Route::get('/all/roles', 'AllRoles')->name('all.roles');
        Route::get('/add/roles', 'AddRoles')->name('add.roles');
        Route::post('/store/roles', 'StoreRoles')->name('store.roles');
        Route::get('/edit/roles/{id}', 'EditRoles')->name('edit.roles');

        Route::post('/update/roles', 'UpdateRoles')->name('update.roles');

        Route::get('/delete/roles/{id}', 'DeleteRoles')->name('delete.roles');

        // add role permission 

        Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');

        Route::post('/role/permission/store', 'RolePermissionStore')->name('role.permission.store');

        Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');

        Route::get('/admin/edit/roles/{id}', 'AdminRolesEdit')->name('admin.edit.roles');

        Route::post('/admin/roles/update/{id}', 'AdminRolesUpdate')->name('admin.roles.update'); //There is no permission named `40` for guard `web`.

        Route::get('/admin/delete/roles/{id}', 'AdminRolesDelete')->name('admin.delete.roles');
    });

    // Admin User All Route 
    Route::controller(AdminController::class)->group(function () {
        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin', 'AddAdmin')->name('add.admin');

        Route::post('/admin/store', 'StoreAdmin')->name('admin.store');

        Route::get('/admin/dashboard',  'AdminDashboard')->name('admin.dashboard');

        Route::get('/admin/logout',  'AdminDestroy')->name('admin.logout');

        Route::get('/admin/profile/{id}', 'AdminProfile')->name('admin.profile');

        Route::post('/admin/profile/store/{id}',  'AdminProfileStore')->name('admin.profile.store');

        Route::get('/admin/change/password',  'AdminChangePassword')->name('admin.change.password');

        Route::post('/admin/update/password',  'AdminUpdatePassword')->name('update.password');

        Route::delete('/admin/delete/{id}', 'DeleteAdmin')->name('delete.admin');
    });
}); // Admin End Middleware 

require __DIR__ . '/auth.php';

// Xử lý Front-End
// Quang Thanh Start
Route::get('/', [IndexController::class, 'Index'])->name('home'); // Check Done

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard'); // Check Done

    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store'); // Check Done

    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout'); // Check Done

    Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update.password'); // Check Done(Ko thay thay doi mat khau)
}); // Quang Thanh End

/// Vendor Dashboard
// Minh Tan Start
Route::middleware(['auth', 'role:vendor'])->group(function () {

    Route::get('/vendor/dashboard', [VendorController::class, 'VendorDashboard'])->name('vendor.dashobard'); // Chua lam

    Route::get('/vendor/logout', [VendorController::class, 'VendorDestroy'])->name('vendor.logout'); // Chua lam

    Route::get('/vendor/profile', [VendorController::class, 'VendorProfile'])->name('vendor.profile'); // Chua lam

    Route::post('/vendor/profile/store', [VendorController::class, 'VendorProfileStore'])->name('vendor.profile.store'); // Chua lam

    Route::get('/vendor/change/password', [VendorController::class, 'VendorChangePassword'])->name('vendor.change.password'); // Chua lam

    Route::post('/vendor/update/password', [VendorController::class, 'VendorUpdatePassword'])->name('vendor.update.password'); // Chua lam
    // Minh Tan End


    // Anh Thu Start
    // Vendor Add Product All Route 
    Route::controller(VendorProductController::class)->group(function () { // Check Done
        Route::get('/vendor/all/product', 'VendorAllProduct')->name('vendor.all.product');
        Route::get('/vendor/add/product', 'VendorAddProduct')->name('vendor.add.product');

        Route::post('/vendor/store/product', 'VendorStoreProduct')->name('vendor.store.product');
        Route::get('/vendor/store/product', 'VendorShowStoreProduct')->name('vendor.show.store.product');

        Route::get('/vendor/edit/product/{id}', 'VendorEditProduct')->name('vendor.edit.product');

        Route::post('/vendor/update/product', 'VendorUpdateProduct')->name('vendor.update.product');
        Route::post('/vendor/update/product/thambnail', 'VendorUpdateProductThabnail')->name('vendor.update.product.thambnail');

        Route::post('/vendor/update/product/multiimage', 'VendorUpdateProductmultiImage')->name('vendor.update.product.multiimage');

        Route::get('/vendor/product/multiimg/delete/{id}', 'VendorMultiimgDelete')->name('vendor.product.multiimg.delete');

        Route::get('/vendor/product/inactive/{id}', 'VendorProductInactive')->name('vendor.product.inactive');
        Route::get('/vendor/product/active/{id}', 'VendorProductActive')->name('vendor.product.active');

        Route::get('/vendor/delete/product/{id}', 'VendorProductDelete')->name('vendor.delete.product');

        Route::get('/vendor/subcategory/ajax/{category_id}', 'VendorGetSubCategory');
    });
    // Anh Thu End

    // Phuong Thai Start
    // Vendor Order All Route 
    Route::controller(VendorOrderController::class)->group(function () { // Check done
        Route::get('/vendor/order', 'VendorOrder')->name('vendor.order');

        Route::get('/vendor/return/order', 'VendorReturnOrder')->name('vendor.return.order');

        Route::get('/vendor/complete/return/order', 'VendorCompleteReturnOrder')->name('vendor.complete.return.order');
        Route::get('/vendor/order/details/{order_id}', 'VendorOrderDetails')->name('vendor.order.details');
    });



    Route::controller(ReviewController::class)->group(function () {

        Route::get('/vendor/all/review', 'VendorAllReview')->name('vendor.all.review');
    });
    // Phuong Thai End
});

// Phuoc Vinh Start
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class);

Route::get('/vendor/login', [VendorController::class, 'VendorLogin'])->name('vendor.login')->middleware(RedirectIfAuthenticated::class);

Route::get('/become/vendor', [VendorController::class, 'BecomeVendor'])->name('become.vendor');
Route::post('/vendor/register', [VendorController::class, 'VendorRegister'])->name('vendor.register');
Route::get('/api/product/variant/{id}', [IndexController::class, 'jsonvariantproduct']);
// Phuoc Vinh End

// Duc Phu Start
/// Frontend Product Details All Route 

Route::get('/api/product/variant/{id}', [IndexController::class, 'jsonvariantproduct']);
Route::get('/product/details/{id}/{slug}', [IndexController::class, 'ProductDetails'])->name('product.detail');;
Route::get('/vendor/details/{id}', [IndexController::class, 'VendorDetails'])->name('vendor.details');

Route::get('/vendor/all', [IndexController::class, 'VendorAll'])->name('vendor.all');

Route::get('/product/category/{id}/{slug}', [IndexController::class, 'CatWiseProduct'])->name('product.category');

// Duc Phu End

// Phuoc Vinh Start
// Product View Modal With Ajax
Route::get('/product/view/modal/{id}', [IndexController::class, 'ProductViewAjax']);
/// Add to cart store data
Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);

// Get Data from mini Cart
Route::get('/product/mini/cart', [CartController::class, 'AddMiniCart']);

Route::get('/minicart/product/remove/{rowId}', [CartController::class, 'RemoveMiniCart']);
// Phuoc Vinh End

// Phuong Thai Start
/// Add to cart store data For Product Details Page 
Route::post('/dcart/data/store/{id}', [CartController::class, 'AddToCartDetails'])->name('cart.add');

/// Add to Wishlist 
Route::post('/add-to-wishlist/{product_id}', [WishlistController::class, 'AddToWishList']);

/// Add to Compare 
Route::post('/add-to-compare/{product_id}', [CompareController::class, 'AddToCompare']);
// Phuong Thai End

// Minh Tan Start
/// Frontend Coupon Option
Route::post('/coupon-apply', [CartController::class, 'CouponApply']);

Route::get('/coupon-calculation', [CartController::class, 'CouponCalculation']);
Route::get('/coupon-remove', [CartController::class, 'CouponRemove']);
// Minh Tan End

// Duc Phu Start
// Checkout Page Route 
Route::get('/checkout', [CartController::class, 'CheckoutCreate'])->name('checkout');

// Cart All Route 
Route::controller(CartController::class)->group(function () { // Check done
    Route::get('/mycart', 'MyCart')->name('mycart');
    Route::get('/get-cart-product', 'GetCartProduct');
    Route::get('/cart-remove/{rowId}', 'CartRemove');

    Route::get('/cart-decrement/{rowId}', 'CartDecrement');
    Route::get('/cart-increment/{rowId}', 'CartIncrement');
});
// Duc Phu End

// Quang Thanh Start
// Frontend Blog Post All Route 
Route::controller(BlogController::class)->group(function () {

    Route::get('/blog', 'AllBlog')->name('home.blog');
    Route::get('/post/details/{id}/{slug}', 'BlogDetails')->name('blog.details');
    Route::get('/post/category/{id}/{slug}', 'BlogPostCategory')->name('blog.category');
});


// Frontend Blog Post All Route 
Route::controller(ReviewController::class)->group(function () {

    Route::post('/store/review', 'StoreReview')->name('store.review');
});



// Search All Route 
Route::controller(IndexController::class)->group(function () {

    Route::post('/search', 'ProductSearch')->name('product.search');
    Route::post('/search-product', 'SearchProduct');
});
// Quang Thanh End

// Minh Tan Start
/// User All Route
Route::middleware(['auth', 'role:user'])->group(function () {

    // Wishlist All Route 
    Route::controller(WishlistController::class)->group(function () {
        Route::get('/wishlist', 'AllWishlist')->name('wishlist');
        Route::get('/get-wishlist-product', 'GetWishlistProduct');
        Route::get('/wishlist-remove/{id}', 'WishlistRemove');
        Route::get('/wishlist-add/{product_id}', 'AddToWishList')->name('add.to.wishList');
    });
    // Minh Tan End

    // Phuong Thai Start

    // Compare All Route 
    Route::controller(CompareController::class)->group(function () {
        Route::get('/compare', 'AllCompare')->name('compare');
        Route::get('/get-compare-product', 'GetCompareProduct');
        Route::post('/compare-remove/{id}', 'CompareRemove')->name('compare.remove');
    });
    // Phuong Thai End


    // Phuoc Vinh Start
    // Checkout All Route 
    Route::controller(CheckoutController::class)->group(function () {
        Route::post('/checkout/store', 'CheckoutStore')->name('checkout.store');
    });


    // // Stripe All Route // Nên thay thành các phương thức thanh toán Momo, VNPAY,....
    // Route::controller(StripeController::class)->group(function () {
    //     Route::post('/stripe/order', 'StripeOrder')->name('stripe.order');
    //     Route::post('/cash/order', 'CashOrder')->name('cash.order');
    // });

    // Cổng thanh toán
    Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment'])->name('vnpay.payment');
    Route::post('/momo_payment', [PaymentController::class, 'momo_payment']);

    // Phuoc Vinh End

    // Anh Thu Start
    // User Dashboard All Route 
    Route::controller(AllUserController::class)->group(function () {
        Route::get('/user/account/page', 'UserAccount')->name('user.account.page');
        Route::get('/user/change/password', 'UserChangePassword')->name('user.change.password');
        Route::post('/user/change/password', [UserController::class, 'ChangePassword'])->name('user.change.password');
        Route::get('/user/order/page', 'UserOrderPage')->name('user.order.page');

        Route::get('/user/order_details/{order_id}', 'UserOrderDetails');
        Route::get('/user/invoice_download/{order_id}', 'UserOrderInvoice');

        Route::post('/return/order/{order_id}', 'ReturnOrder')->name('return.order');

        Route::get('/return/order/page', 'ReturnOrderPage')->name('return.order.page');

        // Order Tracking 
        Route::get('/user/track/order', 'UserTrackOrder')->name('user.track.order');
        Route::post('/order/tracking', 'OrderTracking')->name('order.tracking');
    });
});
// Anh Thu End
