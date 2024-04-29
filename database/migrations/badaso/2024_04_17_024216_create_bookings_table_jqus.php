<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTableJqus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('bookings', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->bigInteger('user_id')->unsigned();
			$table->bigInteger('room_id')->unsigned();
			$table->bigInteger('services_id')->unsigned();
			$table->string('name', 100);
			$table->string('phone', 20);
			$table->dateTime('checkin');
			$table->dateTime('checkout');
			$table->float('total', 50);
			$table->float('dp', 50);
			$table->enum('status_pembayaran', ['Paid Off/Not Paid Off']);
			$table->timestamps();
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('badaso_users')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('services_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
