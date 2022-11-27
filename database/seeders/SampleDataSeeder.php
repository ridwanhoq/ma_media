<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\District;
use App\Models\Division;
use App\Models\Union;
use App\Models\Upazila;
use App\Models\User;
use App\Models\UserBasic;
use Illuminate\Database\Seeder;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();

        Country::factory()->count(10)->create();

        Division::factory()->count(10)->create();

        District::factory()->count(10)->create();

        Upazila::factory()->count(10)->create();

        Union::factory()->count(10)->create();

        UserBasic::factory()->count(10)->create();

    }
}
