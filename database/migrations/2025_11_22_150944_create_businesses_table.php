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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('tagline')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover_image')->nullable();

            // Contact
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('website')->nullable();

            // Location
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->decimal('latitude', 10, 6)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();

            // Meta
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('employees_count')->nullable();
            $table->year('founded_year')->nullable();
            $table->string('registration_number')->nullable();

            // Business Data
            $table->json('opening_hours')->nullable();
            $table->json('social_links')->nullable();
            $table->json('services')->nullable();
            $table->json('features')->nullable();

            // Directory
            $table->boolean('is_verified')->default(false);
            $table->string('status')->default('active');
            $table->unsignedBigInteger('views_count')->default(0);
            $table->unsignedBigInteger('reviews_count')->default(0);
            $table->float('rating', 2, 1)->default(0);

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
