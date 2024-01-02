<?php

use App\Livewire\About\Short;
use App\Livewire\About\Long;
use App\Livewire\Contact\Contact;
use App\Livewire\Education\Major;
use App\Livewire\Education\Minor;
use App\Livewire\Experience\Elwinm;
use App\Livewire\Experience\ElwinmOld;
use App\Livewire\Experience\Sfte;
use App\Livewire\Experience\Stmarys;
use App\Livewire\Projects\Random;
use App\Livewire\Projects\Server;
use App\Livewire\SkillsTools\SkillsTools;
use Illuminate\Support\Facades\Route;

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

// Home Redirect
// Route::redirect("/","/about-me");
// About
Route::get('/', Short::class)->name('elwinm/About Me/Short Version');
Route::get('/long', Long::class)->name('elwinm/About Me/Long Version');
// Experience
Route::get('/sfte', Sfte::class)->name('elwinm/Experience/SFTE - Web Developer');
Route::get('/stmarys', Stmarys::class)->name('elwinm/Experience/St. Mary\'s - Full Stack Developer');
Route::get('/elwinm', Elwinm::class)->name('elwinm/Experience/ElwinM - Full Stack Developer');
// Education
Route::get('/major', Major::class)->name('elwinm/Education (York University)/B.A. Hons: Information Technology');
Route::get('/minor', Minor::class)->name('elwinm/Education (York University)/Minor: Business Administration');
// Projects
Route::get('/server', Server::class)->name('elwinm/Projects/Truenas Scale Server');
Route::get('/elwinm-old', ElwinmOld::class)->name('elwinm/Projects/ElwinM Old Website');
Route::get('/projects', Random::class)->name('elwinm/Projects/Assorted Projects And Scripts');
// Skills And Tools
Route::get('/skills-tools', SkillsTools::class)->name('elwinm/Skill And Tools/Skills And Tools');

// Contact
Route::get('/contact', Contact::class)->name('elwinm/Contact Information/Contact Me');

// Route::get('/404', function () {
//     return view('404');
// });
