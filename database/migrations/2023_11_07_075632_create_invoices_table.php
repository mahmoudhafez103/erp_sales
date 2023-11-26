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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->dateTime('invoice_date');
            $table->bigInteger('customer_code')->nullable();
            $table->text('notes')->nullable();
            $table->decimal('discount_value', 10, 2)->default(0.00);
            $table->decimal('total_cost_items', 10, 2)->default(0.00);
            $table->decimal('total_befor_discount', 10, 2)->default(0.00);
            $table->decimal('total_cost', 10, 2)->default(0.00)->nullable();
            $table->enum('pill_type', ['now', 'later'])->nullable();
            $table->integer('added_by');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
