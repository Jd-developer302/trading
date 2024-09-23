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
        Schema::create('repeat_logs', function (Blueprint $table) {
            $table->id(); // Equivalent to `int(10) UNSIGNED NOT NULL` for primary key
            $table->unsignedBigInteger('user_id'); // `int(11) NOT NULL` and unsigned
            $table->string('trx_id', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->unsignedBigInteger('investment_id'); // `int(11) NOT NULL` and unsigned
            $table->string('amount', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->dateTime('made_time'); // `datetime NOT NULL`
            $table->timestamps(); // `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repeat_logs');
    }
};
