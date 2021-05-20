<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahBarusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah_barus', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('nik');
            $table->string('nohp');
            $table->string('email');
            $table->string('alamat');
            $table->string('pengajuan');
            $table->string('cabang');
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
        Schema::dropIfExists('nasabah_barus');
    }
}
