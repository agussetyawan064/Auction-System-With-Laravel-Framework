<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->string('nama_admin', 25);
            $table->string('alamat_admin', 25);
            $table->date('tanggal_lahir');
            $table->string('kota_lahir', 15);
            $table->char('jenis_kelamin', 1);
            $table->unsignedInteger('id_login');
            $table->foreign('id_login')->references('id_login')->on('login')->onDelete('CASCADE');
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
        Schema::dropIfExists('admin');
    }
}
