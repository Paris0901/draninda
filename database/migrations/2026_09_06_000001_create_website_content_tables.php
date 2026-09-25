<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Site Settings / Hero metadata
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('group')->default('general');
            $table->timestamps();
        });

        // 2. Career Milestones & Timeline
        Schema::create('timeline_milestones', function (Blueprint $table) {
            $table->id();
            $table->string('period'); // e.g. "2009", "2010–2013", "2013–2016", "2017–2018", "Feb 2026", "Apr 2026"
            $table->string('title');
            $table->string('organization')->nullable();
            $table->string('location')->nullable();
            $table->string('category')->default('Academic'); // Education, Residency, Academic, Leadership, Tech, Clinical
            $table->text('description');
            $table->string('badge')->nullable();
            $table->integer('order_index')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 3. Awards & Honors
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('bestowing_organization');
            $table->string('year');
            $table->string('category')->default('Global'); // Global, National, Clinical, Media
            $table->string('icon')->nullable(); // Emoji or icon name
            $table->string('image_path')->nullable();
            $table->text('field_of_recognition')->nullable();
            $table->text('description');
            $table->string('badge')->nullable();
            $table->integer('order_index')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 4. Academic Research & Publications
        Schema::create('research_papers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('journal');
            $table->string('year');
            $table->string('category')->default('Trauma & Violence'); // Trauma, Psychosexual, Neuroimmunology, Public Health, Addiction
            $table->string('authors')->default('Dr. Aninda Sidhana (Sidana)');
            $table->text('description');
            $table->string('url')->nullable();
            $table->string('badge_color')->default('teal'); // teal, pink, violet
            $table->integer('order_index')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 5. Clinical Protocols & IP
        Schema::create('protocols', function (Blueprint $table) {
            $table->id();
            $table->string('protocol_number'); // e.g. "Protocol I"
            $table->string('title'); // e.g. "The MINDWEAVE Framework™"
            $table->string('slug')->unique(); // e.g. "mindweave"
            $table->string('subtitle')->nullable();
            $table->string('category')->default('Trauma Recovery');
            $table->string('icon')->default('🧠');
            $table->text('summary');
            $table->longText('theoretical_foundation')->nullable();
            $table->json('pillars')->nullable(); // Array of {title, description}
            $table->text('clinical_guidelines')->nullable();
            $table->string('co_architect')->default('Dr. Aninda Sidhana & Dr. Amrit Pattojoshi');
            $table->string('licensing_scope')->nullable();
            $table->integer('order_index')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 6. Initiatives & Movements
        Schema::create('initiatives', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('badge')->nullable();
            $table->string('tagline')->nullable();
            $table->text('description');
            $table->string('url')->nullable();
            $table->string('category')->default('Movement'); // Tech, Sports Architecture, Media Campaign, Public Health
            $table->string('card_theme')->default('dd'); // dd, sm
            $table->integer('order_index')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 7. Media Appearances & Podcasts
        Schema::create('media_appearances', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('show_name');
            $table->string('host')->nullable();
            $table->string('media_type')->default('Podcast'); // Podcast, Keynote, Video Interview, Article
            $table->text('description');
            $table->string('spotify_url')->nullable();
            $table->string('apple_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('badge_color')->default('teal');
            $table->integer('order_index')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 8. Testimonials / Colleague Praise
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('author_name');
            $table->string('author_role');
            $table->string('initials', 5);
            $table->text('quote');
            $table->integer('order_index')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 9. Contact Inquiries
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('organization')->nullable();
            $table->string('inquiry_type');
            $table->text('message');
            $table->string('status')->default('unread'); // unread, replied, archived
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inquiries');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('media_appearances');
        Schema::dropIfExists('initiatives');
        Schema::dropIfExists('protocols');
        Schema::dropIfExists('research_papers');
        Schema::dropIfExists('awards');
        Schema::dropIfExists('timeline_milestones');
        Schema::dropIfExists('site_settings');
    }
};
