<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataLaundryModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DataLaundry', function (Blueprint $table) {
            $table->increments('idTrans');
            $table->string('cust_name');
            $table->integer('cust_num');
            $table->integer('kg_laundry');
            $table->integer('pcs_laundry');
            $table->integer('type_laundry');
            $table->date('dateIn');
            $table->date('dateDone');
            $table->date('dateTaken');
            $table->integer('total_payment');
            $table->string('payment_stats');
            $table->integer('idPetugas');
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
        Schema::dropIfExists('DataLaundry');
    }
}
