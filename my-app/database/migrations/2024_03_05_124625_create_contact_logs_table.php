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
        Schema::create('contact_logs', function (Blueprint $table) {
                $table->id();
                $table->string('customer_first_name'); 
                $table->string('customer_last_name'); 
                $table->string('customer_phone'); 
                $table->string('customer_email'); 
                $table->unsignedBigInteger('product_id'); // foreign key column
                $table->string('subject'); 
                $table->string('message'); 
                $table->timestamps();
                
                // Foreign key constraint for product_id
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_logs');
    }
};
