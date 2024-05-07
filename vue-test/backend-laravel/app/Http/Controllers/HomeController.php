<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Leaf;
use App\Models\Meta;
use App\Models\Terms;
use App\Models\Banner;
use App\Models\Career;
use App\Models\Partner;
use App\Models\Category;
use App\Models\Features;
use App\Models\Location;
use App\Models\OurStory;
use App\Models\Packages;
use App\Models\Property;
use App\Models\Services;
use App\Models\ContactUs;
use App\Models\OurClient;
use App\Models\dreamWithUs;
use App\Models\PhotoGallery;
use App\Models\VideoGallery;
use App\Models\WhyBaganbari;
use Illuminate\Http\Request;
use App\Models\MissionVision;
use App\Models\LatestServices;
use App\Models\BoardOfDirector;
use App\Models\PackageCategory;
use App\Models\PackagesDetails;
use App\Models\PackageType;
use App\Models\RequirementType;
use Illuminate\Support\Facades\DB;
use PHPUnit\Metadata\Version\Requirement;
use Illuminate\Http\Resources\MissingValue;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pagename = "home";
        $project = Property::get();
        $banners = Banner::get();
        $dreamWithUs = dreamWithUs::first();
        $whyBaganbariHead = WhyBaganbari::where('type', 'heading')->first();
        $whyBaganbariCard = WhyBaganbari::where('type', 'card')->get();
        $serviceshead = Services::where('type', 'heading')->first();
        $services = Services::where('type', 'card')->get();
        $meta = Meta::where('page_name', 'home')->first();
        $contact_us = ContactUs::first();
        $whybaganbariLeaf = Leaf::where('section_name', "why_baganbari")->first();
        $dreamUs = Leaf::where('section_name', "dream_with_us")->first();
        $our_service_home = Leaf::where('section_name', "our_service_home")->first();
        $contact_us_home = Leaf::where('section_name', "contact_us_home")->first();
        $completed_leaf = Leaf::where('section_name', "completed_project")->first();
        $ongoing_leaf = Leaf::where('section_name', "ongoing_project")->first();
        $upcoming_leaf = Leaf::where('section_name', "upcoming_project")->first();

        return view('frontend.index', compact('dreamWithUs', 'banners', 'whyBaganbariHead', 'whyBaganbariCard', 'project', 'services', 'pagename', 'meta', 'serviceshead', 'contact_us', 'whybaganbariLeaf', 'dreamUs', 'our_service_home', 'contact_us_home', 'completed_leaf', 'ongoing_leaf', 'upcoming_leaf'));
    }
    public function about()
    {
        $pagename = "about";
        $our_stories_banner =  OurStory::where('type', 'banner')->first();
        $section1 = OurStory::where('type', 'section_one')->get();
        $section2 = OurStory::where('type', 'section_two')->first();
        $meta = Meta::where('page_name', 'Our Story')->first();
        $our_story_background = Leaf::where('section_name', 'our_story_background')->first();
        return view('frontend.pages.about', compact('our_stories_banner', 'section1', 'section2', 'pagename', 'meta', 'our_story_background'));
    }
    public function property_details($slug)
    {
        $pagename = "property_details";
        $property = Property::where('slug', $slug)->first();
        $features = Features::where('property_id', $property->id)->get();
        $project_types = RequirementType::get();
        $specification = Leaf::where('section_name', 'specification')->first();
        return view('frontend.pages.property_details', compact('property', 'features', 'project_types', 'pagename', 'specification'));
    }
    public function all_projects()
    {
        $pagename = "portfolio";
        $location = Location::get();
        $category = Category::get();
        $requirement = RequirementType::get();
        $property = Property::orderBy('id', 'desc')->paginate(21);
        $meta = Meta::where('page_name', 'Our Portfolio')->first();

        return view('frontend.pages.all_project', compact('property', 'category', 'requirement', 'location', 'pagename', 'meta'));
    }
    public function packages()
    {
        $packageType = PackageType::get();
        $header = Packages::where('id', 1)->first();

        $pagename = "packages";
        $packages = Packages::get();
        $package_details = PackagesDetails::where('id', 1)->first();
        $meta = Meta::where('page_name', 'Packages')->first();

        return view('frontend.pages.packages', compact('packages', 'pagename', 'meta', 'package_details', 'packageType', 'header'));
    }
    public function package_details($slug)
    {
        $pagename = "package";

        $package_details_leaf = Leaf::where('section_name', 'package_details')->first();
        $packages = Packages::where('slug', $slug)->first();
        // $meta = Meta::where('page_name', 'Packages')->first();

        return view('frontend.pages.package_details', compact('pagename', 'packages', 'package_details_leaf'));
    }
    public function package_details_dropdown($slug)
    {
        $pagename = "package_details";



        $project_types = RequirementType::get();
        $services = PackagesDetails::where('slug', $slug)->first();


        $getPackages = DB::table("packages")
            ->join("package_categories", function ($join) {
                $join->on("packages.package_category_id", "=", "package_categories.id");
            })
            ->join("packages_details", function ($join) {
                $join->on("packages.parent_id", "=", "packages_details.id");
            })
            ->where("packages.parent_id", "=", $services->id)
            ->groupBy("package_categories.id")
            ->get();




        $latest_services = LatestServices::where('services_id', $services->id)
            ->orderBy('id', 'DESC')
            ->limit(6)
            ->get();

        $whyBaganbariHead = Services::where('type', 'heading')->first();
        $landscape_leaf = Leaf::where('section_name', "landscape_design")->first();
        $step_of_work = Leaf::where('section_name', "step_of_work")->first();
        $work_process1 = Leaf::where('section_name', "work_process1")->first();
        $work_process2 = Leaf::where('section_name', "work_process2")->first();
        $importants_of_landscape = Leaf::where('section_name', "importants_of_landscape")->first();
        return view('frontend.pages.packages_details_dropdown', compact('project_types', 'services', 'latest_services', 'pagename', 'landscape_leaf', 'step_of_work', 'importants_of_landscape', 'work_process1', 'work_process2', 'getPackages'));
    }
    public function contact()
    {
        $pagename = "contact_us";
        $project_types = RequirementType::get();
        $meta = Meta::where('page_name', 'Contact Us')->first();
        $contact_us =  ContactUs::first();
        return view('frontend.pages.contact-us', compact('project_types', 'pagename', 'meta', 'contact_us'));
    }
    public function career()
    {
        $pagename = "video";
        $careers = Career::get();
        $metaData = Meta::where('page_name', 'career')->first();
        $meta = Meta::where('page_name', 'Career')->first();


        return view('frontend.pages.career', compact('careers', 'metaData', 'pagename', 'meta'));
    }
    public function career_details($slug)
    {
        $pagename = "video";
        $career = Career::where('slug', $slug)->firstOrFail();
        $metaData = Meta::where('page_name', 'career_details')->first();
        return view('frontend.pages.career_details', compact('career', 'metaData', 'pagename'));
    }
    public function apply_now()
    {
        // $careers = Career::where('slug',$slug)->firstOrFail();
        $pagename = "video";
        $metaData = Meta::where('page_name', 'apply_now')->first();
        return view('frontend.pages.apply_now', compact('metaData', 'pagename'));
    }
    public function blog()
    {
        $pagename = "blog";
        $metaData = Meta::where('page_name', 'blog')->first();
        $blogs = Blog::get();
        return view('frontend.pages.blog', compact('metaData', 'pagename', 'blogs'));
    }
    public function blog_details($slug)
    {
        $pagename = "blog";
        // $metaData = Meta::where('page_name', 'blog')->first();
        $blog = Blog::where("slug", $slug)->first();
        return view('frontend.pages.blog_details', compact('pagename', 'blog'));
    }

    public function get_quote_two()
    {
        $pagename = "get_quote";
        // $packages = Packages::where('slug', $slug)->first();
        $project_types = RequirementType::get();
        $quote_image = ContactUs::first();
        $meta = Meta::where('page_name', 'Get Free Quote')->first();

        return view('frontend.pages.get-free-quote', compact('project_types', 'pagename', 'meta', 'quote_image'));
    }
    public function get_quote($slug)
    {
        $packages = Packages::where('slug', $slug)->first();
        $project_types = RequirementType::get();
        $quote_image = ContactUs::first();
        $meta = Meta::where('page_name', 'Get Free Quote')->first();
        return view('frontend.pages.get-free-quote', compact('project_types', 'packages', 'quote_image', 'meta'));
    }
    public function mission_vision()
    {
        $pagename = "about";
        $data = MissionVision::first();
        $meta = Meta::where('page_name', 'Mission and Vision')->first();
        $mission_vision_inside = Leaf::where("section_name", 'mission_vision_inside')->first();

        return view('frontend.pages.mission-vision', compact('data', 'pagename', 'meta', 'mission_vision_inside'));
    }
    public function board_of_member()
    {
        $pagename = "about";
        $board = BoardOfDirector::get();
        $meta = Meta::where('page_name', 'Board of Director')->first();

        return view('frontend.pages.board-of-director', compact('board', 'pagename', 'meta'));
    }
    public function our_client()
    {
        $pagename = "about";
        $client = Partner::get();
        $meta = Meta::where('page_name', 'Our Client')->first();
        return view('frontend.pages.our-client', compact('client', 'pagename', 'meta'));
    }
    public function services($slug)
    {
        $pagename = "services";
        $project_types = RequirementType::get();
        $services = Services::where('slug', $slug)
            ->where('type', 'card')
            ->first();
        $latest_services = LatestServices::where('services_id', $services->id)
            ->orderBy('id', 'DESC')
            ->limit(6)
            ->get();

        $whyBaganbariHead = Services::where('type', 'heading')->first();
        $landscape_leaf = Leaf::where('section_name', "landscape_design")->first();
        $step_of_work = Leaf::where('section_name', "step_of_work")->first();
        $work_process1 = Leaf::where('section_name', "work_process1")->first();
        $work_process2 = Leaf::where('section_name', "work_process2")->first();
        $importants_of_landscape = Leaf::where('section_name', "importants_of_landscape")->first();
        return view('frontend.pages.services', compact('project_types', 'services', 'latest_services', 'pagename', 'landscape_leaf', 'step_of_work', 'importants_of_landscape', 'work_process1', 'work_process2'));
    }
    public function all_services()
    {
        $meta = Meta::where('page_name', 'All Services')->first();
        $services = Services::where('type', 'card')->get();
        return view('frontend.pages.all-services', compact('services', 'meta'));
    }
    public function photo_gallery($slug)
    {

        try {
            $pagename = "video";
            $parentGallery = PhotoGallery::where('slug', $slug)->first();

            if ($parentGallery) {
                $photoGallery = PhotoGallery::where('parent_id', $parentGallery->id)->get();
                $metaData = Meta::where('page_name', 'Gallery')->first();
                return view('frontend.pages.photo_gallery', compact('metaData', 'parentGallery', 'photoGallery', 'pagename'));
            } else {
                return abort(404);
            }
        } catch (\Exception $e) {
            // Handle the exception here (e.g., log the error, display a generic error page, etc.)
            return abort(500); // You can customize this based on your error handling requirements
        }
    }
    public function photos()
    {
        $pagename = "video";
        $thumbdata = PhotoGallery::where('parent_id', null)->where('status', 'publish')->get();
        $meta = Meta::where('page_name', 'Gallery')->first();
        return view('frontend.pages.photos', compact('thumbdata', 'pagename', 'meta'));
    }
    public function video_gallery()
    {
        $pagename = "video";
        $videos = VideoGallery::get();
        $meta = Meta::where('page_name', 'Videos')->first();
        return view('frontend.pages.video_gallery', compact('videos', 'pagename', 'meta'));
    }
    public function terms_and_conditions()
    {
        $pagename = "video";
        $terms = Terms::orderBy('id', 'desc')->first();
        $meta = Meta::where('page_name', 'Privacy Policy')->first();

        return view('frontend.pages.terms_and_conditions', compact('terms', 'pagename', 'meta'));
    }

    public function ongoing_projects()
    {

        $pagename = "completed_projects";
        $location = Location::get();
        $category = Category::get();
        $requirement = RequirementType::get();
        $property = Property::join('categories', 'properties.category_id', '=', 'categories.id')
            ->where('categories.category', 'Ongoing Project')
            ->orderBy('properties.id', 'desc')
            ->paginate(21);
        return view('frontend.pages.all_project', compact('property', 'category', 'requirement', 'location', 'pagename'));
    }
    public function completed_projects()
    {
        $pagename = "completed_projects";
        $location = Location::get();
        $category = Category::get();
        $requirement = RequirementType::get();
        $property = Property::join('categories', 'properties.category_id', '=', 'categories.id')
            ->where('categories.category', 'Completed Project')
            ->orderBy('properties.id', 'desc')
            ->paginate(21);
        return view('frontend.pages.all_project', compact('property', 'category', 'requirement', 'location', 'pagename'));
    }
    public function upcoming_projects()
    {
        $pagename = "upcoming_projects";
        $location = Location::get();
        $category = Category::get();
        $requirement = RequirementType::get();
        $property = Property::join('categories', 'properties.category_id', '=', 'categories.id')
            ->where('categories.category', 'Upcoming Project')
            ->orderBy('properties.id', 'desc')
            ->paginate(21);
        return view('frontend.pages.all_project', compact('property', 'category', 'requirement', 'location', 'pagename'));
    }
    public function filter_properties(Request $request)
    {
        try {
            $status = $request->status;
            $type = $request->type;
            $location = $request->location;


            $filteredProperties = Property::query();


            if ($status) {
                $filteredProperties->where('category_id', $status);
            }


            if ($type) {
                $filteredProperties->where('requirement_type_id', $type);
            }


            if ($location) {
                $filteredProperties->where('location', $location);
            }
            $filteredProperties = $filteredProperties->get();

            return view('frontend.pages.filter-view', compact('filteredProperties'));
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
