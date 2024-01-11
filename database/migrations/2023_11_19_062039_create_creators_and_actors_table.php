<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('creators_and_actors', function (Blueprint $table) {
            $table->id();
            $table->string('full_name_ru');
            $table->string('full_name_en');

            $table->foreignIdFor(\App\Models\Career::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();


            $table->date('date_of_birth');
            $table->text('image');
            $table->text('description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creators_and_actors');
    }
};
