<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sellTitle');
            $table->string('Scatagory');
            $table->string('SadditionalCatagory');
            $table->string('Sbedrooom');
            $table->string('Sbathroom');
            $table->string('Sbelcony');
            $table->string('SFloorNumber');
            $table->string('SflatSize');
            $table->string('SchooseGender');
            $table->string('Sprice')->nullable();
            $table->string('SpriceTag');
            
            // Detailed information
            $table->string('SfloorType');
            $table->string('SdinningSpace');
            $table->string('SparkingSpace');
            $table->string('SsecurityGuard');
            $table->string('Scctv');
            $table->string('Slift');
            $table->string('Sgas');
            $table->string('Sdesco');
            $table->longText('Sdes');
            
            // Pictures
            $table->mediumText('Simage')->nullable();

            // Location
            $table->string('Scity');
            $table->string('Sarea');
            $table->string('Saddress')->nullable();

            // Contact information
            $table->string('Sname');
            $table->string('Semail');
            $table->string('Snumber');
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
        Schema::dropIfExists('sells');
    }
}
