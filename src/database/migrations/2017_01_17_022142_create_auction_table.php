<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction', function (Blueprint $table) {
            $table->increments('idlelang');
            $table->string('namalelang', 25);
            $table->enum('jenistawar',['terbuka', 'tertutup']);
            $table->bigInteger('hargamaksimal');
            $table->text('daftarlelang');
            $table->date('tanggalbuka');
            $table->date('tanggaltutup');
            $table->string('uploadfile');
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
        Schema::dropIfExists('auction');
    }
}
