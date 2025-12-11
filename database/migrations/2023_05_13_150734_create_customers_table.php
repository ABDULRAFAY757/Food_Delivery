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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

        // The departments table MUST exist and MUST have ‘id’ as Primary key
        $table->unsignedbiginteger('resturant_id');
        $table->foreign('resturant_id')->references('id')->on('resturants')
        ->onDelete('cascade');



            
            $table->string('email',25);
            $table->string('name',30);
            $table->string('address',35);
            $table->string('phone_no',40);
            $table->string('payment_info',40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
