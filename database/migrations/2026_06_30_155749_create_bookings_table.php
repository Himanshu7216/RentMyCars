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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->string('booking_number')->unique();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('car_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('driver_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->enum('booking_type', [
                'self_drive',
                'chauffeur',
                'wedding',
                'tour',
                'long_drive'
            ]);

            $table->string('pickup_location');
            $table->string('drop_location')->nullable();

            $table->dateTime('pickup_datetime');
            $table->dateTime('return_datetime');

            $table->decimal('total_amount', 10, 2);

            $table->decimal('security_deposit', 10, 2)->default(0);

            $table->enum('booking_status', [
                'pending',
                'confirmed',
                'ongoing',
                'completed',
                'cancelled'
            ])->default('pending');

            $table->enum('payment_status', [
                'pending',
                'partial',
                'paid',
                'failed',
                'refunded'
            ])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
