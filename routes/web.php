<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LongcaseController;
use App\Http\Controllers\ShortcaseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PostController::class, 'home']);
Route::get('/post_page', [PostController::class, 'post_page']);
Route::get('/show_post', [PostController::class, 'show_post']);
Route::get('/delete_post/{id}', [PostController::class, 'delete_post']);
Route::post('/add_post', [PostController::class, 'add_post']);
Route::get('/post_details/{id}', [PostController::class, 'post_details']);
Route::get('/download/{file_type}', [PostController::class, 'download']);
Route::get('/search', [PostController::class, 'search']);


//longcases

Route::get('/dysphagia', [LongcaseController::class, 'dysphagia']);
Route::get('/epigastricPain', [LongcaseController::class, 'epigastricPain']);
Route::get('/rhcPain', [LongcaseController::class, 'rhcPain']);
Route::get('/obstructiveJaundice', [LongcaseController::class, 'obstructiveJaundice']);
Route::get('/prBleeding', [LongcaseController::class, 'prBleeding']);
Route::get('/alterationOfBowelHabits', [LongcaseController::class, 'alterationOfBowelHabits']);
Route::get('/thyroidLumps', [LongcaseController::class, 'thyroidLumps']);
Route::get('/breastLumps', [LongcaseController::class, 'breastLumps']);
Route::get('/haematuria', [LongcaseController::class, 'haematuria']);
Route::get('/luts', [LongcaseController::class, 'luts']);
Route::get('/pvd', [LongcaseController::class, 'pvd']);

//shortcases

Route::get('/ubiquitousLumps', [ShortcaseController::class, 'ubiquitousLumps']);
Route::get('/skinSubcutaneousTissueDisorders', [ShortcaseController::class, 'skinSubcutaneousTissueDisorders']);
Route::get('/herniae', [ShortcaseController::class, 'herniae']);
Route::get('/scrotalLumps', [ShortcaseController::class, 'scrotalLumps']);
Route::get('/facialUlcers', [ShortcaseController::class, 'facialUlcers']);
Route::get('/mouthUlcers', [ShortcaseController::class, 'mouthUlcers']);
Route::get('/neckLumps', [ShortcaseController::class, 'neckLumps']);
Route::get('/parotidLump', [ShortcaseController::class, 'parotidLump']);
Route::get('/submandibularLump', [ShortcaseController::class, 'submandibularLump']);
Route::get('/thyroidLump', [ShortcaseController::class, 'thyroidLump']);
Route::get('/breastLump', [ShortcaseController::class, 'breastLump']);
Route::get('/abdominalExamination', [ShortcaseController::class, 'abdominalExamination']);
Route::get('/stomas', [ShortcaseController::class, 'stomas']);
Route::get('/rifLifMass', [ShortcaseController::class, 'rifLifMass']);
Route::get('/vascularMalformations', [ShortcaseController::class, 'vascularMalformations']);
Route::get('/varicoseVeins', [ShortcaseController::class, 'varicoseVeins']);
Route::get('/chronicLowerLimbUlcerationGangrene', [ShortcaseController::class, 'chronicLowerLimbUlcerationGangrene']);
Route::get('/lowerLimbSwelling', [ShortcaseController::class, 'lowerLimbSwelling']);
Route::get('/bonyLumps', [ShortcaseController::class, 'bonyLumps']);
Route::get('/poplitealFossaLumps', [ShortcaseController::class, 'poplitealFossaLumps']);
Route::get('/fracturesExternalFixatorsPopCasts', [ShortcaseController::class, 'fracturesExternalFixatorsPopCasts']);
Route::get('/amputationsLL', [ShortcaseController::class, 'amputationsLL']);
Route::get('/handDisorders', [ShortcaseController::class, 'handDisorders']);
Route::get('/footDisorders', [ShortcaseController::class, 'footDisorders']);

Route::get('/other', [LongcaseController::class, 'other']);