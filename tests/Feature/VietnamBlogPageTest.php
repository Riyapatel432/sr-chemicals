<?php

namespace Tests\Feature;

use Tests\TestCase;

class VietnamBlogPageTest extends TestCase
{
    /**
     * Test the Vietnam sodium phosphates blog page loads successfully with SEO elements and content.
     */
    public function test_vietnam_blog_page_loads_successfully_with_seo_and_content(): void
    {
        $response = $this->get('/blog/srchems-sodium-phosphates-textile-water-treatment-vietnam');

        $response->assertStatus(200);

        // Title and Meta Description
        $response->assertSee('How SR Chems Sodium Phosphates Enhance Textile Dyeing &amp; Water Treatment in Vietnam | S R Chemicals', false);
        $response->assertSee('Discover how SR Chems Sodium Hexametaphosphate (SHMP 68%) and TSP/MSP optimize textile processing', false);
        $response->assertSee('SR Chems SHMP Vietnam', false);
        $response->assertSee('Industrial water treatment chemicals Hai Phong', false);
        $response->assertSee('Bulk TSP supplier Vietnam', false);

        // Canonical URL
        $response->assertSee('<link rel="canonical" href="https://srchems.com/blog/srchems-sodium-phosphates-textile-water-treatment-vietnam">', false);

        // Main Headings and Sections
        $response->assertSee('How SR Chems Sodium Phosphates Enhance Textile Dyeing &amp; Water Treatment in Vietnam', false);
        $response->assertSee('Sodium Hexametaphosphate (SHMP 68% SR Chems) in Textile Wet Processing', false);
        $response->assertSee('The Sequestering Solution', false);
        $response->assertSee('Preventing Boiler Scale &amp; Corrosion in Industrial Power Systems', false);
        $response->assertSee('SR Chems Polyphosphate Treatment Benefits:', false);
        $response->assertSee('Trisodium Phosphate (TSP Anhydrous &amp; Crystals) for Metal Degreasing', false);
        $response->assertSee('Why Vietnamese Importers Source Direct from S R Chemicals', false);
        $response->assertSee('Request an Export Quote for Vietnam', false);

        // Chemistry and Technical Details
        $response->assertSee('(NaPO₃)₆', false);
        $response->assertSee('Ca²⁺ (Hardness Ion)', false);
        $response->assertSee('P₂O₅', false);

        // Key Vietnam Locations & Ports
        $response->assertSee('Hai Phong');
        $response->assertSee('Hanoi');
        $response->assertSee('Binh Duong');
        $response->assertSee('Dong Nai');
        $response->assertSee('Cai Mep');

        // Contact info
        $response->assertSee('9913645555');
        $response->assertSee('info@srchems.com');
        $response->assertSee('Panoli');
    }

    /**
     * Test 301 redirect from pure-grade slug to srchems slug.
     */
    public function test_pure_grade_slug_redirects_to_srchems_slug(): void
    {
        $response = $this->get('/blog/pure-grade-sodium-phosphates-textile-water-treatment-vietnam');
        $response->assertRedirect('/blog/srchems-sodium-phosphates-textile-water-treatment-vietnam');
    }

    /**
     * Test blog index page lists the new Vietnam blog card.
     */
    public function test_blog_index_page_contains_new_vietnam_blog(): void
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertSee(route('blog_srchems_sodium_phosphates_vietnam'));
        $response->assertSee('How SR Chems Sodium Phosphates Enhance Textile Dyeing &amp; Water Treatment in Vietnam', false);
    }

    /**
     * Test HTML sitemap contains link to the new blog post.
     */
    public function test_sitemap_contains_new_vietnam_blog_link(): void
    {
        $response = $this->get('/sitemap');

        $response->assertStatus(200);
        $response->assertSee(route('blog_srchems_sodium_phosphates_vietnam'));
        $response->assertSee(route('blog_bulk_srchems_phosphates_sourcing_vietnam'));
    }

    /**
     * Test the Vietnam bulk phosphate procurement guide blog page loads successfully with SEO elements and content.
     */
    public function test_vietnam_procurement_guide_page_loads_successfully_with_seo_and_content(): void
    {
        $response = $this->get('/blog/bulk-srchems-phosphates-sourcing-guide-india-vietnam');

        $response->assertStatus(200);

        // Title and Meta Description
        $response->assertSee('Sourcing Bulk SR Chems Phosphates from India to Vietnam: Procurement Guide | S R Chemicals', false);
        $response->assertSee('A practical procurement guide for Vietnamese chemical importers buying SR Chems DKP, MSP, DSP, and SHMP', false);
        $response->assertSee('Bulk chemical exporter India to Vietnam', false);
        $response->assertSee('SR Chems DKP MSP supplier Vietnam', false);
        $response->assertSee('Phosphate salt importer Ho Chi Minh', false);

        // Canonical URL
        $response->assertSee('<link rel="canonical" href="https://srchems.com/blog/bulk-srchems-phosphates-sourcing-guide-india-vietnam">', false);

        // Main Headings and Sections
        $response->assertSee('Sourcing Bulk SR Chems Phosphates from India to Vietnam: A Procurement &amp; Quality Guide', false);
        $response->assertSee('Verifying Technical Specifications on the Certificate of Analysis (COA)', false);
        $response->assertSee('Mitigating Caking Risks in Vietnam’s Tropical Monsoon Climate', false);
        $response->assertSee('Streamlining Shipping &amp; Customs Logistics from India to Vietnam', false);
        $response->assertSee('Partner with S R Chemicals for Reliable Bulk Supply', false);
        $response->assertSee('Contact Our Vietnam Export Desk', false);

        // Chemistry and Technical Details
        $response->assertSee('Active P₂O₅ Assay Percentage', false);
        $response->assertSee('Water Insoluble Content', false);
        $response->assertSee('Dipotassium Phosphate (DKP)', false);
        $response->assertSee('Monosodium Phosphate (MSP)', false);
        $response->assertSee('Disodium Phosphate (DSP)', false);

        // Contact info
        $response->assertSee('9913645555');
        $response->assertSee('info@srchems.com');
        $response->assertSee('Panoli');
    }

    /**
     * Test 301 redirect from pure-grade procurement guide slug to srchems slug.
     */
    public function test_pure_grade_procurement_guide_slug_redirects_to_srchems_slug(): void
    {
        $response = $this->get('/blog/bulk-pure-grade-phosphates-sourcing-guide-india-vietnam');
        $response->assertRedirect('/blog/bulk-srchems-phosphates-sourcing-guide-india-vietnam');
    }

    /**
     * Test blog index page lists both Vietnam blog cards.
     */
    public function test_blog_index_page_contains_procurement_guide_blog(): void
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertSee(route('blog_bulk_srchems_phosphates_sourcing_vietnam'));
        $response->assertSee('Sourcing Bulk SR Chems Phosphates from India to Vietnam: A Procurement &amp; Quality Guide', false);
    }
}
