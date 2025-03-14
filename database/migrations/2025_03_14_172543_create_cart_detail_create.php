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
        Schema::create('cart_detail_create', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('cart')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('product')->onDelete('cascade');
            $table->foreignId('product_variant_id')->constrained('product_variant')->onDelete('cascade');
            $table->integer('quantity');
            $table->double('price');

            // lưu nếu như không có trong biến the
            $table->string('color')->nullable();
            $table->string('size')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_detail_create');
    }
};
