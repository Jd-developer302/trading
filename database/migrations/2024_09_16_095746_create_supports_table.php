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
        Schema::create('supports', function (Blueprint $table) {
            $table->id(); // Equivalent to `int(10) UNSIGNED NOT NULL` for primary key
            $table->unsignedBigInteger('user_id'); // `int(11) NOT NULL`
            $table->string('subject', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->string('ticket_number', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->tinyInteger('status'); // `tinyint(4) NOT NULL`
            $table->timestamps(); // `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supports');
    }
};
