<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_member', function (Blueprint $table) {
           $table->increments('reg_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('adharcardnumber');
            $table->string('ocipcinumber');
            $table->string('passport');
            $table->string('birthday');
            $table->string('mobilecode');
            $table->string('mobilenumber');
            $table->string('email');
            $table->string('address');
            $table->string('landmark');
            $table->string('area');
            $table->string('gender');
            $table->string('pincode');
            $table->string('city_name');
            $table->integer('state_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->foreign('state_id')->references('state_id')->on('state')->onDelete('cascade');
            $table->foreign('country_id')->references('country_id')->on('country')->onDelete('cascade');
            $table->string('sampraday');
            $table->string('other');
            $table->string('sms');
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
        Schema::dropIfExists('register_member');
    }
}
