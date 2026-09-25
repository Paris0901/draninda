<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gallery_photos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('event_name')->nullable();
            $table->string('category')->default('Award Ceremonies'); // Award Ceremonies, UN & Global Summits, WICCI Conventions, Clinical & Speaking
            $table->string('image_path');
            $table->text('caption')->nullable();
            $table->string('year')->nullable();
            $table->integer('order_index')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery_photos');
    }
};
