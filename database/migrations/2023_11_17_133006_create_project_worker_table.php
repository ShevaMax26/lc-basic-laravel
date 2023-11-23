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
        Schema::create('project_worker', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Project::class)
                ->index()
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignIdFor(\App\Models\Worker::class)
                ->index()
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->unique(['project_id', 'worker_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('project_worker', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropForeign(['worker_id']);
        });

        Schema::dropIfExists('project_workers');
    }
};
