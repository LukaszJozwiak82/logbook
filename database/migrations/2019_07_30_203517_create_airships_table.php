<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('airship_type_id')->unsigned();
            $table->integer('flight_registration_id')->unsigned();
            $table->string('registration_mark');
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
        Schema::dropIfExists('airships');
    }
}
