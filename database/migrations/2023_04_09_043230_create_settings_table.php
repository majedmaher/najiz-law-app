<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->text('main_title');
            $table->text('description_main');

            $table->text('who_are_we_title');
            $table->text('image_who_ar_we');
            $table->longText('description_who_are_we');

            $table->text('description_footer');

            $table->string('whatsapp');
            $table->string('twitter');
            $table->string('linkedin');

            $table->text('address');

            $table->string('phone_number');
            $table->string('email_address');

            $table->text('worktime');

            $table->string('latitude');
            $table->string('longitude');

            $table->text('keywords')->nullable();
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
