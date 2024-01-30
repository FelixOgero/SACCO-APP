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
        Schema::create('guarrantors', function (Blueprint $table) {
            $table->id('guarrantid');
            $table->string('guarrantname', 100);
            $table->string('membcode', 40);
            $table->string('guarrantto', 30);
            $table->string('guarrantamount', 50);
            $table->text('purpose');
            $table->string('repayment_period', 30);
            $table->date('date');
            $table->time('time');
            $table->timestamps();
            // $table->timestamp('created_on')->nullable();
            // $table->timestamp('updated_on')->nullable();
            $table->string('created_by', 40);
            $table->string('updated_by', 50);
            $table->integer('status');
            // $table->primary('guarrantid');
            $table->index('membcode');
            $table->index('guarrantto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guarrantors');
    }
};
