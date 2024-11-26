<?php

use App\Models\Event;
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
            $table->id('event_id');
            $table->foreignId('agency_id')->references('agency_id')->on('agencies');
            $table->date('date');
            $table->smallInteger('limit');
            $table->timestamps();
        });

        Event::create([
            'agency_id'=>1,
            'date'=>'2023-12-5',
            'limit'=>10,
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
