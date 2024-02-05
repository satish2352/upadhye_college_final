<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\FooterController;
use App\Models\WebsiteContactDetails;

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
    public function boot()
{
    $website_contact_details=WebsiteContactDetails::get();
    View::share('website_contact_details', $website_contact_details);

}
}
