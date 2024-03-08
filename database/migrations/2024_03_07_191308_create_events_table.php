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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('form_id');
            $table->string('topic');
            $table->longText('message')->nullable();
            $table->string('image');
            $table->string('venue');
            $table->string('duration');
            $table->date('date');
            $table->time('time');
            $table->boolean('active')->default(0);
            $table->string('slug');
            $table->time('time_to');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
