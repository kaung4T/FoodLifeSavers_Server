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
        Schema::create('notify_callbacks', function (Blueprint $table) {
            $table->id();
            $table->integer('status_nm');
            $table->string('status');
            $table->decimal('amount', $total = 10, $places = 2);
            $table->bigInteger('transaction_id');
            $table->string('descriptor');
            $table->timestamp('tdate', 0);
            $table->string('curr', 3);
            $table->string('reason');
            $table->string('id_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notify_callbacks');
    }
};
