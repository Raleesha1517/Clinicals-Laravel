<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use App\Models\Post;

class PostController extends Controller
{
    
    public function post_page()
    {
        return view('post.post_page');
    }
    public function home()
    {
        $post = Post::all();
        $latestpost = Post::latest()->take(4)->get();
        $options = [
            (object)['text' => 'Dysphagia', 'value' => 'dysphagia'],
            (object)['text' => 'Epigastric Pain and Dyspepsia', 'value' => 'epigastricPain'],
            (object)['text' => 'RHC Pain', 'value' => 'rhcPain'],
            (object)['text' => 'Obstructive Jaundice', 'value' => 'obstructiveJaundice'],
            (object)['text' => 'PR Bleeding', 'value' => 'prBleeding'],
            (object)['text' => 'Alteration of Bowel Habits', 'value' => 'alterationOfBowelHabits'],
            (object)['text' => 'Thyroid Lumps', 'value' => 'thyroidLumps'],
            (object)['text' => 'Breast Lumps', 'value' => 'breastLumps'],
            (object)['text' => 'Haematuria', 'value' => 'haematuria'],
            (object)['text' => 'LUTS', 'value' => 'luts'],
            (object)['text' => 'PVD', 'value' => 'pvd'],
            // Add more options as needed
        ];

        $optionsSet2 = [
            (object)['text' => 'Ubiquitous Lumps', 'value' => 'ubiquitousLumps'],
            (object)['text' => 'Skin & Subcutaneous Tissue Disorders', 'value' => 'skinSubcutaneousTissueDisorders'],
            (object)['text' => 'Herniae', 'value' => 'herniae'],
            (object)['text' => 'Scrotal Lumps', 'value' => 'scrotalLumps'],
            (object)['text' => 'Facial Ulcers', 'value' => 'facialUlcers'],
            (object)['text' => 'Mouth Ulcers', 'value' => 'mouthUlcers'],
            (object)['text' => 'Neck Lumps', 'value' => 'neckLumps'],
            (object)['text' => 'Parotid Lump', 'value' => 'parotidLump'],
            (object)['text' => 'Submandibular Lump', 'value' => 'submandibularLump'],
            (object)['text' => 'Thyroid Lump', 'value' => 'thyroidLump'],
            (object)['text' => 'Breast Lump', 'value' => 'breastLump'],
            (object)['text' => 'Abdominal Examination', 'value' => 'abdominalExamination'],
            (object)['text' => 'Stomas', 'value' => 'stomas'],
            (object)['text' => 'RIF/LIF Mass', 'value' => 'rifLifMass'],
            (object)['text' => 'Vascular Malformations', 'value' => 'vascularMalformations'],
            (object)['text' => 'Varicose Veins', 'value' => 'varicoseVeins'],
            (object)['text' => 'Chronic Lower Limb Ulceration + Gangrene', 'value' => 'chronicLowerLimbUlcerationGangrene'],
            (object)['text' => 'Lower Limb Swelling', 'value' => 'lowerLimbSwelling'],
            (object)['text' => 'Bony Lumps', 'value' => 'bonyLumps'],
            (object)['text' => 'Popliteal Fossa Lumps', 'value' => 'poplitealFossaLumps'],
            (object)['text' => 'Fractures + External Fixators + Pop Casts', 'value' => 'fracturesExternalFixatorsPopCasts'],
            (object)['text' => 'Amputations - LL', 'value' => 'amputationsLL'],
            (object)['text' => 'Hand Disorders', 'value' => 'handDisorders'],
            (object)['text' => 'Foot Disorders', 'value' => 'footDisorders'],
            // Add more options as needed
        ];

        $optionsother = [
            (object)['text' => 'Other', 'value' => 'other'],
            // Add more options as needed
        ];

        return view('post.home',compact('post','latestpost'),['options' => $options,'optionsSet2' => $optionsSet2,'optionsother' => $optionsother]);
    }

    public function add_post(Request $request)
    {
        $post=new Post;

        $post->creator_name = $request->creator_name;
        $post->case	= $request->caseType;
        $post->title = $request->title;
        if ($request->caseType == 'Short Case') {
            // Handle short case data
            $post->case_name = $request->shortCases;
        } elseif ($request->caseType == 'Long Case') {
            // Handle long case data
            $post->case_name = $request->longCases;
        } elseif ($request->caseType == 'other') {
            // Handle other case data
            $post->case_name = $request->other;
        }
        $post->description = $request->description;
        $post->urls	= $request->url;
        $post->post_status	= 'active';



        $image=$request->file;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('postimage',$imagename);
            $post->file_type = $imagename;
        }
        
        $post->save();

        return redirect('/')->with('message', 'Added Successfully');


    }

    public function show_post()
    {
        $post = Post::all();

        return view('post.show_post',compact('post'));
    }

    public function delete_post($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->back();
    }

    public function post_details($id)
    {
        $post = Post::find($id);

        return view('post.post_details', compact('post'));
    }

    public function download(Request $request, $file_type)
{
    $filePath = public_path("postimage/{$file_type}");
    
    return response()->download($filePath);
}

public function search(Request $request)
{
    $search = $request->input('search');
    
    // Assuming your model is named 'Post'
    $results = Post::where('title', 'like', "%$search%")->get();

    return view('post.search_results', compact('results'));
}


    
}