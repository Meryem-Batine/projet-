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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('demandeur');
            $table->string('contact');
            $table->date('dob');
            $table->time('heure');
            $table->string('nature');
            $table->string('desc');
            $table->string('moyen');
            $table->string('cout')->nullable();
            $table->string('techn');
            $table->string('trv');
            $table->string('rpn')->nullable();
            $table->date('date');
            $table->time('debut');
            $table->time('fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
