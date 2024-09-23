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
        Schema::create('plans', function (Blueprint $table) {
            $table->id(); // Equivalent to `int(10) UNSIGNED NOT NULL` for primary key
            $table->string('name', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('image', 100); // `varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('minimum', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('maximum', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('percent', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->integer('time'); // `int(11) NOT NULL`
            $table->unsignedInteger('compound_id'); // `int(5) NOT NULL` and unsigned
            $table->tinyInteger('status'); // `tinyint(4) NOT NULL`
            $table->timestamps(); // `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
