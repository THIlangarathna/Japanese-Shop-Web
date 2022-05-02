<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGohonzonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gohonzons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address_permanent')->nullable();
            $table->string('address_current')->nullable();
            $table->string('contact_home')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->string('contact_work')->nullable();
            $table->string('contact_whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('nic');
            $table->date('date')->nullable();
            $table->string('e_name')->nullable();
            $table->date('e_date')->nullable();
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
        Schema::dropIfExists('gohonzons');
    }
}
