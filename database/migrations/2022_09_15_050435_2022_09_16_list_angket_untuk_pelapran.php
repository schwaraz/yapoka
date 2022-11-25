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
        Schema::create('listsoalpelaporan', function (Blueprint $table) {
            $table->integer('nomerpelaporan');
            $table->string('status_pengisian');
            $table->string('list_id_soal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listsoalpelaporan');

    }
};
