<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGetoffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getOffer', function (Blueprint $table) {
            $table->id();
            $table->string("typeRoom");
            $table->string("Weeks");
            $table->integer("RegWeeks");
            $table->integer("AdditionalWeek");
            $table->string('membership')->nullable();
            $table->string('AmountPoints')->nullable();
            $table->string('YearsRemain')->nullable();
            $table->string('season')->nullable();
            $table->string('OtherSeason')->nullable();
            $table->string('MaintFee')->nullable();
            $table->string('exchCompany')->nullable();
            $table->string('OtherExch')->nullable();
            $table->string("Benefits")->nullable();
            $table->string("ResortName");
            $table->string("Location")->nullable();
            $table->string("Email");
            $table->string("OwnerName");
            $table->string("Phone");
            $table->string("Availability")->nullable();
            $table->string("Selling");
            $table->string("Rental");
            $table->string("Terms");
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
        Schema::dropIfExists('getOffer');
    }
}
