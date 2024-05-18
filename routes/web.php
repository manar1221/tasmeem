<?php

use App\Http\Livewire\Admin\AdminAddBlogComponent;
use App\Http\Livewire\Admin\AdminAddCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddCourseComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminBlogComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminCourseComponent;
use App\Http\Livewire\Admin\AdminEditBlogComponent;
use App\Http\Livewire\Admin\AdminEditCategoriesComponent;
use App\Http\Livewire\Admin\AdminEditCourseComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\AdminComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\BolgComponent;
use App\Http\Livewire\CourcesComponent;
use App\Http\Livewire\GalleryComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\StoreComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('languageConverter/{locale}',function($locale){
    if(in_array($locale,['ar','en'])){
        session()->put('locale',$locale);
    }
    return redirect()->back();

})->name('languageConverter');



Route::middleware('auth')->group(function () {
    Route::get('/', HomeComponent::class )->name('home.index');

    Route::get('/store', StoreComponent::class )->name('store');

    Route::get('/gallery', GalleryComponent::class )->name('gallery');

    Route::get('/blog', BlogComponent::class )->name('blog');

    Route::get('/cources', CourcesComponent::class )->name('cources');
});

Route::middleware('auth','authadmin')->group(function () {
    Route::get('/admin', AdminComponent::class )->name('admin');

Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');

Route::get('/admin/category/add',AdminAddCategoriesComponent::class)->name('admin.category.add');

Route::get('/admin/category/edit/{category_id}',AdminEditCategoriesComponent::class)->name('admin.category.edit');

Route::get('/product-category/{id}',\App\Http\Livewire\CategoryComponent::class)->name('product.category');

// proucts
Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');

Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');

Route::get('/admin/product/edit/{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');

// Route::get('/product/{id}',DetailsComponent::class)->name('product.details');

// blogs
Route::get('/admin/blogs',AdminBlogComponent::class)->name('admin.blogs');

Route::get('/admin/blog/add',AdminAddBlogComponent::class)->name('admin.blog.add');

Route::get('/admin/blog/edit/{blog_id}',AdminEditBlogComponent::class)->name('admin.blog.edit');

// course
Route::get('/admin/courses',AdminCourseComponent::class)->name('admin.courses');

Route::get('/admin/course/add',AdminAddCourseComponent::class)->name('admin.course.add');

Route::get('/admin/course/edit/{course_id}',AdminEditCourseComponent::class)->name('admin.course.edit');

});

require __DIR__.'/auth.php';
