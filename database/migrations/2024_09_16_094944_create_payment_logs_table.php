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
        Schema::create('payment_logs', function (Blueprint $table) {
            $table->id(); // Equivalent to `int(10) UNSIGNED NOT NULL`
            $table->string('member_id', 255); // `varchar(255) NOT NULL`
            $table->string('custom', 255); // `varchar(255) NOT NULL`
            $table->integer('payment_type'); // `int(11) NOT NULL`
            $table->string('amount', 255); // `varchar(255) NOT NULL`
            $table->string('charge', 100); // `varchar(100) NOT NULL`
            $table->string('net_amount', 100); // `varchar(100) NOT NULL`
            $table->string('usd', 100)->nullable(); // `varchar(100) DEFAULT NULL`
            $table->string('btc_amo', 100)->nullable(); // `varchar(100) DEFAULT NULL`
            $table->string('btc_acc', 255)->nullable(); // `varchar(255) DEFAULT NULL`
            $table->integer('status')->default(0); // `int(11) NOT NULL DEFAULT '0'`
            $table->timestamps(); // `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_logs');
    }
};
