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
        Schema::create('membership_categories', function (Blueprint $table) {
            $table->id('membcateid');
            $table->string('membcatecode', 50);
            $table->string('membcatename', 50);
            $table->string('membcatetype', 60);
            $table->date('date');
            $table->time('time');
            $table->timestamps();
            // $table->timestamp('created_on')->nullable();
            // $table->timestamp('updated_on')->nullable();
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            // $table->primary('membcateid');
            $table->unique('membcatecode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_categories');
    }
};
