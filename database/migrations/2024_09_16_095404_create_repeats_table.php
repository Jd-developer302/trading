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
        Schema::create('repeats', function (Blueprint $table) {
            $table->id(); // Equivalent to `int(10) UNSIGNED NOT NULL` for primary key
            $table->unsignedBigInteger('user_id'); // `int(11) NOT NULL` and unsigned
            $table->string('investment_id', 191); // `varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL`
            $table->dateTime('repeat_time'); // `datetime NOT NULL`
            $table->dateTime('made_time')->nullable(); // `datetime DEFAULT NULL`
            $table->integer('total_repeat'); // `int(11) NOT NULL`
            $table->tinyInteger('status')->default(0); // `tinyint(1) NOT NULL DEFAULT '0'`
            $table->timestamps(); // `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repeats');
    }
};
