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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category')->nullable();
            $table->boolean('is_category')->default(false);
            $table->string('chemical_name')->nullable();
            $table->string('chemical_formula')->nullable();
            $table->string('cas_number')->nullable();
            $table->string('grade')->nullable();
            $table->string('hero_tag')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->longText('specifications')->nullable();
            $table->text('applications')->nullable();
            $table->string('packaging')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('blade_view')->nullable();
            $table->enum('status', ['published', 'draft'])->default('published');

            // SEO & Social Meta fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->text('schema_markup')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
