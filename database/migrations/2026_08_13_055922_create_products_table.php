<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('code')->unique();
            $table->decimal('purchase_price', 10, 2);
            $table->decimal('sale_price', 10, 2);
            $table->integer('stock');
            $table->integer('available_stock');
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade');
            $table->foreignId('brand_id')
                ->constrained('brands')
                ->onDelete('cascade');
            $table->enum('status',[
                'active',
                'inactive',
                'discontinued',
                'out_of_stock'
                ])
                ->default('active');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
