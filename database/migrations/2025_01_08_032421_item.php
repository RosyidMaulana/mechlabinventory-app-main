<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_item', function (Blueprint $table) {
            $table->string('id');
            $table->string('code_item')->unique();
            $table->string('description');
            $table->integer('isDeleted')->default(0)->nullable();
            $table->integer('stock')->default(0);
            $table->integer('borrowed')->default(0);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_item');
    }
};
