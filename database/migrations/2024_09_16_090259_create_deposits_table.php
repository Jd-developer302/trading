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
        Schema::create('deposits', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id'); 
            $table->string('transaction_id', 255);
            $table->string('amount', 255); 
            $table->string('rate', 100)->nullable(); 
            $table->string('charge', 100); 
            $table->string('net_amount', 100); 
            $table->tinyInteger('payment_type'); 
            $table->binary('message')->nullable(); 
            $table->tinyInteger('status')->default(0); 
            $table->timestamps();
            
            // Add foreign key constraint for user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deposits');
    }
};
