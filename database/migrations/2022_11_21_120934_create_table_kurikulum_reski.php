<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKurikulumReski extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_kurikulum_reski', function (Blueprint $table) {
            $table->id();
            $table->string('id_kurikulum','10');
            $table->string('nama_kurikulum','45');
            $table->string('id_jurusan','10');
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
        Schema::dropIfExists('t_kurikulum_reski');
    }
}
