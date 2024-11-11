<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suntik_kb', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPasien');
            $table->date('tanggalKb');
            $table->date('tanggalPengingat');
            $table->string('metodePengingat');
            $table->date('tanggalKbBerikutnya');
            $table->timestamps();

            $table->foreign('idPasien')->references('id')->on('dosens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
