<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGojukaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gojukais', function (Blueprint $table) {
            $table->id();
            $table->string('a_name');
            $table->string('a_address_permanent')->nullable();
            $table->string('a_address_current')->nullable();
            $table->string('a_contact_home')->nullable();
            $table->string('a_contact_mobile')->nullable();
            $table->string('a_contact_work')->nullable();
            $table->string('a_contact_whatsapp')->nullable();
            $table->string('a_email')->nullable();
            $table->string('a_nic');
            $table->string('a_nic_image')->nullable();
            $table->date('a_dob');
            $table->integer('a_age')->nullable();
            $table->integer('a_gender')->nullable();
            $table->string('a_occupation')->nullable();
            $table->string('a_family_1_name')->nullable();
            $table->date('a_family_1_dob')->nullable();
            $table->string('a_family_2_name')->nullable();
            $table->date('a_family_2_dob')->nullable();
            $table->string('a_family_3_name')->nullable();
            $table->date('a_family_3_dob')->nullable();
            $table->string('a_family_4_name')->nullable();
            $table->date('a_family_4_dob')->nullable();
            $table->string('a_family_5_name')->nullable();
            $table->date('a_family_5_dob')->nullable();
            $table->string('s_name')->nullable();
            $table->string('s_address')->nullable();
            $table->string('s_contact_home')->nullable();
            $table->string('s_contact_mobile')->nullable();
            $table->string('s_relationship')->nullable();
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
        Schema::dropIfExists('gojukais');
    }
}
