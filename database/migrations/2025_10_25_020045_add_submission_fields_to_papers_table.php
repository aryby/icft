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
        Schema::table('papers', function (Blueprint $table) {
            $table->string('submission_option')->nullable()->after('track');
            $table->string('affiliation')->nullable()->after('submission_option');
            $table->string('country')->nullable()->after('affiliation');
            $table->string('phone')->nullable()->after('country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('papers', function (Blueprint $table) {
            $table->dropColumn(['submission_option', 'affiliation', 'country', 'phone']);
        });
    }
};
