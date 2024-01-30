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
        Schema::create('contributions', function (Blueprint $table) {
            $table->id('contrid');
            $table->string('membno', 50);
            $table->string('bankingid', 30);
            $table->string('contribcode', 30);
            $table->string('amountpaid', 30);
            $table->string('bal', 40);
            $table->string('acculatedamt', 40);
            $table->string('datepaid', 50);
            $table->string('referenceno', 60);
            $table->string('modeofpay', 50);
            $table->timestamps();
            // $table->timestamp('created_on')->nullable();
            // $table->timestamp('updated_on')->nullable();
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            $table->time('time');
            // $table->primary('contrid');
            $table->index('membno');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};
