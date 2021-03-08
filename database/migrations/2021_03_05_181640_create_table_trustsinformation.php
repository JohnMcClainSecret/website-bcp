<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTrustsinformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trustsInformation', function (Blueprint $table) {
            $table->id();
            $table->integer('userInfo_id');
            $table->string('ClosingAgent');
            $table->string('BrokerageFirm');
            $table->date('ClosingDate');
            $table->string('FinalBeneficiaries');
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
        Schema::dropIfExists('trustsInformation');
    }
}
