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
        Schema::create('trainingdays', function (Blueprint $table) {
            $table->id();
            $table->string('departement');
            $table->text('work_done');
            $table->timestamp('date')->default(now());
            $table->foreignId('training_id')->constrained('trainings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trainingdays', function (Blueprint $table) {
            $table->dropConstrainedForeignId('training_id');
        });
        Schema::dropIfExists('trainingdays');
    }
};
