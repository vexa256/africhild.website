<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_settings', function (Blueprint $table) {
            $table->id();
            $table->string('SID');
            $table->string('URL');
            $table->string('Title')->nullable()->default('Slider Image');
            $table->string('BtnLinkUrl')->nullable()->default('#mission');
            $table->string('CaptionOne')->unique();
            $table->string('CaptionTwo')->unique();
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
        Schema::dropIfExists('slider_settings');
    }
}
