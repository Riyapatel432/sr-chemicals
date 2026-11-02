<?php

namespace Tests\Feature;

use Tests\TestCase;

class VietnamExportPageTest extends TestCase
{
    /**
     * Test the Vietnam export page route and SEO elements.
     */
    public function test_vietnam_page_loads_successfully_with_seo_and_content(): void
    {
        $response = $this->get('/chemical-exporter-supplier-vietnam');

        $response->assertStatus(200);

        // Title and Meta Description
        $response->assertSee('Chemical Supplier &amp; Exporter to Vietnam | S R Chemicals India', false);
        $response->assertSee('Premier Indian manufacturer &amp; bulk exporter of pure grade inorganic phosphate salts to Vietnam', false);
        $response->assertSee('Inorganic phosphate exporter to Vietnam, Phosphate salt supplier Ho Chi Minh City, Sodium Hexametaphosphate supplier Vietnam, Bulk chemical importer Hai Phong, High purity pure grade phosphates export India', false);

        // Canonical URL
        $response->assertSee('<link rel="canonical" href="https://srchems.com/chemical-exporter-supplier-vietnam">', false);

        // Main Headings and Sections
        $response->assertSee('Chemical Supplier &amp; Exporter to Vietnam', false);
        $response->assertSee('Trusted Inorganic Phosphate Manufacturer &amp; Bulk Exporter to Vietnam', false);
        $response->assertSee('Strategic Industries We Serve in Vietnam', false);
        $response->assertSee('Export Product Portfolio for the Vietnamese Market', false);
        $response->assertSee('Why Vietnamese Importers Partner with S R Chemicals', false);
        $response->assertSee('Request an Export Quote for Vietnam', false);

        // Locations
        $response->assertSee('Ho Chi Minh City');
        $response->assertSee('Hai Phong');
        $response->assertSee('Da Nang');

        // Products in Table
        $response->assertSee('Sodium Hexametaphosphate (SHMP)');
        $response->assertSee('(NaPO3)6');
        $response->assertSee('Trisodium Phosphate (TSP)');
        $response->assertSee('Na3PO4');
        $response->assertSee('Monosodium Phosphate (MSP)');
        $response->assertSee('NaH2PO4');
        $response->assertSee('Disodium Phosphate (DSP)');
        $response->assertSee('Na2HPO4');
        $response->assertSee('Dipotassium Phosphate (DKP)');
        $response->assertSee('K2HPO4');

        // Contact info
        $response->assertSee('9913645555');
        $response->assertSee('info@srchems.com');
        $response->assertSee('Panoli');
    }

    /**
     * Test About Us page contains the Vietnam Export section and CTA link.
     */
    public function test_about_us_page_contains_vietnam_service_section_and_cta(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('Bulk Chemical Export &amp; Supply to Vietnam', false);
        $response->assertSee('Ho Chi Minh City');
        $response->assertSee('Hai Phong');
        $response->assertSee('Da Nang');
        $response->assertSee('Explore Our Vietnam Export Services');
        $response->assertSee(route('chemical_exporter_supplier_vietnam'));
    }

    /**
     * Test HTML sitemap contains link to Vietnam page.
     */
    public function test_sitemap_contains_vietnam_page_link(): void
    {
        $response = $this->get('/sitemap');

        $response->assertStatus(200);
        $response->assertSee(route('chemical_exporter_supplier_vietnam'));
        $response->assertSee('Vietnam Chemical Export Services');
    }

    /**
     * Test core pages load without regressions.
     */
    public function test_core_pages_work_properly(): void
    {
        $this->get('/')->assertStatus(200);
        $this->get('/our-products')->assertStatus(200);
        $this->get('/sodium-phosphate')->assertStatus(200);
        $this->get('/potassium-phosphate')->assertStatus(200);
        $this->get('/ammonium-phosphate')->assertStatus(200);
        $this->get('/blog')->assertStatus(200);
        $this->get('/contact-us')->assertStatus(200);
    }
}
