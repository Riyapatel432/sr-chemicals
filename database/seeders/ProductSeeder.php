<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = base_path('extracted_products.json');
        if (!file_exists($jsonPath)) {
            $this->command->warn('extracted_products.json not found, skipping product seed.');
            return;
        }

        $products = json_decode(file_get_contents($jsonPath), true);
        if (!is_array($products)) {
            $this->command->warn('Invalid extracted_products.json format.');
            return;
        }

        foreach ($products as $p) {
            Product::updateOrCreate(
                ['slug' => $p['slug']],
                [
                    'name' => $p['name'] ?? Str::headline($p['slug']),
                    'category' => $p['category'] ?? 'Sodium Phosphate',
                    'is_category' => $p['is_category'] ?? false,
                    'chemical_name' => $p['name'] ?? '',
                    'chemical_formula' => $p['chemical_formula'] ?? '',
                    'cas_number' => $p['cas_number'] ?? '',
                    'grade' => 'Food & Industrial Grade',
                    'hero_tag' => $p['hero_tag'] ?? '',
                    'excerpt' => $p['excerpt'] ?? '',
                    'description' => $p['excerpt'] ?? '',
                    'specifications' => null,
                    'applications' => 'Water Treatment, Food Processing, Detergents, Metal Phosphating, Pharma Formulations',
                    'packaging' => '25 Kg / 50 Kg HDPE bags with inner liner, 1000 Kg Jumbo Bags',
                    'featured_image' => $p['featured_image'] ?? 'assets/images/logo/logo.1.jpg',
                    'image_alt' => $p['name'] . ' - S R Chemicals',
                    'blade_view' => $p['blade_view'] ?? null,
                    'status' => 'published',
                    'meta_title' => $p['meta_title'] ?? ($p['name'] . ' Manufacturer | SR Chems'),
                    'meta_description' => $p['meta_description'] ?? $p['excerpt'],
                    'meta_keywords' => $p['meta_keywords'] ?? ($p['category'] . ', phosphate chemicals, S R Chemicals'),
                    'canonical_url' => $p['canonical_url'] ?? ('https://srchems.com/' . $p['slug']),
                    'og_title' => $p['og_title'] ?? $p['meta_title'],
                    'og_description' => $p['og_description'] ?? $p['meta_description'],
                    'og_image' => $p['og_image'] ?? 'https://www.srchems.com/assets/images/logo/logo.1.jpg',
                ]
            );
        }

        $this->command->info('Successfully seeded ' . count($products) . ' products and categories into database.');
    }
}
