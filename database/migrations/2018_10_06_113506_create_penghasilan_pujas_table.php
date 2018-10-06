<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenghasilanPujasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghasilan_pujas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('transaksi_id');
            $table->integer('penghasilan_sementara');
            $table->integer('penghasulan_bulan_ini');
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
        Schema::dropIfExists('penghasilan_pujas');
    }
}
