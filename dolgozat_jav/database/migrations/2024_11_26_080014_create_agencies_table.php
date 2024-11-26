<?php

use App\Models\Agencie;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name');
            $table->string('country');
            $table->string('type');
            $table->timestamps();
        });

        Agencie::create([
            'name'=>'user1',
            'country'=>'mexico',
            'type'=>'etgeh',
        ]);

        Agencie::create([
            'name'=>'user2',
            'country'=>'canda',
            'type'=>'trhr',
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
