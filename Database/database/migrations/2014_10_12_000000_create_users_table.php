<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('npm',15);
            $table->string('nama',255);
            $table->enum('Jenis_Kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('prodi', ['Teknik Informatika', 'Teknik Mesin', 'Akutansi', 'Manajemen', 'Perdagangan Internasional', 'Teknik Industri', 'Teknik Sipil', 'Teknik Elektro', 'Sistem Informasi','Perpustakaan & Sains Informasi', 'Desain Grafis', ' Produksi Film & Televisi', 'Bahasa Inggris', 'Bahasa Jepang']);
            $table->integer('angkatan');
            $table->text('alamat');
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
        Schema::dropIfExists('users');
    }
}
