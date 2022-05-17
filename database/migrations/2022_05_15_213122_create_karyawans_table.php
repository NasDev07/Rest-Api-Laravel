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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('nip', 20);
            $table->enum('status', ['Hadir', 'Izin', 'Sakit', 'Alpa', 'Cuti']);
            $table->string('alamat', 100);
            // $table->foreignId('jabatan_id');
            $table->timestamps();
        });

        // Schema::create('jabatans', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('namapt', 50);
        //     $table->string('namajabatan', 50);
        //     $table->string('keterangan', 100);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
};
