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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')
                ->onDelete('cascade');
            
            $table->unsignedbiginteger('food_id');
            $table->foreign('food_id')->references('id')->on('food')
                    ->onDelete('cascade');
            $table->string('invoice_id',20);
            // $table->string('restaurant_id',25);
            $table->string('quantity',25);
            $table->string('order_date',30);
            $table->string('order_status',30);
            $table->string('total_cost',35);
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
