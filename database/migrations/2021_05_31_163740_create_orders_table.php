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
            $table->integer('vehicle_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('reference');
            $table->string('location');
            $table->string('destination');
            $table->date('pickup_date');
            $table->date('dropoff_date');
            $table->string('duration');
            $table->string('no_of_passenger');
            $table->decimal('budget', 18, 2)->nullable();
            $table->string('order_type')->nullable();
            $table->boolean('is_paid', false);
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
