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
        Schema::create('dividends', function (Blueprint $table) {
            $table->id('div_id');
            $table->string('percent', 10);
            $table->string('membno', 80);
            $table->string('accumulateamt', 60);
            $table->string('amt', 50);
            $table->timestamps();
            // $table->timestamp('created_on')->nullable();
            // $table->timestamp('updated_on')->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            // $table->primary('div_id');
            $table->unique('membno');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dividends');
    }
};
