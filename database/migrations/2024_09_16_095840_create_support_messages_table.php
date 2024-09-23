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
        Schema::create('support_messages', function (Blueprint $table) {
            $table->id(); // Equivalent to `int(10) UNSIGNED NOT NULL` for primary key
            $table->unsignedBigInteger('support_id'); // `int(11) NOT NULL`
            $table->string('ticket_number', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->text('message'); // `text COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->tinyInteger('type'); // `int(1) NOT NULL`
            $table->timestamps(); // `created_at` and `updated_at` timestamps

            // Optional: Add foreign key constraint if `support_id` references the `supports` table
            $table->foreign('support_id')->references('id')->on('supports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_messages');
    }
};
