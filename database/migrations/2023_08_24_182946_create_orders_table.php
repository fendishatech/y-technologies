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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('order_no');

            $table->string('material');
            $table->string('size');
            $table->string('thickness');

            $table->integer('quantity');
            $table->integer('completed')->default(0);

            $table->string('item_name');
            $table->string('item_id');

            $table->enum('progress', ['pending', 'completed'])->default('pending');
            $table->enum('status', ['active', 'completed'])->default('active');

            $table->decimal('price', 10, 2);
            $table->decimal('prepay', 10, 2);
            $table->decimal('remaining', 10, 2);

            $table->string('design_img')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
