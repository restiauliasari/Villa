<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBookingsTableBoaj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('bookings', function (Blueprint $table) {
            $table->enum('status_pembayaran', ['Paid Off','Not Paid Off'])->charset('')->collation('')->change();
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

        Schema::table('bookings', function (Blueprint $table) {
            $table->enum('status_pembayaran', ['Paid Off/Not Paid Off'])->charset('')->collation('')->change();
        });
    }
}
