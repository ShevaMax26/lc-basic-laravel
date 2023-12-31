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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Worker::class)
                ->index()
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->string('city')->nullable();
            $table->string('skill')->nullable();
            $table->integer('experience')->nullable();
            $table->date('finished_study_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
