<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            
            $table->date('event_date');
            $table->string('venue');
            $table->text('galleries');

            // details
            $table->string('shoulder')->nullable();
            $table->string('upper_bust')->nullable();
            $table->string('bust')->nullable();
            $table->string('rib')->nullable();
            $table->string('hip1')->nullable();
            $table->string('hip2')->nullable();
            $table->string('figure1')->nullable();
            $table->string('figure2')->nullable();
            $table->string('chest_front')->nullable();
            $table->string('chest_back')->nullable();
            $table->string('shoulder_to_back')->nullable();
            $table->string('bust_point')->nullable();
            $table->string('arms')->nullable();
            $table->string('circulation_of_shoulder')->nullable();
            $table->string('length_of_sleeves')->nullable();
            $table->string('length_of_skirt')->nullable();
            $table->string('armpit_to_floor')->nullable();
            $table->string('length_of_pants')->nullable();
            $table->string('crotch')->nullable();
            $table->string('leg')->nullable();
            $table->string('knee')->nullable();
            $table->string('wrist')->nullable();
            $table->string('neck')->nullable();
            $table->string('head')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
