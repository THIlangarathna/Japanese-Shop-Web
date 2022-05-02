<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTozansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tozans', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('surname');
            $table->string('other_names')->nullable();
            $table->string('address');
            $table->string('contact_home')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->string('contact_work')->nullable();
            $table->string('contact_whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->string('passport_no');
            $table->date('passport_expiry_date');
            $table->date('gojukai_received_date')->nullable();
            $table->date('gohonzon_received_date')->nullable();
            $table->string('chanting')->nullable();
            $table->string('first_tozan')->nullable();
            $table->string('previous_tozans')->nullable();
            $table->string('illnesses')->nullable();
            $table->string('wheelchair')->nullable();
            $table->string('contact_japan')->nullable();
            $table->string('members_names_tozan')->nullable();
            $table->integer('tozan_years')->nullable();
            $table->integer('tozan_months')->nullable();
            $table->integer('tozan_days')->nullable();
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
        Schema::dropIfExists('tozans');
    }
}
