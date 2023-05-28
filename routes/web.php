<?php

use App\Http\Controllers\Backend\AboutSectionController;
use App\Http\Controllers\Backend\HeaderController;
use App\Http\Controllers\Backend\HomeSectionController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ProfileController as BackendProfileController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\SkillsSectionCOntroller;
use App\Http\Controllers\Backend\TestimonialsControllers;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('/admin/dashboard', function () {
    return view('backend/index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Backend All Route
// Profile Controller
Route::controller(BackendProfileController::class)->group(function() {
    // Logout
    Route::get('/admin/logout', 'destroy')->name('admin.logout');

    // update profile
    Route::get('/admin/my-profile', 'ProfileSetting')->name('profile.setting');
    Route::patch('/admin/my-profile/store', 'ProfileStore')->name('store.profile');
    Route::patch('/admin/my-profile/update-password', 'UpdatePassword')->name('update.password');
});

// header controller
Route::controller(HeaderController::class)->group(function() {
    // Icon Class
    Route::get('/admin/icon/remix-icon', 'RemixIconShow')->name('remix.icon');
    Route::get('/admin/icon/material-icon', 'MaterialIconShow')->name('material.icon');
    Route::get('/admin/icon/fontawesome-icon', 'FontawesomeIconShow')->name('fontawesome.icon');

    // Header
    Route::get('/admin/header', 'AdminHeader')->name('admin.header');
    Route::patch('/admin/header/store', 'StoreHeader')->name('store.header');
});

// home section
Route::controller(HomeSectionController::class)->group(function() {
    Route::get('admin/section-home', 'SectionHome')->name('admin.section.home');
    Route::patch('admin/section-home/store', 'SectionHomeStore')->name('store.section.home');
});

// about section
Route::controller(AboutSectionController::class)->group(function() {
    Route::get('admin/section-about', 'SectionAbout')->name('admin.section.about');
    Route::patch('admin/section-about/store', 'SectionAboutStore')->name('store.section.about');

    // education
    Route::post('admin/education/store', 'EducationStore')->name('store.education');
    Route::patch('admin/education/update/{id}', 'EducationUpdate')->name('update.education');
    Route::delete('admin/education/delete/{id}', 'EducationDelete')->name('delete.education');

    // experience
    Route::post('admin/experience/store', 'ExperienceStore')->name('store.experience');
    Route::patch('admin/experience/update/{id}', 'ExperienceUpdate')->name('update.experience');
    Route::delete('admin/experience/delete/{id}', 'ExperienceDelete')->name('delete.experience');
});

// SKills Section
Route::controller(SkillsSectionCOntroller::class)->group(function() {
    Route::get('admin/section-skills', 'SectionSkills')->name('admin.section.skills');

    // SKill 1
    Route::patch('admin/sklill1/update', 'UpdateSkill1')->name('update.skill1');
    Route::post('admin/skill1-detail/store', 'SKill1DetailStore')->name('store.detail.skill1');
    Route::patch('admin/skill1-detail/update/{id}', 'SKill1DetailUpdate')->name('update.detail.skill1');
    Route::delete('admin/skill1-detail/delete/{id}', 'SKill1DetailDelete')->name('delete.detail.skill1');

    // SKill 2
    Route::patch('admin/sklill2/update', 'UpdateSkill2')->name('update.skill2');
    Route::post('admin/skill2-detail/store', 'SKill2DetailStore')->name('store.detail.skill2');
    Route::patch('admin/skill2-detail/update/{id}', 'SKill2DetailUpdate')->name('update.detail.skill2');
    Route::delete('admin/skill2-detail/delete/{id}', 'SKill2DetailDelete')->name('delete.detail.skill2');

    // SKill 3
    Route::patch('admin/sklill3/update', 'UpdateSkill3')->name('update.skill3');
    Route::post('admin/skill3-detail/store', 'SKill3DetailStore')->name('store.detail.skill3');
    Route::patch('admin/skill3-detail/update/{id}', 'SKill3DetailUpdate')->name('update.detail.skill3');
    Route::delete('admin/skill3-detail/delete/{id}', 'SKill3DetailDelete')->name('delete.detail.skill3');
});

// Portfolio section
Route::controller(PortfolioController::class)->group(function() {
    // caregory
    Route::get('admin/section-portfolio/category', 'PortfolioCategory')->name('admin.section.category');
    Route::post('admin/section-portfolio/category/store', 'PortfolioCategoryStore')->name('store.portfolio.category');
    Route::patch('admin/section-portfolio/category/update/{id}', 'PortfolioCategoryUpdate')->name('update.portfolio.category');
    Route::delete('admin/section-portfolio/category/delete/{id}', 'PortfolioCategoryDelete')->name('delete.portfolio.category');

    // all portfolio
    Route::get('admin/section-portfolio/portfolio', 'Portfolio')->name('admin.section.portfolio');
    Route::post('admin/section-portfolio/store', 'PortfolioStore')->name('store.portfolio');
    Route::patch('admin/section-portfolio/update/{id}', 'PortfolioUpdate')->name('update.portfolio');
    Route::delete('admin/section-portfolio/delete/{id}', 'PortfolioDelete')->name('delete.portfolio');
});

// Service Controller
Route::controller(ServicesController::class)->group(function() {

    Route::get('admin/section-services', 'Services')->name('admin.section.services');
    Route::post('admin/section-services/store', 'ServicesStore')->name('store.services');
    Route::patch('admin/section-services/update/{id}', 'ServicesUpdate')->name('update.services');
    Route::delete('admin/section-services/delete/{id}', 'ServicesDelete')->name('delete.services');

});

// Testimonials Sections
Route::controller(TestimonialsControllers::class)->group(function() {

    Route::get('admin/section-testimonials', 'Testimonials')->name('admin.section.testimonials');
    Route::post('admin/section-testimonials/store', 'TestimonialsStore')->name('store.testimonials');
    Route::patch('admin/section-testimonials/update/{id}', 'TestimonialsUpdate')->name('update.testimonials');
    Route::delete('admin/section-testimonials/delete/{id}', 'TestimonialsDelete')->name('delete.testimonials');

    // message from contact form
    Route::get('admin/section-messages', 'Messages')->name('admin.section.messages');
    Route::get('admin/section-messages/removeall', 'removeall')->name('users.removeall');

});

// End Backend controller


// Frontend Controller
Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'FrontendHome')->name('frontend.home');
    Route::post('/send-message', 'SendMessage')->name('store.message');
});


//file manager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
