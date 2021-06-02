<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('color');
            $table->string('model');
            $table->enum('vehicle_type', ['Car', 'Suv', 'Bus']);
            $table->string('vehicle_reg_type');
            $table->string('year');
            $table->string('reg_number');
            $table->text('features')->nullable();
            $table->text('destination_axis')->nullable();
            $table->text('location_axis')->nullable();
            $table->decimal('price', 18, 2)->nullable();
            $table->decimal('discount_price', 18, 2)->nullable();
            $table->boolean('is_avaliable', true);
            $table->boolean('is_verified', false);
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
        Schema::dropIfExists('vehicles');
    }
}
