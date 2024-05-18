<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            Schema::create('media', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('is_image');
                $table->string('url');
                $table->string('catolog_id');
                $table->timestamps();
            });
            $table->timestamps();
        });
    }

    /**q
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
};
