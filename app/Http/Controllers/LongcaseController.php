<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LongcaseController extends Controller
{
    public function other()
    {
        $post = Post::where('case', 'other')->get();

        return view('other', compact('post'));
    }

    public function dysphagia()
    {
        $post = Post::where('case_name', 'dysphagia')->get();

        return view('longcases.dysphagia', compact('post'));
    }
    
    public function epigastricPain()
    {
        $post = Post::where('case_name', 'Epigastric Pain and Dyspepsia')->get();

        return view('longcases.epigastricPain', compact('post'));
    }

    public function rhcPain()
    {
        $post = Post::where('case_name', 'RHC Pain')->get();
        return view('longcases.rhcPain', compact('post'));
    }

    public function obstructiveJaundice()
    {
        $post = Post::where('case_name', 'Obstructive Jaundice')->get();
        return view('longcases.obstructiveJaundice', compact('post'));
    }

    public function prBleeding()
    {
        $post = Post::where('case_name', 'PR Bleeding')->get();
        return view('longcases.prBleeding', compact('post'));
    }

    public function alterationOfBowelHabits()
    {
        $post = Post::where('case_name', 'Alteration of Bowel Habits')->get();
        return view('longcases.alterationOfBowelHabits', compact('post'));
    }

    public function thyroidLumps()
    {
        $post = Post::where('case_name', 'Thyroid Lumps')->get();
        return view('longcases.thyroidLumps', compact('post'));
    }

    public function breastLumps()
    {
        $post = Post::where('case_name', 'Breast Lumps')->get();
        return view('longcases.breastLumps', compact('post'));
    }

    public function haematuria()
    {
        $post = Post::where('case_name', 'Haematuria')->get();
        return view('longcases.haematuria', compact('post'));
    }

    public function luts()
    {
        $post = Post::where('case_name', 'LUTS')->get();
        return view('longcases.luts', compact('post'));
    }

    public function pvd()
    {
        $post = Post::where('case_name', 'PVD')->get();
        return view('longcases.pvd', compact('post'));
    }

   
}
