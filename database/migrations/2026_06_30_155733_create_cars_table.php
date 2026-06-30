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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->foreignId('brand_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name');
            $table->string('slug')->unique();

            $table->year('model_year');

            $table->enum('transmission', [
                'manual',
                'automatic'
            ]);

            $table->enum('fuel_type', [
                'petrol',
                'diesel',
                'electric',
                'hybrid',
                'cng'
            ]);

            $table->unsignedTinyInteger('seats');
            $table->unsignedTinyInteger('luggage_capacity')->nullable();

            $table->string('color')->nullable();

            $table->string('registration_number')->unique();

            $table->decimal('hourly_price', 10, 2)->default(0);
            $table->decimal('daily_price', 10, 2)->default(0);
            $table->decimal('weekly_price', 10, 2)->default(0);

            $table->decimal('security_deposit', 10, 2)->default(0);

            $table->text('description')->nullable();

            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
