<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('Item');
            $table->string('IID');
            $table->string('CID');
            $table->string('Month')->nullable();
            $table->string('Year')->nullable();
            $table->string('BriefDesc');
            $table->bigInteger('QtyRequested');
            $table->string('ApprovalStatus')->nullable();
            $table->string('DeclineReason')->nullable();
            $table->string('RequestedBy')->nullable();
            $table->string('IssuedBy')->nullable();
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
        Schema::dropIfExists('requests');
    }
}
