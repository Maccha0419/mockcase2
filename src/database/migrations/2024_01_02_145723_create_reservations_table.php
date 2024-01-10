<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->ForeignID('user_id')->constrained('users')->onDelete('cascade');
            $table->ForeignID('shop_id')->constrained('shops')->onDelete('cascade');
            $table->date('reservation_date')->nullable();
            $table->time('reservation_time')->nullable();
            $table->integer('reservation_number')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
