<?php

use App\Models\Participate;
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
        Schema::create('participates', function (Blueprint $table) {
            $table->primary(['user_id', 'event_id']);
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('event_id')->references('event_id')->on('events');
            $table->boolean('present');
            $table->timestamps();
        });

        Participate::create([
            'user_id'=>1,
            'event_id'=>1,
            'present'=>true
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participates');
    }
};
