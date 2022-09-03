<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DistrictsController;
use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TestimonialController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'getAllData'])->name('index.home');

Route::controller(PagesController::class)->group(function () {

});
Route::get('/account', function () {
    return view('frontend.pages.accounts');
});

Route::get('/wishlist', function () {
    return view('frontend.pages.wishlist');
});


Route::prefix('admin')->group(function(){

});
Route::get('/admin/home', function () {
    return view('backend.pages.index');
});
Route::get('admin/category',  [CategoryController::class, 'categoryList'])->name('categoryList');
Route::post('/admin/category/store', [CategoryController::class, 'categoryStore'])->name('store.category');
//end frontend route
Route::get('/admin/edit/category/{id}',  [CategoryController::class, 'categoryEdit'])->name('category.edit');
Route::post('/admin/update/category/{id}',  [CategoryController::class, 'categoryUpdate'])->name('category.update');
Route::get('/admin/delete/category/{id}',  [CategoryController::class, 'categoryDelete'])->name('categoryDelete');
//Route::get('admin/category/{id}',[\App\Http\Controllers\CategoryController::class,'ActiveStatus']);

Route::get('/admin/colors',  [ColorsController::class, 'colorsList'])->name('color.List');
Route::post('/admin/colors/store', [ColorsController::class, 'colorsStore'])->name('store.color');
//end frontend route a
Route::get('/admin/edit/colors/{id}',  [ColorsController::class, 'colorsEdit'])->name('color.edit');
Route::post('/admin/update/colors/{id}',  [ColorsController::class, 'colorsUpdate'])->name('color.update');
Route::get('/admin/delete/colors/{id}',  [ColorsController::class, 'colorsDelete'])->name('color.delete');

Route::get('admin/subcategory',  [SubcategoryController::class, 'subCatList'])->name('subCat.List');
Route::post('admin/subcategory/store', [SubcategoryController::class, 'subCatStore'])->name('store.subcategory');
//end frontend route a
Route::get('admin/edit/subcategory/{id}',  [SubcategoryController::class, 'subCatEdit'])->name('subCat.edit');
Route::post('admin/update/subcategory/{id}',  [SubcategoryController::class, 'subCatUpdate'])->name('subCat.update');
Route::get('admin/delete/subcategory/{id}',  [SubcategoryController::class, 'subCatDelete'])->name('subCat.delete');


Route::get('admin/testimonial',  [TestimonialController::class, 'testimonialList'])->name('testimonial.List');
Route::post('admin/testimonial/store', [TestimonialController::class, 'testimonialStore'])->name('store.testimonial');
Route::get('admin/edit/testimonial/{id}',  [TestimonialController::class, 'testimonialEdit'])->name('testimonial.edit');
Route::post('admin/update/testimonial/{id}',  [TestimonialController::class, 'testimonialUpdate'])->name('testimonial.update');
Route::get('admin/delete/testimonial/{id}',  [TestimonialController::class, 'testimonialDelete'])->name('testimonial.delete');


Route::get('admin/slider',  [SliderController::class, 'sliderList'])->name('slider.List');
Route::get('admin/slider/add',  [SliderController::class, 'Addslider'])->name('slider.add');
Route::post('admin/slider/store', [SliderController::class, 'sliderStore'])->name('store.slider');
//end frontend route
Route::get('admin/edit/slider/{id}',  [SliderController::class, 'sliderEdit'])->name('slider.edit');
Route::post('admin/update/slider/{id}',  [SliderController::class, 'sliderUpdate'])->name('slider.update');
Route::get('admin/delete/slider/{id}',  [SliderController::class, 'sliderDelete'])->name('slider.Delete');

//Route::get('/admin/color/status/{status}/{id}',[ColorController::class,'status']);
Route::get('/admin/offer',  [OffersController::class, 'offerList'])->name('offer.List');
Route::post('/admin/offer/store', [OffersController::class, 'offerStore'])->name('store.offer');
//end frontend route
Route::get('/admin/edit/offer/{id}',  [OffersController::class, 'offerEdit'])->name('offer.edit');
Route::post('/admin/update/offer/{id}',  [OffersController::class, 'offerUpdate'])->name('offer.update');
Route::get('/admin/delete/offer/{id}',  [OffersController::class, 'offerDelete'])->name('offer.Delete');

Route::get('/contact', [ContactsController::class,'createContactFormInput']);
Route::post('/contact', [ContactsController::class, 'ContactFormInput'])->name('contact.add');

Route::get('/add_product',[ProductController::class,'Addproduct'])->name('product.add');

Route::get('/carts', function () {
    return view('frontend.pages.carts');
});

Route::get('/checkouts', function () {
    return view('frontend.pages.checkouts');
});

Route::get('/shop', function () {
    return view('frontend.pages.shop');
});


Route::get('/checkout', function () {
    return view('frontend.pages.checkouts');
});

Route::get('/blog', function () {
    return view('frontend.pages.blog');
});

Route::get('/shop-single', function () {
    return view('frontend.pages.singleShop');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
