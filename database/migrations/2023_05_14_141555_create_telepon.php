<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    /**
     * Run the migrations.
     * 
     * 
     */
    public function up(): void
    {
        
        Schema::create('telepon', function (Blueprint $table) {
            $table->id('id_peminjam')->unsigned()->primary('id_peminjam');
            $table->string('nomor_telepon');
            $table->timestamps();

            $table->foreign('id_peminjam')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('telepon');
    }
};
