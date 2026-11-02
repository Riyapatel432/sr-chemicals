<?php

namespace Tests\Feature;

use Tests\TestCase;

class ThailandBlogPageTest extends TestCase
{
    /**
     * Test the Thailand phosphates blog page loads successfully with SEO elements and content.
     */
    public function test_thailand_blog_page_loads_successfully_with_seo_and_content(): void
    {
        $response = $this->get('/blog/srchems-phosphates-water-treatment-metal-cleaning-thailand');

        $response->assertStatus(200);

        // Title and Meta Description
        $response->assertSee('How SR Chems Phosphates Enhance Scale Control &amp; Metal Cleaning in Thailand | S R Chemicals', false);
        $response->assertSee('Learn how SR Chems Sodium Hexametaphosphate (SHMP) and TSP/DSP optimize industrial boiler scale control', false);
        $response->assertSee('SR Chems SHMP Thailand', false);
        $response->assertSee('Sodium Hexametaphosphate supplier Bangkok', false);
        $response->assertSee('Boiler water treatment chemicals Rayong', false);
        $response->assertSee('Trisodium phosphate exporter Chonburi', false);

        // Canonical URL
        $response->assertSee('<link rel="canonical" href="https://srchems.com/blog/srchems-phosphates-water-treatment-metal-cleaning-thailand">', false);

        // Main Headings and Sections
        $response->assertSee('How SR Chems Phosphates Enhance Scale Control &amp; Metal Cleaning in Thailand', false);
        $response->assertSee('High-Solubility Sodium Hexametaphosphate (SHMP) for Industrial Water Conditioning', false);
        $response->assertSee('Trisodium Phosphate (TSP) &amp; Disodium Phosphate (DSP) in Automotive Pre-Treatment', false);
        $response->assertSee('Heavy-Duty Alkaline Degreasing with TSP', false);
        $response->assertSee('Iron Phosphating with DSP', false);
        $response->assertSee('Specialized Industrial Formulations with Dipotassium Phosphate (DKP)', false);
        $response->assertSee('Direct Export Advantages with S R Chemicals', false);
        $response->assertSee('Request an Export Quote for Thailand', false);

        // Chemistry and Technical Details
        $response->assertSee('(NaPO₃)₆', false);
        $response->assertSee('Ca²⁺ (Hardness Ion)', false);
        $response->assertSee('Na₃PO₄', false);
        $response->assertSee('Na₂HPO₄', false);
        $response->assertSee('K₂HPO₄', false);

        // Key Thailand Locations & Ports
        $response->assertSee('Chonburi');
        $response->assertSee('Rayong');
        $response->assertSee('Greater Bangkok');
        $response->assertSee('Port of Laem Chabang');
        $response->assertSee('Bangkok Port');

        // Contact info
        $response->assertSee('9913645555');
        $response->assertSee('info@srchems.com');
        $response->assertSee('Panoli');
    }

    /**
     * Test 301 redirect from pure-grade slug to srchems slug for Thailand blog.
     */
    public function test_pure_grade_thailand_slug_redirects_to_srchems_slug(): void
    {
        $response = $this->get('/blog/pure-grade-phosphates-water-treatment-metal-cleaning-thailand');
        $response->assertRedirect('/blog/srchems-phosphates-water-treatment-metal-cleaning-thailand');
    }

    /**
     * Test blog index page lists the Thailand blog card.
     */
    public function test_blog_index_page_contains_thailand_blog(): void
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertSee(route('blog_srchems_phosphates_thailand'));
        $response->assertSee('How SR Chems Phosphates Enhance Scale Control &amp; Metal Cleaning in Thailand', false);
    }

    /**
     * Test HTML sitemap contains link to Thailand blog post.
     */
    public function test_sitemap_contains_thailand_blog_link(): void
    {
        $response = $this->get('/sitemap');

        $response->assertStatus(200);
        $response->assertSee(route('blog_srchems_phosphates_thailand'));
        $response->assertSee(route('blog_bulk_srchems_phosphates_sourcing_thailand'));
    }

    /**
     * Test the Thailand bulk phosphate sourcing guide blog page loads successfully with SEO elements and content.
     */
    public function test_thailand_procurement_guide_page_loads_successfully_with_seo_and_content(): void
    {
        $response = $this->get('/blog/bulk-srchems-phosphates-sourcing-guide-india-thailand');

        $response->assertStatus(200);

        // Title and Meta Description
        $response->assertSee('Sourcing Bulk SR Chems Phosphates from India to Thailand: Importer’s Guide | S R Chemicals', false);
        $response->assertSee('A practical procurement guide for Thai chemical importers purchasing SR Chems DKP, MSP, DSP, and SHMP', false);
        $response->assertSee('Bulk chemical exporter India to Thailand', false);
        $response->assertSee('SR Chems DKP MSP supplier Thailand', false);
        $response->assertSee('Phosphate salt importer Bangkok', false);

        // Canonical URL
        $response->assertSee('<link rel="canonical" href="https://srchems.com/blog/bulk-srchems-phosphates-sourcing-guide-india-thailand">', false);

        // Main Headings and Sections
        $response->assertSee('Sourcing Bulk SR Chems Phosphates from India to Thailand: A Procurement &amp; Quality Guide', false);
        $response->assertSee('Verifying Technical Parameters on the Certificate of Analysis (COA)', false);
        $response->assertSee('Preventing Chemical Caking in Tropical Monsoon Climates', false);
        $response->assertSee('Shipping &amp; Customs Logistics from Western India to Thai Ports', false);
        $response->assertSee('Partner with S R Chemicals for Reliable Overseas Supply', false);
        $response->assertSee('Contact Our Thailand Export Sales Desk', false);

        // Chemistry and Technical Details
        $response->assertSee('Active Substance Assay (P₂O₅ %)', false);
        $response->assertSee('Water Insolubles (&lt; 0.05%)', false);
        $response->assertSee('Monosodium Phosphate (MSP)', false);
        $response->assertSee('Dipotassium Phosphate (DKP)', false);
        $response->assertSee('Sodium Hexametaphosphate (SHMP)', false);

        // Key Ports & Locations
        $response->assertSee('Port of Laem Chabang');
        $response->assertSee('Bangkok Port');
        $response->assertSee('Chonburi');
        $response->assertSee('Rayong');
        $response->assertSee('Samut Prakan');

        // Contact info
        $response->assertSee('9913645555');
        $response->assertSee('info@srchems.com');
        $response->assertSee('Panoli');
    }

    /**
     * Test 301 redirect from pure-grade procurement guide slug to srchems slug for Thailand.
     */
    public function test_pure_grade_thailand_procurement_guide_slug_redirects_to_srchems_slug(): void
    {
        $response = $this->get('/blog/bulk-pure-grade-phosphates-sourcing-guide-india-thailand');
        $response->assertRedirect('/blog/bulk-srchems-phosphates-sourcing-guide-india-thailand');
    }

    /**
     * Test blog index page lists the Thailand procurement guide blog card.
     */
    public function test_blog_index_page_contains_thailand_procurement_guide_blog(): void
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertSee(route('blog_bulk_srchems_phosphates_sourcing_thailand'));
        $response->assertSee('Sourcing Bulk SR Chems Phosphates from India to Thailand: A Procurement &amp; Quality Guide', false);
    }
}
