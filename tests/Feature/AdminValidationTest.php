<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminValidationTest extends TestCase
{
    /**
     * Test admin login validation rules and custom messages.
     */
    public function test_admin_login_validation_requires_email_and_password()
    {
        $response = $this->post(route('admin.login.submit'), [
            'email' => '',
            'password' => '',
        ]);

        $response->assertSessionHasErrors([
            'email' => 'Please enter your registered admin email address.',
            'password' => 'Please enter your account password.',
        ]);
    }

    public function test_admin_login_validation_requires_valid_email()
    {
        $response = $this->post(route('admin.login.submit'), [
            'email' => 'not-an-email',
            'password' => 'secret123',
        ]);

        $response->assertSessionHasErrors([
            'email' => 'Please provide a valid email address format (e.g., admin@srchems.com).',
        ]);
    }

    public function test_admin_product_creation_validation_requires_fields()
    {
        $admin = User::first() ?? User::factory()->create();

        $response = $this->actingAs($admin)->post(route('admin.products.store'), [
            'name' => '',
            'category' => '',
            'grade' => '',
            'excerpt' => '',
            'description' => '',
            'status' => 'published',
        ]);

        $response->assertSessionHasErrors([
            'name' => 'Product Name is required. Please specify the chemical compound name.',
            'category' => 'Product Category is required. Select or enter a phosphate series.',
            'grade' => 'Commercial Grade is required (e.g. Technical / Pure / Food / Pharma).',
            'excerpt' => 'Short Product Summary / Excerpt is required.',
            'description' => 'Product Overview & Commercial Description is required.',
        ]);
    }

    public function test_admin_product_creation_accepts_when_optional_fields_are_empty()
    {
        $admin = User::first() ?? User::factory()->create();

        $response = $this->actingAs($admin)->post(route('admin.products.store'), [
            'name' => 'Test Chemical Product',
            'category' => 'Sodium Phosphate',
            'grade' => 'Food Grade',
            'excerpt' => 'A test summary for this product.',
            'description' => 'A detailed test overview description.',
            'status' => 'published',
            // Optional fields intentionally left empty:
            'cas_number' => '',
            'chemical_formula' => '',
            'chemical_name' => '',
            'hero_tag' => '',
            'specifications' => '',
            'packaging' => '',
            'meta_title' => '',
            'meta_description' => '',
            'meta_keywords' => '',
            'canonical_url' => '',
        ]);

        $response->assertSessionHasNoErrors();
        \App\Models\Product::where('name', 'Test Chemical Product')->delete();
    }

    public function test_admin_product_creation_with_custom_category()
    {
        $admin = User::first() ?? User::factory()->create();

        $response = $this->actingAs($admin)->post(route('admin.products.store'), [
            'name' => 'Custom Category Chemical Product',
            'category' => '__custom__',
            'custom_category' => 'Specialty Metal Phosphate',
            'grade' => 'Industrial Grade',
            'excerpt' => 'A test summary for custom category product.',
            'description' => 'A detailed test overview description.',
            'status' => 'published',
        ]);

        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('products', [
            'name' => 'Custom Category Chemical Product',
            'category' => 'Specialty Metal Phosphate',
        ]);
        \App\Models\Product::where('name', 'Custom Category Chemical Product')->delete();
    }

    public function test_admin_post_creation_validation_requires_fields()
    {
        $admin = User::first() ?? User::factory()->create();

        $response = $this->actingAs($admin)->post(route('admin.posts.store'), [
            'title' => '',
            'category' => '',
            'excerpt' => '',
            'content' => '',
            'author' => '',
            'published_date' => '',
            'status' => 'published',
        ]);

        $response->assertSessionHasErrors([
            'title' => 'Article Title is required. Please provide a headline for this post.',
            'category' => 'Category Name is required. Please select or enter a category.',
            'excerpt' => 'Short Excerpt / Summary is required. Please provide a brief description.',
            'content' => 'Article Body Content is required. Please write the article content.',
            'author' => 'Author Name is required.',
            'published_date' => 'Publication Date is required.',
        ]);
    }

    public function test_admin_post_creation_accepts_when_optional_fields_are_empty()
    {
        $admin = User::first() ?? User::factory()->create();

        $response = $this->actingAs($admin)->post(route('admin.posts.store'), [
            'title' => 'Test Blog Post Headline',
            'category' => 'Industry Insight',
            'excerpt' => 'A brief test excerpt for blog cards.',
            'content' => '<p>Article body content with details.</p>',
            'author' => 'S R Chemicals',
            'published_date' => now()->toDateString(),
            'status' => 'published',
            // Optional fields intentionally left empty:
            'read_time' => '',
            'meta_title' => '',
            'meta_description' => '',
            'meta_keywords' => '',
            'canonical_url' => '',
            'og_title' => '',
            'og_description' => '',
            'og_image' => '',
            'schema_markup' => '',
        ]);

        $response->assertSessionHasNoErrors();
        \App\Models\Post::where('title', 'Test Blog Post Headline')->delete();
    }
}
