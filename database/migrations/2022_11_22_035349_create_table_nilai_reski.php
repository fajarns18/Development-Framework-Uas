<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNilaiReski extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_nilai_reski', function (Blueprint $table) {
            $table->id();
            $table ->string('id_nilai_reski','10');
            $table ->string('nilai_uts_reski','45');
            $table ->string('nilai_tugas_reski','20');
            $table ->string('nilai_kehadiran_reski','15');
            $table ->string('nilai_uas_reski','15');
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
        Schema::dropIfExists('t_nilai_reski');
    }
}
