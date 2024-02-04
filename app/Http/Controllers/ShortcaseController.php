<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ShortcaseController extends Controller
{
    public function ubiquitousLumps()
    {
        $post = Post::where('case_name', 'ubiquitousLumps')->get();

        return view('shortcases.ubiquitousLumps', compact('post'));
    }

    public function skinSubcutaneousTissueDisorders()
    {
        $post = Post::where('case_name', 'Skin & Subcutaneous Tissue Disorders')->get();
        return view('shortcases.skinSubcutaneousTissueDisorders', compact('post'));
    }

    public function herniae()
    {
        $post = Post::where('case_name', 'Herniae')->get();
        return view('shortcases.herniae', compact('post'));
    }

    public function scrotalLumps()
    {
        $post = Post::where('case_name', 'Scrotal Lumps')->get();
        return view('shortcases.scrotalLumps', compact('post'));
    }

    public function facialUlcers()
    {
        $post = Post::where('case_name', 'Facial Ulcers')->get();
        return view('shortcases.facialUlcers', compact('post'));
    }

    public function mouthUlcers()
    {
        $post = Post::where('case_name', 'Mouth Ulcers')->get();
        return view('shortcases.mouthUlcers', compact('post'));
    }

    public function neckLumps()
    {
        $post = Post::where('case_name', 'Neck Lumps')->get();
        return view('shortcases.neckLumps', compact('post'));
    }

    public function parotidLump()
    {
        $post = Post::where('case_name', 'Parotid Lump')->get();
        return view('shortcases.parotidLump', compact('post'));
    }

    public function submandibularLump()
    {
        $post = Post::where('case_name', 'Submandibular Lump')->get();
        return view('shortcases.submandibularLump', compact('post'));
    }

    public function thyroidLump()
    {
        $post = Post::where('case_name', 'Thyroid Lump')->get();
        return view('shortcases.thyroidLump', compact('post'));
    }

    public function breastLump()
    {
        $post = Post::where('case_name', 'Breast Lump')->get();
        return view('shortcases.breastLump', compact('post'));
    }

    public function abdominalExamination()
    {
        $post = Post::where('case_name', 'Abdominal Examination')->get();
        return view('shortcases.abdominalExamination', compact('post'));
    }

    public function stomas()
    {
        $post = Post::where('case_name', 'Stomas')->get();
        return view('shortcases.stomas', compact('post'));
    }

    public function rifLifMass()
    {
        $post = Post::where('case_name', 'RIF/LIF Mass')->get();
        return view('shortcases.rifLifMass', compact('post'));
    }

    public function vascularMalformations()
    {
        $post = Post::where('case_name', 'Vascular Malformations')->get();
        return view('shortcases.vascularMalformations', compact('post'));
    }

    public function varicoseVeins()
    {
        $post = Post::where('case_name', 'Varicose Veins')->get();
        return view('shortcases.varicoseVeins', compact('post'));
    }

    public function chronicLowerLimbUlcerationGangrene()
    {
        $post = Post::where('case_name', 'Chronic Lower Limb Ulceration + Gangrene')->get();
        return view('shortcases.chronicLowerLimbUlcerationGangrene', compact('post'));
    }

    public function lowerLimbSwelling()
    {
        $post = Post::where('case_name', 'Lower Limb Swelling')->get();
        return view('shortcases.lowerLimbSwelling', compact('post'));
    }

    public function bonyLumps()
    {
        $post = Post::where('case_name', 'Bony Lumps')->get();
        return view('shortcases.bonyLumps', compact('post'));
    }

    public function poplitealFossaLumps()
    {
        $post = Post::where('case_name', 'Popliteal Fossa Lumps')->get();
        return view('shortcases.poplitealFossaLumps', compact('post'));
    }

    public function fracturesExternalFixatorsPopCasts()
    {
        $post = Post::where('case_name', 'Fractures + External Fixators + Pop Casts')->get();
        return view('shortcases.fracturesExternalFixatorsPopCasts', compact('post'));
    }

    public function amputationsLL()
    {
        $post = Post::where('case_name', 'Amputations - LL')->get();
        return view('shortcases.amputationsLL', compact('post'));
    }

    public function handDisorders()
    {
        $post = Post::where('case_name', 'Hand Disorders')->get();
        return view('shortcases.handDisorders', compact('post'));
    }

    public function footDisorders()
    {
        $post = Post::where('case_name', 'Foot Disorders')->get();
        return view('shortcases.footDisorders', compact('post'));
    }
}
