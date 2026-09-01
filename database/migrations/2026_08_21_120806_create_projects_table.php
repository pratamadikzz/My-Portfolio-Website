<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('category');
            $table->text('description');

            $table->longText('overview')->nullable();
            $table->longText('problem')->nullable();
            $table->longText('solution')->nullable();

            $table->string('role')->nullable();
            $table->string('status')->default('In Progress');
            $table->year('year')->nullable();

            $table->json('tech_stack')->nullable();
            $table->json('features')->nullable();
            $table->json('screenshots')->nullable();
            $table->json('challenges')->nullable();

            $table->string('live_url')->nullable();
            $table->string('github_url')->nullable();

            $table->string('image')->nullable();

            $table->unsignedBigInteger('likes')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
