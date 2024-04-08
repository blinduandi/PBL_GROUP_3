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
        Schema::create('liveries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->enum('transport_type', ['Truck', 'Van', 'Bike', 'Car'])->nullable();
            $table->unsignedInteger('transport_capacity')->nullable();
            $table->enum('status', ['Standing', 'Working', 'Inactive'])->default('Inactive');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livery');
    }
};
