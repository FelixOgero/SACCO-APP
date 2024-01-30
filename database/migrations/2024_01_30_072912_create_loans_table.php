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
        Schema::create('loans', function (Blueprint $table) {
            $table->id('loanid');
            $table->string('loantype', 50);
            $table->string('loanamt', 50);
            $table->string('repaymentperiod', 60);
            $table->string('guarrantorcode', 50);
            $table->string('interestrate', 10);
            $table->string('interestamount', 30);
            $table->string('repaymentamt', 30);
            $table->text('purposes');
            $table->date('date');
            $table->time('time');
            $table->timestamps();
            // $table->timestamp('created_on')->nullable();
            // $table->timestamp('updated_on')->nullable();
            $table->string('created_by', 30);
            $table->string('updated_by', 30);
            // $table->primary('loanid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
