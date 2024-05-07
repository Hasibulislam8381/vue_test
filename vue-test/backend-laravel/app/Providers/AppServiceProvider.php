<?php

namespace App\Providers;

use App\Models\GeneralInfo;
use App\Models\Leaf;
use App\Models\Packages;
use App\Models\PackagesDetails;
use App\Models\Services;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrapFour();
        Paginator::useBootstrapFour();

        $generalInfo = GeneralInfo::first();
        view()->share(['generalInfo' => $generalInfo]);

        $serviceData = Services::where('type', 'card')->get();

        view()->share(['serviceData' => $serviceData]);

        $allPackages = Packages::get();

        view()->share(['allPackages' => $allPackages]);

        $PackagesDetails = PackagesDetails::get();

        view()->share(['PackagesDetails' => $PackagesDetails]);

        $leaf = Leaf::first();

        view()->share(['leaf' => $leaf]);

        $bradecampleaf1 = Leaf::where('section_name', "bradecamp_leaf_one")->first();
        view()->share(['bradecampleaf1' => $bradecampleaf1]);

        $bradecampleaf2 = Leaf::where('section_name', "bradecamp_leaf_two")->first();
        view()->share(['bradecampleaf2' => $bradecampleaf2]);

        $footer_image = Leaf::where('section_name', "footer_image")->first();

        view()->share(['footer_image' => $footer_image]);
    }
}