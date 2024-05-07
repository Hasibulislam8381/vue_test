<?php

use App\Models\Banner;
use App\Models\Category;
use App\Models\OurStory;
use App\Models\Property;
use App\Models\OurClient;
use App\Models\dreamWithUs;
use App\Models\MissionVision;
use App\Models\RequestMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\MetaController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\DreamConreoller;
use App\Http\Controllers\Backend\TermsController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\FeaturesController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\OurStoryController;
use App\Http\Controllers\Backend\PackagesController;
use App\Http\Controllers\Backend\PropertyController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Backend\OurClientController;
use App\Http\Controllers\Backend\SubscriberController;
use App\Http\Controllers\Backend\GeneralInfoController;
use App\Http\Controllers\Backend\PhotoGalleryController;
use App\Http\Controllers\Backend\VideoGalleryController;
use App\Http\Controllers\Backend\WhyBaganbariController;
use App\Http\Controllers\Backend\MissionVisionController;
use App\Http\Controllers\Backend\RequestMessageController;
use App\Http\Controllers\Backend\SectionContentController;
use App\Http\Controllers\Backend\BoardOfDirectorController;
use App\Http\Controllers\Backend\LatestServicesController;
use App\Http\Controllers\Backend\RequirementTypeController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\ApplyMailController;
use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\LeafController;
use App\Http\Controllers\Backend\PackageCategoryController;
use App\Http\Controllers\Backend\PackagesDetailsController;
use App\Http\Controllers\Backend\PackageTypeController;
use App\Models\PackagesDetails;
use App\Models\PackageType;

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

//     return view('frontend.index');
// });
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');

    // pages
    Route::get('/about',  'about')->name('about');
    Route::get('/property-details/{slug}',  'property_details')->name('property_details');
    Route::get('/projects',  'all_projects')->name('all_projects');
    Route::get('/filter_properties',  'filter_properties')->name('filter_properties');
    Route::get('/packages',  'packages')->name('packages');
    Route::get('/package-details/{slug}', 'package_details')->name('package-details');
    Route::get('/packages-details/{slug}', 'package_details_dropdown')->name('package-details-dropdown');
    Route::get('/contact-us',  'contact')->name('contact-us');
    Route::get('/get-free-quote/{slug}',  'get_quote')->name('get-free-quote');
    Route::get('/get-free-quote',  'get_quote_two')->name('get-free-quote-form');
    Route::get('/mission-vision',  'mission_vision')->name('mission-vision');
    Route::get('/board-of-member',  'board_of_member')->name('board-of-member');
    Route::get('/our-client',  'our_client')->name('our-client');
    Route::get('/services/{slug}',  'services')->name('services');
    Route::get('/all-services',  'all_services')->name('all-services');
    Route::get('/ongoing-projects',  'ongoing_projects')->name('ongoing_projects');
    Route::get('/completed-projects',  'completed_projects')->name('completed_projects');
    Route::get('/upcoming-projects',  'upcoming_projects')->name('upcoming_projects');
    Route::get('/career',  'career')->name('career');
    Route::get('/career-details/{slug}',  'career_details')->name('career_details');
    Route::get('/apply-now',  'apply_now')->name('apply_now');
    Route::get('/photo-gallery', 'photos')->name('photos');
    Route::get('/photo-gallery/{slug}',  'photo_gallery')->name('photo_gallery');
    Route::get('/video-gallery',  'video_gallery')->name('video_gallery');
    Route::get('/terms_and_conditions',  'terms_and_conditions')->name('terms_and_conditions');
    Route::get('/blog',  'blog')->name('blog');
    Route::get('/blog-details/{slug}',  'blog_details')->name('blog-details');
});

// Route::get('/', [HomeController::class, 'index']);

Route::controller(SubscriberController::class)->prefix('/subscriber')->name('subscriber.')->group(function () {

    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::post('/message/{id}', 'message')->name('message');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(
    function () {
        Route::get('/admin',  [BackendController::class, 'admin'])->name('admin');
        Route::get('/logout', [BackendController::class, 'authLogout'])->name('authLogout');

        Route::controller(GeneralInfoController::class)->prefix('/admin/general_info')->name('backend.general_info.')->group(function () {

            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{generalInfo}', 'edit')->name('edit');
            Route::post('/update/{generalInfo}', 'update')->name('update');
        });
        Route::controller(SectionContentController::class)->prefix('/admin/sectionContent')->name('backend.sectionContent.')->group(function () {
            Route::get('/index', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{sectionContent}', 'edit')->name('edit');
            Route::post('/update/{sectionContent}', 'update')->name('update');
        });
        Route::controller(UserController::class)->prefix('/admin/user')->name('backend.user.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{user}', 'edit')->name('edit');
            Route::post('/update/{user}', 'update')->name('update');
            Route::get('/destroy/{user}', 'destroy')->name('trash');
            Route::get('/status/{user}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
            Route::get('/profile', 'profile')->name('profile');
        });
        Route::controller(BannerController::class)->prefix('/admin/banner')->name('backend.banner.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{banner}', 'edit')->name('edit');
            Route::post('/update', 'update')->name('update');
            Route::get('/destroy/{banner}', 'destroy')->name('trash');
            Route::get('/status/{banner}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        // Route::controller(PartnerController::class)->prefix('/admin/partner')->name('backend.partner.')->group(function () {
        //     Route::get('/', 'index')->name('index');
        //     Route::get('/create', 'create')->name('create');
        //     Route::post('/store', 'store')->name('store');
        //     Route::get('/edit/{partner}', 'edit')->name('edit');
        //     Route::post('/update/{partner}', 'update')->name('update');
        //     Route::get('/destroy/{partner}', 'destroy')->name('trash');
        //     Route::get('/status/{partner}', 'status')->name('status');
        //     Route::get('/reStore/{id}', 'reStore')->name('reStore');
        //     Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        // });
        Route::controller(BlogController::class)->prefix('/admin/blog')->name('backend.blog.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{blog}', 'edit')->name('edit');
            Route::post('/update/{blog}', 'update')->name('update');
            Route::get('/destroy/{blog}', 'destroy')->name('trash');
            Route::get('/status/{blog}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(FaqController::class)->prefix('/admin/faq')->name('backend.faq.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{faq}', 'edit')->name('edit');
            Route::post('/update/{faq}', 'update')->name('update');
            Route::get('/destroy/{faq}', 'destroy')->name('trash');
            Route::get('/status/{faq}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(CareerController::class)->prefix('/admin/career')->name('backend.career.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{career}', 'edit')->name('edit');
            Route::post('/update/{career}', 'update')->name('update');
            Route::get('/destroy/{career}', 'destroy')->name('trash');
            Route::get('/status/{career}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(MetaController::class)->prefix('/admin/meta')->name('backend.meta.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{meta}', 'edit')->name('edit');
            Route::post('/update/{meta}', 'update')->name('update');
            Route::delete('/destroy/{meta}', 'destroy')->name('delete');
        });
        Route::controller(DreamConreoller::class)->prefix('/admin/dreamWithUs')->name('backend.dreamWithUs.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{dreamWithUs}', 'edit')->name('edit');
            Route::post('/update/{dreamWithUs}', 'update')->name('update');
            Route::get('/destroy/{dreamWithUs}', 'destroy')->name('trash');
            Route::get('/status/{dreamWithUs}', 'status')->name('status');
            Route::get('/reStore/{dreamWithUs}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{dreamWithUs}', 'permDelete')->name('delete');
        });

        Route::controller(WhyBaganbariController::class)->prefix('/admin/whyBaganbari')->name('backend.whyBaganbari.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{whyBaganbari}', 'edit')->name('edit');
            Route::get('/editHead/{whyBaganbari}', 'editHead')->name('editHead');
            Route::post('/update/{whyBaganbari}', 'update')->name('update');
            Route::get('/destroy/{whyBaganbari}', 'destroy')->name('trash');
            Route::get('/status/{whyBaganbari}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });

        Route::controller(OurStoryController::class)->prefix('/admin/our_story')->name('backend.our_story.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{our_story}', 'edit')->name('edit');
            Route::get('/editBanner/{our_story}', 'editBanner')->name('editBanner');
            Route::get('/editSection2/{our_story}', 'editSection2')->name('editSection2');
            Route::post('/update/{our_story}', 'update')->name('update');
            Route::post('/updateBanner/{our_story}', 'updateBanner')->name('updateBanner');
            Route::post('/updateSection2/{our_story}', 'updateSection2')->name('updateSection2');
            Route::get('/destroy/{our_story}', 'destroy')->name('trash');
            Route::get('/status/{our_story}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(MissionVisionController::class)->prefix('/admin/mission')->name('backend.mission.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit/{missionVision}', 'edit')->name('edit');
            Route::post('/update/{missionVision}', 'update')->name('update');
        });
        Route::controller(OurClientController::class)->prefix('/admin/ourClient')->name('backend.ourClient.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit/{ourClient}', 'edit')->name('edit');
            Route::post('/update/{ourClient}', 'update')->name('update');
        });

        Route::controller(CategoryController::class)->prefix('/admin/category')->name('backend.category.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{category}', 'edit')->name('edit');
            Route::post('/update', 'update')->name('update');
            Route::get('/destroy/{category}', 'destroy')->name('trash');
            Route::get('/status/{category}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(RequirementTypeController::class)->prefix('/admin/requirementType')->name('backend.requirementType.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{requirementType}', 'edit')->name('edit');
            Route::post('/update/{requirementType}', 'update')->name('update');
            Route::get('/destroy/{requirementType}', 'destroy')->name('trash');
            Route::get('/status/{requirementType}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(LocationController::class)->prefix('/admin/location')->name('backend.location.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{location}', 'edit')->name('edit');
            Route::post('/update/{location}', 'update')->name('update');
            Route::get('/destroy/{location}', 'destroy')->name('trash');
            Route::get('/status/{location}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(SubscriberController::class)->prefix('/admin/subscriber')->name('backend.subscriber.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::delete('/destroy/{subscriber}', 'destroy')->name('delete');
        });
        Route::controller(PropertyController::class)->prefix('/admin/property')->name('backend.property.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{property}', 'edit')->name('edit');
            Route::post('/update/{property}', 'update')->name('update');
            Route::get('/destroy/{property}', 'destroy')->name('trash');
            Route::get('/status/{property}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(FeaturesController::class)->prefix('/admin/features')->name('backend.features.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{features}', 'edit')->name('edit');
            Route::post('/update', 'update')->name('update');
            Route::get('/destroy/{features}', 'destroy')->name('trash');
            Route::get('/status/{features}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(PackageTypeController::class)->prefix('/admin/packageType')->name('backend.packageType.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{packageType}', 'edit')->name('edit');
            Route::post('/update/{packageType}', 'update')->name('update');
            Route::get('/destroy/{packageType}', 'destroy')->name('trash');
            Route::get('/status/{packageType}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(PackageCategoryController::class)->prefix('/admin/packageCategory')->name('backend.packageCategory.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{packageCategory}', 'edit')->name('edit');
            Route::post('/update', 'update')->name('update');
            Route::get('/destroy/{packageCategory}', 'destroy')->name('trash');
            Route::get('/status/{packageCategory}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(PackagesController::class)->prefix('/admin/packages')->name('backend.packages.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{packages}', 'edit')->name('edit');
            Route::post('/update/{packages}', 'update')->name('update');
            Route::get('/destroy/{packages}', 'destroy')->name('trash');
            Route::get('/status/{packages}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(RequestMessageController::class)->prefix('/admin/message')->name('backend.message.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::get('/edit/{message}', 'edit')->name('edit');
            Route::post('/update', 'message')->name('update');
            Route::get('/destroy/{requestMessage}', 'destroy')->name('trash');
            Route::get('/status/{requestMessage}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(BoardOfDirectorController::class)->prefix('/admin/board_of_director')->name('backend.board_of_director.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{boardOfDirector}', 'edit')->name('edit');
            Route::post('/update/{boardOfDirector}', 'update')->name('update');
            Route::get('/destroy/{boardOfDirector}', 'destroy')->name('trash');
            Route::get('/status/{boardOfDirector}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(ServicesController::class)->prefix('/admin/services')->name('backend.services.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{services}', 'edit')->name('edit');
            Route::get('/editHead/{services}', 'editHead')->name('editHead');
            Route::post('/update/{services}', 'update')->name('update');
            Route::get('/destroy/{services}', 'destroy')->name('trash');
            Route::get('/status/{services}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(PackagesDetailsController::class)->prefix('/admin/package_details')->name('backend.package_details.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{packagesDetails}', 'edit')->name('edit');
            Route::get('/editHead/{packagesDetails}', 'editHead')->name('editHead');
            Route::post('/update/{packagesDetails}', 'update')->name('update');
            Route::get('/destroy/{packagesDetails}', 'destroy')->name('trash');
            Route::get('/status/{packagesDetails}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(PhotoGalleryController::class)->prefix('/admin/photoGallery')->name('backend.photoGallery.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{photoGallery}', 'edit')->name('edit');
            Route::post('/update/{photoGallery}', 'update')->name('update');
            Route::get('/destroy/{photoGallery}', 'destroy')->name('trash');
            Route::get('/status/{photoGallery}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(VideoGalleryController::class)->prefix('/admin/videoGallery')->name('backend.videoGallery.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{videoGallery}', 'edit')->name('edit');
            Route::post('/update/{videoGallery}', 'update')->name('update');
            Route::get('/destroy/{videoGallery}', 'destroy')->name('trash');
            Route::get('/status/{videoGallery}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(TermsController::class)->prefix('/admin/terms')->name('backend.terms.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{terms}', 'edit')->name('edit');
            Route::post('/update/{terms}', 'update')->name('update');
            Route::get('/destroy/{terms}', 'destroy')->name('trash');
            Route::get('/status/{terms}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(PartnerController::class)->prefix('/admin/partner')->name('backend.partner.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{partner}', 'edit')->name('edit');
            Route::post('/update', 'update')->name('update');
            Route::get('/destroy/{partner}', 'destroy')->name('trash');
            Route::get('/status/{partner}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(LatestServicesController::class)->prefix('/admin/LatestServices')->name('backend.LatestServices.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{latestServices}', 'edit')->name('edit');
            Route::post('/update/{latestServices}', 'update')->name('update');
            Route::get('/destroy/{latestServices}', 'destroy')->name('trash');
            Route::get('/status/{latestServices}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(ContactUsController::class)->prefix('/admin/contactUs')->name('backend.contactUs.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{contactUs}', 'edit')->name('edit');
            Route::post('/update', 'update')->name('update');
            Route::get('/destroy/{contactUs}', 'destroy')->name('trash');
            Route::get('/status/{contactUs}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
        Route::controller(LeafController::class)->prefix('/admin/leaf')->name('backend.leaf.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{leaf}', 'edit')->name('edit');
            Route::post('/update', 'update')->name('update');
            Route::get('/destroy/{leaf}', 'destroy')->name('trash');
            Route::get('/status/{contactUsleaf}', 'status')->name('status');
            Route::get('/reStore/{id}', 'reStore')->name('reStore');
            Route::delete('/permDelete/{id}', 'permDelete')->name('delete');
        });
    }
);
Route::post('sendhtmlemail', [MailController::class, 'html_email'])->name('sendhtmlemail');
Route::post('sendMail', [HomeContactController::class, 'html_email'])->name('sendMail');
Route::post('applyMail', [ApplyMailController::class, 'html_email'])->name('applyMail');
