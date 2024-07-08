<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('quantity')->nullable();
            $table->string('height_size')->nullable();
            $table->string('weight_size')->nullable();
            $table->string('type')->nullable();
            $table->string('seriya')->nullable();
            $table->json('complect')->nullable();
            $table->string('profile_color')->nullable();
            $table->string('laminate_color')->nullable();
            $table->string('window_type')->nullable();
            $table->string('profile_type')->nullable();
            $table->string('status')->default('yangi');
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
        Schema::dropIfExists('orders');
    }
}
