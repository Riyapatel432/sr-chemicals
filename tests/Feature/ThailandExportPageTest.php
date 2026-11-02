<?php

namespace Tests\Feature;

use Tests\TestCase;

class ThailandExportPageTest extends TestCase
{
    /**
     * Test the Thailand export page route and SEO elements.
     */
    public function test_thailand_page_loads_successfully_with_seo_and_content(): void
    {
        $response = $this->get('/srchems-chemical-exporter-supplier-thailand');

        $response->assertStatus(200);

        // Title and Meta Description
        $response->assertSee('SR Chems Chemical Supplier &amp; Exporter to Thailand | S R Chemicals', false);
        $response->assertSee('Premier Indian manufacturer &amp; bulk exporter of SR Chems inorganic phosphate salts to Thailand', false);
        $response->assertSee('SR Chems phosphate exporter Thailand, Phosphate salt supplier Bangkok, Sodium Hexametaphosphate supplier Thailand, SR Chems DKP MSP supplier Thailand, Bulk industrial chemical importer Thailand', false);

        // Canonical URL
        $response->assertSee('<link rel="canonical" href="https://srchems.com/srchems-chemical-exporter-supplier-thailand">', false);

        // Main Headings and Sections
        $response->assertSee('SR Chems Chemical Supplier &amp; Exporter to Thailand', false);
        $response->assertSee('Reliable Inorganic Phosphate Manufacturer &amp; Bulk Exporter to Thailand', false);
        $response->assertSee('Key Industries We Serve in Thailand', false);
        $response->assertSee('Our Product Portfolio for the Thai Market', false);
        $response->assertSee('Why Thai Importers Partner with S R Chemicals', false);
        $response->assertSee('Request an Export Quote for Thailand', false);

        // Locations
        $response->assertSee('Bangkok');
        $response->assertSee('Rayong');
        $response->assertSee('Chonburi');
        $response->assertSee('Port of Laem Chabang');

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
     * Test HTML sitemap contains link to Thailand page.
     */
    public function test_sitemap_contains_thailand_page_link(): void
    {
        $response = $this->get('/sitemap');

        $response->assertStatus(200);
        $response->assertSee(route('chemical_exporter_supplier_thailand'));
        $response->assertSee('Thailand Chemical Export Services');
    }

    /**
     * Test redirect routes work properly.
     */
    public function test_redirect_routes_work(): void
    {
        $response = $this->get('/pure-grade-chemical-exporter-supplier-thailand');
        $response->assertRedirect('/srchems-chemical-exporter-supplier-thailand');

        $response2 = $this->get('/chemical-exporter-supplier-thailand');
        $response2->assertRedirect('/srchems-chemical-exporter-supplier-thailand');
    }

    /**
     * Test navigation header includes Thailand link.
     */
    public function test_navigation_header_includes_thailand_link(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Locations');
        $response->assertSee(route('chemical_exporter_supplier_thailand'));
    }
}
