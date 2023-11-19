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
        Schema::table("products", function (Blueprint $table){
            $table->string("image1", 150)->default("No Image1")->change();
            $table->string("image2", 150)->default("No Image1")->change();
            $table->string("image3", 150)->default("No Image1")->change();
            $table->string("image4", 150)->default("No Image1")->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
