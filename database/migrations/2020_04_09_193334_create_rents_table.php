<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rentTitle');
            $table->string('month');
            $table->string('catagory');
            $table->string('additionalCatagory');
            $table->string('bedrooom');
            $table->string('bathroom');
            $table->string('belcony');
            $table->string('FloorNumber');
            $table->string('flatSize');
            $table->string('chooseGender');
            $table->string('price')->nullable();
            $table->string('priceTag');
            
            // Detailed information
            $table->string('floorType');
            $table->string('dinningSpace');
            $table->string('parkingSpace');
            $table->string('securityGuard');
            $table->string('cctv');
            $table->string('lift');
            $table->string('gas');
            $table->string('desco');
            $table->longText('des');
            
            // Pictures
            $table->mediumText('image')->nullable();

            // Location
            $table->string('city');
            $table->string('area');
            $table->string('address')->nullable();

            // Contact information
            $table->string('name');
            $table->string('email');
            $table->string('number');
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
        Schema::dropIfExists('rents');
    }
}
