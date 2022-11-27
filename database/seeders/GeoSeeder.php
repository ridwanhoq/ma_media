<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$divisions = realpath(__DIR__.'/sql_files/divisions.sql'); 
        DB::unprepared( file_get_contents($divisions) );

        $districts = realpath(__DIR__.'/sql_files/districts.sql');
        DB::unprepared( file_get_contents($districts) );

        $upazilas = realpath(__DIR__.'/sql_files/upazilas.sql');
        DB::unprepared( file_get_contents($upazilas) );

        $unions = realpath(__DIR__.'/sql_files/unions.sql');
        DB::unprepared( file_get_contents($unions) );
    }
}