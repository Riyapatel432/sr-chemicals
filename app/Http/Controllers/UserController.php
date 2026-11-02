<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function about(Request $request)
    {
        return view('about');
    }

    public function our_products(Request $request)
    {
        return view('our_products');
    }

    public function sodium_phosphate(Request $request)//sub products of sodium phosphate
    {
        return view('sodium_phosphate');
    }
    public function di_sodium_phosphate_crystal(Request $request)
    {
        return view('di_sodium_phosphate_crystal');
    }
    public function mono_sodium_phosphate_crystal(Request $request)
    {
        return view('mono_sodium_phosphate_crystal');
    }
    public function di_sodium_phosphate(Request $request)
    {
        return view('di_sodium_phosphate');
    }
    public function di_sodium_phosphate_anhydrous_sr(Request $request)
    {
        return view('di_sodium_phosphate_anhydrous_sr');
    }
    public function sodium_acid_pyrophosphate(Request $request)
    {
        return view('sodium_acid_pyrophosphate');
    }
    public function di_sodium_phosphate_anhydrous(Request $request)
    {
        return view('di_sodium_phosphate_anhydrous');
    }
    public function tetra_sodium_pyro_phosphate(Request $request)
    {
        return view('tetra_sodium_pyro_phosphate');
    }
    public function tri_sodium_phosphate_crystals(Request $request)
    {
        return view('tri_sodium_phosphate_crystals');
    }
    public function mono_sodium_phosphate_anhydrous_sr(Request $request)
    {
        return view('mono_sodium_phosphate_anhydrous_sr');
    }
    public function trisodium_phosphate_anhydrous(Request $request)
    {
        return view('trisodium_phosphate_anhydrous');
    }

    public function sodium_hexameta_phosphate(Request $request)
    {
        return view('sodium_hexameta_phosphate');
    }
    
    public function potassium_phosphate(Request $request)//sub products of potassium phosphate
    {
        return view('potassium_phosphate');
    }
    public function tetra_potassium_pyro_phosphate(Request $request)
    {
        return view('tetra_potassium_pyro_phosphate');
    }
    public function di_potassium_phosphate(Request $request) 
    {
        return view('di_potassium_phosphate');
    }
    public function mono_potassium_phosphate(Request $request)
    {
        return view('mono_potassium_phosphate');
    }

    public function ammonium_phosphate(Request $request)//sub products of ammonium phosphate
    {
        return view('ammonium_phosphate');
    }
    public function monoammonium_phosphate(Request $request)
    {
        return view('monoammonium_phosphate');
    }
    public function di_ammonium_phosphate(Request $request)
    {
        return view('di_ammonium_phosphate');
    }

    public function blog(Request $request)
    {
        return view('blog');
    }

    public function blog_pharma_grade_phosphate(Request $request)
    {
        return view('blog_pharma_grade_phosphate');
    }

    public function blog_inorganic_chemicals(Request $request)
    {
        return view('blog_inorganic_chemicals');
    }

    public function blog_msp_anhydrous_vs_crystal(Request $request)
    {
        return view('blog_msp_anhydrous_vs_crystal');
    }

    public function blog_dipotassium_phosphate_water_treatment(Request $request)
    {
        return view('blog_dipotassium_phosphate_water_treatment');
    }

    public function blog_msp_crystal_industrial(Request $request)
    {
        return view('blog_msp_crystal_industrial');
    }

    public function blog_potassium_phosphate_guide(Request $request)
    {
        return view('blog_potassium_phosphate_guide');
    }

    public function blog_ammonium_phosphate_guide(Request $request)
    {
        return view('blog_ammonium_phosphate_guide');
    }

    public function blog_sodium_phosphates_guide(Request $request)
    {
        return view('blog_sodium_phosphates_guide');
    }

    public function blog_understanding_potassium_phosphate(Request $request)
    {
        return view('blog_understanding_potassium_phosphate');
    }

    public function blog_potassium_dihydrogen_phosphate(Request $request)
    {
        return view('blog_potassium_dihydrogen_phosphate');
    }

    public function blog_di_potassium_phosphate_dkp(Request $request)
    {
        return view('blog_di_potassium_phosphate_dkp');
    }

    public function blog_tetra_potassium_pyrophosphate_tkpp(Request $request)
    {
        return view('blog_tetra_potassium_pyrophosphate_tkpp');
    }

    public function blog_shmp_water_treatment_guide(Request $request)
    {
        return view('blog_shmp_water_treatment_guide');
    }

    public function blog_food_grade_vs_industrial_phosphates(Request $request)
    {
        return view('blog_food_grade_vs_industrial_phosphates');
    }

    public function blog_tsp_dsp_metal_phosphating(Request $request)
    {
        return view('blog_tsp_dsp_metal_phosphating');
    }

    public function blog_prevent_caking_phosphate_powder(Request $request)
    {
        return view('blog_prevent_caking_phosphate_powder');
    }

    public function blog_srchems_sodium_phosphates_vietnam(Request $request)
    {
        return view('blog_srchems_sodium_phosphates_vietnam');
    }

    public function blog_bulk_srchems_phosphates_sourcing_vietnam(Request $request)
    {
        return view('blog_bulk_srchems_phosphates_sourcing_vietnam');
    }

    public function blog_srchems_phosphates_thailand(Request $request)
    {
        return view('blog_srchems_phosphates_thailand');
    }

    public function blog_bulk_srchems_phosphates_sourcing_thailand(Request $request)
    {
        return view('blog_bulk_srchems_phosphates_sourcing_thailand');
    }

    public function chemical_exporter_supplier_vietnam(Request $request)
    {
        return view('chemical_exporter_supplier_vietnam');
    }

    public function chemical_exporter_supplier_thailand(Request $request)
    {
        return view('chemical_exporter_supplier_thailand');
    }

    public function contact_us(Request $request)
    {
        return view('contact_us');
    }

    public function thank_you(Request $request)
    {
        return view('thank_you');
    }

    public function sitemap(Request $request)
    {
        return view('sitemap');
    }
}







