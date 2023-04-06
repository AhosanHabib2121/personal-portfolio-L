<?php

use App\Http\Controllers\AboutAreaController;
use App\Http\Controllers\BannerAreaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationPartController;
use App\Http\Controllers\ExperiancePartController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoAndFaviconController;
use App\Http\Controllers\SocialIconsController;
use App\Http\Controllers\SelfInformationController;
use App\Http\Controllers\ServicesAreaController;
use App\Http\Controllers\HireTextController;
use App\Http\Controllers\TestimonialAreaController;
use App\Http\Controllers\ContactDescriptionController;
use App\Http\Controllers\PortfolioAreaController;
use App\Http\Controllers\Skills_areaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CvdownloadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

// FrontendController route start
Route::get('/', [FrontendController::class, 'index'])->name('index');
// FrontendController route end

// Auth controller start here
Auth::routes(['login'=>false]);
Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login/post', [LoginController::class, 'login'])->name('login.post');
// Auth controller end here

// HomeController route start
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/profile/page', [HomeController::class, 'admin_profile_page'])->name('admin_profile.page');
Route::post('admin/profile/update/{admin_id}', [HomeController::class, 'admin_profile_update'])->name('admin_profile.update');
Route::post('change/password', [HomeController::class, 'change_password'])->name('change_password');
// HomeController route end

// BannerAreaController route start
Route::get('update/page/{banner_area_id}', [BannerAreaController::class, 'update_page'])->name('update.page');
Route::post('update/data/{banner_area_id}', [BannerAreaController::class, 'update_data'])->name('update.data');
// BannerAreaController route end

// LogoAndFaviconController route start
Route::get('logo/favicon/update/page/{logo_favicon__id}', [LogoAndFaviconController::class, 'logo_favicon_update_page'])->name('logo_favicon_update.page');
Route::post('logo/faviocn/update/data/{logo_favicon__id}', [LogoAndFaviconController::class, 'logo_faviocn_update_data'])->name('logo_faviocn_update.data');
// LogoAndFaviconController route end

// SocialIconsController route start
Route::resource('social_icons',SocialIconsController::class);
Route::get('social/icon/restore/{id}', [SocialIconsController::class, 'social_icon_restore'])->name('social_icon.restore');
Route::get('social/icon/force/delete/{id}', [SocialIconsController::class, 'social_icon_force_delete'])->name('social_icon_force.delete');
// SocialIconsController route end

// AboutAreaController route start
Route::get('about/update/page/{about_area_id}', [AboutAreaController::class, 'about_update_page'])->name('about_update.page');
Route::post('about/update/data/{about_area_id}', [AboutAreaController::class, 'about_update_data'])->name('about_update.data');
// AboutAreaController route end

// SelfInformationController route start
Route::get('self/info/update/page/{self_info_area_id}', [SelfInformationController::class, 'self_info_update_page'])->name('self_info_update.page');
Route::post('self/info/update/data/{self_info_area_id}', [SelfInformationController::class, 'self_info_update_data'])->name('self_info_update.data');
// SelfInformationController route end

// ServicesAreaController route start
Route::resource('services',ServicesAreaController::class);
Route::get('services/restore/{id}', [ServicesAreaController::class, 'services_restore'])->name('services_restore');
Route::get('services/force/delete/{id}', [ServicesAreaController::class, 'services_force_delete'])->name('services_force_delete');
// ServicesAreaController route end

// EducationPartController route start
Route::resource('educations',EducationPartController::class);
Route::get('education/estore/{id}', [EducationPartController::class, 'education_restore'])->name('education_restore');
Route::get('education/force/delete/{id}', [EducationPartController::class, 'education_force_delete'])->name('education_force_delete');
// EducationPartController route end

// ExperiancePartController route start
Route::resource('experiance',ExperiancePartController::class);
Route::get('experiance/restore/{id}', [ExperiancePartController::class, 'experiance_restore'])->name('experiance_restore');
Route::get('experiance/force/delete/{id}', [ExperiancePartController::class, 'experiance_force_delete'])->name('experiance_force_delete');
// ExperiancePartController route end

// Skills_areaController route start
Route::get('skills/create', [Skills_areaController::class, 'skills_create'])->name('skills_create');
Route::get('skills/index', [Skills_areaController::class, 'skills_index'])->name('skills_index');
// design skill route here
Route::post('design/skills/store', [Skills_areaController::class, 'design_skills_store'])->name('design_skills.store');
Route::get('design/skills/edit/{id}', [Skills_areaController::class, 'design_skills_edit'])->name('design_skills_edit');
Route::post('design/skills/update/{id}', [Skills_areaController::class, 'design_skills_update'])->name('design_skills_update');
Route::post('design/skills/delete/{id}', [Skills_areaController::class, 'design_skills_delete'])->name('design_skills_delete');
Route::get('design/skill/restore/{id}', [Skills_areaController::class, 'design_skill_restore'])->name('design_skill_restore');
Route::get('design/skill/force/delete/{id}', [Skills_areaController::class, 'design_skill_force_delete'])->name('design_skill_force_delete');
// develop skill route here
Route::post('develop/skills/store', [Skills_areaController::class, 'develop_skills_store'])->name('develop_skills.store');
Route::get('develop/skills/edit/{id}', [Skills_areaController::class, 'develop_skills_edit'])->name('develop_skills_edit');
Route::post('develop/skills/update/{id}', [Skills_areaController::class, 'develop_skills_update'])->name('develop_skills.update');
Route::post('develop/skills/delete/{id}', [Skills_areaController::class, 'develop_skills_delete'])->name('develop_skills_delete');
Route::get('develop/skill/restore/{id}', [Skills_areaController::class, 'develop_skill_restore'])->name('develop_skill_restore');
Route::get('develop/skill/force/delete/{id}', [Skills_areaController::class, 'develop_skill_force_delete'])->name('develop_skill_force_delete');

// Skills_areaController route end

// CategoryController route start
Route::resource('category',CategoryController::class);
Route::get('category/restore/{id}', [CategoryController::class, 'category_restore'])->name('category_restore');
Route::get('category/force/delete/{id}', [CategoryController::class, 'category_force_delete'])->name('category_force_delete');
// CategoryController route end

// PortfolioAreaController route start
Route::resource('potfolio',PortfolioAreaController::class);
Route::get('potfolio/restore/{id}', [PortfolioAreaController::class, 'portfolio_restore'])->name('portfolio_restore');
Route::get('potfolio/force/delete/{id}', [PortfolioAreaController::class, 'portfolio_force_delete'])->name('portfolio_force_delete');
// PortfolioAreaController route end

// HireTextController route start
Route::get('hire/update/page/{hire_text_id}', [HireTextController::class, 'hire_update_page'])->name('hire_update.page');
Route::post('hire/update/data/{hire_text_id}', [HireTextController::class, 'hire_update_data'])->name('hire_update.data');
// HireTextController route end

// TestimonialAreaController route start
Route::resource('testimonial',TestimonialAreaController::class);
Route::get('testimonial/estore/{id}', [TestimonialAreaController::class, 'testimonial_restore'])->name('testimonial_restore');
Route::get('testimonial/force/delete/{id}', [TestimonialAreaController::class, 'testimonial_force_delete'])->name('testimonial_force_delete');
// TestimonialAreaController route end

// ContactDescriptionController route start
Route::get('contact/descr/update/page/{contact_descri_area_id}', [ContactDescriptionController::class, 'contact_desc_update_page'])->name('contact_desc_update.page');
Route::post('contact/desc/update/data/{contact_descri_area_id}', [ContactDescriptionController::class, 'contact_descr_update_data'])->name('contact_descr_update.data');
// ContactDescriptionController route end

// ContactController route start
Route::post('contact', [ContactController::class, 'contact_form_data'])->name('contact_form.data');
Route::get('contact/data', [ContactController::class, 'contact_data'])->name('contact_data');
Route::post('contact/delete/{id}', [ContactController::class, 'contact_delete'])->name('contact.delete');
Route::get('contact/restore/{id}', [ContactController::class, 'contact_form_restore'])->name('contact_form_restore');
Route::get('contact/force/delete/{id}', [ContactController::class, 'contact_form_force_delete'])->name('contact_form_force_delete');
// ContactController route end

// CvdownloadController route start
Route::get('cv/{cvdownload_id}', [CvdownloadController::class, 'cv_update_page'])->name('cv_update.page');
Route::post('cv/update/data/{cvdownload_id}', [CvdownloadController::class, 'cv_update_data'])->name('cv_update.data');
Route::get('cv/download/{cvdownload_id}', [CvdownloadController::class, 'cv_download'])->name('cv.download');
// CvdownloadController route end
