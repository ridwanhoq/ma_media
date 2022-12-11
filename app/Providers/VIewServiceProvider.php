<?php

namespace App\Http\Providers;

use App\Http\Components\Setting;
use App\Models\District;
use App\Models\Division;
use App\Models\Union;
use App\Models\Upazila;
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


            view()->composer('admin.searches.basic_search', function ($view) use($lan){

                $genders_array              = Setting::array_list_by_element_index("genders_array", $lan);
                $religions_array            = Setting::array_list_by_element_index("religions_array", $lan);
                
                $title_name_for_geo         = $lan == 'en' ? 'name' : 'bn_name';
                $division_items             = Division::active()->orderBy('name', 'asc')->pluck($title_name_for_geo, 'id')->toArray();
                $district_items             = District::active()->orderBy('name', 'asc')->pluck($title_name_for_geo, 'id')->toArray();
                $upazila_items              = Upazila::active()->orderBy('name', 'asc')->pluck($title_name_for_geo, 'id')->toArray();
                $union_items                = Union::active()->orderBy('name', 'asc')->pluck($title_name_for_geo, 'id')->toArray();

                $education_types_array      = Setting::array_list_by_element_index('education_types_array', $lan);
                $education_degrees_array    = Setting::array_list_by_element_index('education_degrees_array', $lan);

                $blood_groups_array         = Setting::array_list_by_element_index('blood_groups_array', $lan);
                $marital_statuses_array     = Setting::array_list_by_element_index('marital_statuses_array', $lan);
                $mazhabs_array              = Setting::array_list_by_element_index('mazhabs_array', $lan);
                
                $professions_array          = Setting::array_list_by_element_index('professions_array', $lan);
                $designations_array         = Setting::array_list_by_element_index('designations_array', $lan);
                
                $heights_array              = Setting::array_list_by_element_index('heights_array', $lan);
                $weights_array              = Setting::array_list_by_element_index('weights_array', $lan);
                $complexions_array          = Setting::array_list_by_element_index('complexions_array', $lan);
                $monthly_incomes_array      = Setting::array_list_by_element_index('monthly_incomes_array', $lan);
                $number_of_brothers_array   = Setting::array_list_by_element_index('number_of_brothers_array', $lan);
                $number_of_sisters_array    = $number_of_brothers_array;

                $view->with(
                    compact(
                        "genders_array",
                        "religions_array",
                        "division_items",
                        "district_items",
                        "upazila_items",
                        "union_items",
                        "education_types_array",
                        "education_degrees_array",
                        "blood_groups_array",
                        "mazhabs_array",
                        "professions_array",
                        "designations_array",
                        "heights_array",
                        "weights_array",
                        "complexions_array",
                        "monthly_incomes_array",
                        "number_of_brothers_array",
                        "number_of_sisters_array"
                    )
                );

            });
            

            

        });

    }


}
