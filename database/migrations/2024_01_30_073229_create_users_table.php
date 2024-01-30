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
        Schema::create('users', function (Blueprint $table) {
            $table->id('userid');
            $table->string('username', 20);
            $table->string('password', 40);
            $table->string('role', 30);
            $table->string('status', 30);
            $table->string('token', 50);
            $table->string('groupname', 50);
            $table->date('date');
            $table->time('time');
            $table->timestamps();
            // $table->timestamp('created_on')->nullable();
            // $table->timestamp('updated_on')->nullable();
            $table->string('created_by', 40);
            $table->string('updated_by', 50);
            $table->string('usercode', 30);
            $table->string('phoneno', 30);
            // $table->primary('userid');
            $table->unique('usercode');
            $table->index('phoneno');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
