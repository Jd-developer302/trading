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
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id(); // Equivalent to `int(10) UNSIGNED NOT NULL` for primary key
            $table->string('name', 255); // `varchar(255) NOT NULL`
            $table->string('image', 255); // `varchar(255) NOT NULL`
            $table->string('rate', 30)->nullable(); // `varchar(30) DEFAULT NULL`
            $table->string('fix', 100); // `varchar(100) NOT NULL`
            $table->string('percent', 100); // `varchar(100) NOT NULL`
            $table->text('val1'); // `text NOT NULL`
            $table->string('val2', 255)->nullable(); // `varchar(255) DEFAULT NULL`
            $table->string('currency', 255)->default('Method Currency'); // `varchar(255) NOT NULL DEFAULT 'Method Currency'`
            $table->tinyInteger('status'); // `tinyint(4) NOT NULL`
            $table->timestamps(); // `created_at` and `updated_at` timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
