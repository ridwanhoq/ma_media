<?php

namespace App\Http\Providers;

use App\Http\Components\Setting;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class ViewserviceProvider extends ServiceProvider
{

    public function register()
    {
    }

    public function boot()
    {

        /**
         * To access session's data
         */
        view()->composer('*', function ($view) {

            $lan    = Session::get('locale');

            $key_name_en_bn = $lan == 'en' ? "name_en":"name_bn";


            view()->composer('admin.searches.basic_search', function ($view) {

                $genders_array = Setting::genders_array();

                $view->with(
                    compact(
                        'genders_array'
                    )
                );
            });
            

        });

    }


}
