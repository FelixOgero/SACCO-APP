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
        Schema::create('membership', function (Blueprint $table) {
            $table->id('memid');
            $table->string('surname', 50);
            $table->string('othernames', 100);
            $table->string('telno', 20);
            $table->string('paddress', 150);
            $table->string('nextofkin', 150);
            $table->string('contactsofkin', 50);
            $table->string('membno', 35);
            $table->string('relationship', 15);
            $table->string('placeofresidence', 150);
            $table->year('registeredyear');
            $table->time('time');
            $table->date('dateofregistration');
            $table->timestamps();
            // $table->timestamp('created_on')->nullable();
            // $table->timestamp('updated_on')->nullable();
            $table->string('created_by', 50);
            $table->string('updated_by', 50);
            $table->string('idno', 50);
            $table->string('email', 50);
            // $table->primary('memid');
            $table->unique('membno');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
