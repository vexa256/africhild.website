<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('Item')->unique();
            $table->string('IID')->unique();
            $table->string('CID');
            $table->string('BriefDesc');
            $table->bigInteger('Qty');
            $table->bigInteger('WarningAmount');
            $table->string('status')->nullable();
            $table->string('EmpID')->nullable();
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
        Schema::dropIfExists('items');
    }
}
