<?php

use App\Models\Crochet;
use App\Models\Tutorial;
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
        Schema::create('crochet_tutorial', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Crochet::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(Tutorial::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crochet_tutorial');
    }
};
