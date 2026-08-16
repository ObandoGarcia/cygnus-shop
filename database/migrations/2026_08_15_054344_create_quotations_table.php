<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')
                ->constrained('clients')
                ->onDelete('cascade');
            $table->string('quotation_number');
            $table->date('quotation_date');
            $table->date('expiration_date');
            $table->decimal('total_amount', 10, 2);
            $table->enum('status', [
                'pending',
                'approved',
                'rejected',
                'expired',
                'canceled',
                'sent',
                'draft'
                ])
                ->default('pending');
            $table->text('notes')
                ->nullable();
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
