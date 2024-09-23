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
        Schema::create('withdraw_methods', function (Blueprint $table) {
            $table->id(); // Equivalent to `int(10) UNSIGNED NOT NULL`
            $table->string('name', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('image', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('withdraw_min', 100); // `varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('withdraw_max', 100); // `varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('fix', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('percent', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('duration', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->tinyInteger('status'); // `tinyint(1) NOT NULL`
            $table->timestamps(); // `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraw_methods');
    }
};
