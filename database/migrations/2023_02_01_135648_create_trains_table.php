<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company_name",45)->nullable(false);
            $table->string("departure_station",45)->nullable(false);
            $table->string("destination",45)->nullable(false);
            $table->string("class",45)->nullable(false);
            $table->integer("number_of_ticket")->nullable();
            $table->date("date_of_arrive")->nullable(false);
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
        Schema::dropIfExists('trains');
    }
};
