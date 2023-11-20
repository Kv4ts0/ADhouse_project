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
        Schema::table("slides", function ($table){
            $table->string("name", 50)->nullable()->change();
            $table->string("description", 1000)->default("Without main description")->change();
            $table->string("image", 150)->default("No Image")->change();
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
