<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_members', function (Blueprint $table) {
            $table->increments('reg_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('adharcardnumber')->nullable();
            $table->string('ocipcinumber')->nullable();
            $table->string('passport')->nullable();
            $table->string('birthday');
            $table->string('mobilecode');
            $table->string('mobilenumber');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('landmark')->nullable();
            $table->string('area');
            $table->string('gender');
            $table->string('pincode');
            $table->string('city_name');
            $table->integer('registernumber')->nullable();
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('state_id')->on('state')->onDelete('cascade');
            $table->foreign('country_id')->references('country_id')->on('country')->onDelete('cascade');
            $table->string('sampraday');
            $table->string('other')->nullable();
            $table->string('sms')->nullable();
            $table->string('register_number')->nullable();
            $table->string('otp')->nullable();
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
        Schema::dropIfExists('register_members');
    }
}
