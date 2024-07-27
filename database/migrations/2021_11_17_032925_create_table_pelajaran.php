<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('id_pelajaran', '15');
            $table->string('nama_pelajaran', '45');
            $table->string('id_kurikulum','10');
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
        Schema::dropIfExists('t_pelajaran');
    }
}
