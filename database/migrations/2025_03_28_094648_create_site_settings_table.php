<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->string('logo', 255)->nullable(); // Logo URL
            $table->string('support_phone', 255)->nullable(); // Support phone number
            $table->string('phone_one', 255)->nullable(); // Secondary phone number
            $table->string('email', 255)->nullable(); // Email address
            $table->text('company_address')->nullable(); // Company address
            $table->string('facebook', 255)->nullable(); // Facebook link
            $table->string('zalo', 255)->nullable(); // Zalo link
            $table->string('youtube', 255)->nullable(); // YouTube link
            $table->string('copyright', 255)->nullable(); // Copyright information
            $table->timestamps(); // Created_at and Updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
}

