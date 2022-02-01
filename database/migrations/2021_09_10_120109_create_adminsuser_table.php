<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminsuser', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('dob');
            $table->string('age');
            $table->string('mobile1');
            $table->string('mobile2');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('pincode');
            $table->string('state');
            $table->string('country');
            $table->string('company');
            $table->string('designation');
            $table->string('company_location');
            $table->string('sessions_attended');
            $table->string('language');
            $table->string('palmleaf_sub');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('comments');
            $table->string('status');
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
        Schema::dropIfExists('adminsuser');
    }
}
