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
        Schema::create('withdraw_logs', function (Blueprint $table) {
            $table->id(); // Equivalent to `int(10) UNSIGNED NOT NULL`
            $table->unsignedBigInteger('user_id'); // `int(11) NOT NULL`
            $table->unsignedBigInteger('method_id'); // `int(11) NOT NULL`
            $table->string('transaction_id', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('amount', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('charge', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('net_amount', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->text('send_details')->nullable(); // `text COLLATE utf8mb4_unicode_ci`, nullable
            $table->text('message')->nullable(); // `text COLLATE utf8mb4_unicode_ci`, nullable
            $table->tinyInteger('status')->default(0); // `tinyint(1) NOT NULL DEFAULT '0'`
            $table->timestamps(); // `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraw_logs');
    }
};
