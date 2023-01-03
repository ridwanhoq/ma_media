<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('has_alia_medium');
            $table->string('has_general_medium');
            $table->string('has_technical_medium');
            $table->string('has_english_medium');
            $table->string('has_qawmi_education');
            $table->string('has_hefz_education');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_profiles');
    }
}
