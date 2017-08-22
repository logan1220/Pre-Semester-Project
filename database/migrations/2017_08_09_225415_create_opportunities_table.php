<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
            $table->string('address1',100);
            $table->string('address2',100)->nullable();
            $table->string('city',100);
            $table->string('state',100);
            $table->string('volunteer_center',20);
            $table->string('licenses',100);
            $table->string('skills',100);
            $table->string('weekday_availability_start', 100);
            $table->string('weekday_availability_end', 100);
            $table->string('weekend_availability_start', 100);
            $table->string('weekend_availability_end', 100);
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
        Schema::dropIfExists('opportunities');
    }
}
