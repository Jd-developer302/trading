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
        Schema::create('basic_settings', function (Blueprint $table) {
            $table->id(); // Equivalent to `int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY`
            $table->string('title', 100); // Equivalent to `varchar(100)`
            $table->string('color', 100); // Equivalent to `varchar(100)`
            $table->string('phone', 100); // Equivalent to `varchar(100)`
            $table->string('email', 100); // Equivalent to `varchar(100)`
            $table->string('address', 100); // Equivalent to `varchar(100)`
            $table->binary('google_map'); // Equivalent to `blob`
            $table->dateTime('start_date'); // Equivalent to `datetime`
            $table->string('currency', 100); // Equivalent to `varchar(100)`
            $table->string('symbol', 100); // Equivalent to `varchar(100)`
            $table->string('deci', 10); // Equivalent to `varchar(10)`
            $table->unsignedTinyInteger('user_reg')->default(1); // Equivalent to `int(2)` with default value
            $table->boolean('email_verify'); // Equivalent to `tinyint(1)`
            $table->boolean('phone_verify'); // Equivalent to `tinyint(1)`
            $table->boolean('withdraw_status'); // Equivalent to `tinyint(1)`
            $table->boolean('repeat_status'); // Equivalent to `tinyint(1)`
            $table->boolean('email_notify'); // Equivalent to `tinyint(1)`
            $table->boolean('phone_notify'); // Equivalent to `tinyint(1)`
            $table->boolean('google_recap'); // Equivalent to `tinyint(1)`
            $table->string('google_site_key', 191); // Equivalent to `varchar(191)`
            $table->string('google_secret_key', 191); // Equivalent to `varchar(191)`
            $table->string('reference', 100); // Equivalent to `varchar(100)`
            $table->string('reference_bonus', 100); // Equivalent to `varchar(100)`
            $table->string('reference_percent', 100); // Equivalent to `varchar(100)`
            $table->string('from_email', 100); // Equivalent to `varchar(100)`
            $table->binary('email_body'); // Equivalent to `longblob`
            $table->binary('smsapi'); // Equivalent to `blob`
            $table->string('breadcrumb', 100); // Equivalent to `varchar(100)`
            $table->binary('about'); // Equivalent to `blob`
            $table->text('footer_text'); // Equivalent to `text`
            $table->string('footer_image', 100); // Equivalent to `varchar(100)`
            $table->string('copy_text', 191); // Equivalent to `varchar(191)`
            $table->timestamps(); // Equivalent to `created_at` and `updated_at`
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_settings');
    }
};
