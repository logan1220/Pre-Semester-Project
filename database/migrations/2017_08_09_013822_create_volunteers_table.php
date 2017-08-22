<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname', 100);
            $table->string('lname', 100);
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('address1',100);
            $table->string('address2', 100);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('zip', 20);
            $table->string('phone_home', 12);
            $table->string('phone_cell', 12);
            $table->string('phone_work', 12);
            $table->string('drivers_license', 100);
            $table->string('ssn', 100);
            $table->string('email', 100);
            $table->string('approval_status', 100);
            $table->string('volunteer_centers', 100);
            $table->string('skills', 100);
            $table->string('weekday_availability_start', 100);
            $table->string('weekday_availability_end', 100);
            $table->string('weekend_availability_start', 100);
            $table->string('weekend_availability_end', 100);
            $table->string('education', 100);
            $table->string('licenses', 100);
            $table->string('emergency_fname', 100);
            $table->string('emergency_lname', 100);
            $table->string('emergency_address1',100);
            $table->string('emergency_address2', 100);
            $table->string('emergency_city', 100);
            $table->string('emergency_state', 100);
            $table->string('emergency_zip', 20);
            $table->string('emergency_phone_home', 12);
            $table->string('emergency_phone_cell', 12);
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
        Schema::drop('volunteers');
    }
}
