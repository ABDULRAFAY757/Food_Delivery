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
        Schema::create('delivery_personnels', function (Blueprint $table) {
            $table->id();
            $table->string('personnel_id',20);
            $table->string('personnel_name',25);
            $table->string('personnel_address',30);
            $table->string('personnel_phone',35);
            $table->unsignedbiginteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')
 ->onDelete('cascade');
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_personnels');
    }
};
