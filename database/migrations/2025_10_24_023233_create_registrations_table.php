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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('registration_type'); // student, academic, industry, etc.
            $table->string('full_name');
            $table->string('email');
            $table->string('affiliation');
            $table->string('country');
            $table->string('phone')->nullable();
            $table->text('dietary_requirements')->nullable();
            $table->text('special_requests')->nullable();
            $table->decimal('registration_fee', 10, 2);
            $table->string('currency', 3)->default('USD');
            $table->enum('payment_status', ['pending', 'paid', 'verified', 'rejected'])->default('pending');
            $table->string('payment_method')->nullable();
            $table->string('transaction_id')->nullable();
            $table->text('payment_notes')->nullable();
            $table->string('receipt_file')->nullable();
            $table->timestamp('payment_verified_at')->nullable();
            $table->foreignId('verified_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
