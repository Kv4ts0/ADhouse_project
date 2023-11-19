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
        Schema::table("products", function ($table){
            $table->string("name", 50)->nullable()->change();
            $table->string("category", 50)->default("No category")->change();
            $table->double("price")->default(0)->change();
            $table->double("size")->default(0)->change();
            $table->string("brand", 50)->default("Without brand description")->change();
            $table->string("color", 50)->default("Without color description")->change();
            $table->string("material", 50)->default("Without material description")->change();
            $table->string("description", 500)->default("Without main description")->change();
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
