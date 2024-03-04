<?php

use App\Livewire\About\Short;
use App\Livewire\About\Long;
use App\Livewire\Contact\Contact;
use App\Livewire\Education\Major;
use App\Livewire\Education\Minor;
use App\Livewire\Experience\Elwinm;
use App\Livewire\Experience\PartTime;
use App\Livewire\Experience\Server;
use App\Livewire\Experience\Sfte;
use App\Livewire\Experience\Stmarys;
use App\Livewire\Experience\StmarysDevOps;
use App\Livewire\Projects\ElwinmOld;
use App\Livewire\Projects\Random;
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

// About
Route::get('/', Short::class)->name('elwinm/About Me/At A Glance');
Route::get('/long', Long::class)->name('elwinm/About Me/Long Version');
// Experience
Route::get('/stmary-2024', StmarysDevOps::class)->name('elwinm/Experience/St. Mary\'s - Full-Stack Developer & DevOps Engineer');
Route::get('/sfte-dev', Sfte::class)->name('elwinm/Experience/SFTE - Web Developer');
Route::get('/stmary-dev', Stmarys::class)->name('elwinm/Experience/St. Mary\'s - Full-Stack Developer & System Administrator');
Route::get('/elwinm-dev', Elwinm::class)->name('elwinm/Experience/ElwinM - Full-Stack Developer');
Route::get('/elwinm-sys-admin', Server::class)->name('elwinm/Experience/ElwinM - System Administrator');
Route::get('/part-time', PartTime::class)->name('elwinm/Experience/Part Time Experiences');
// Education
Route::get('/major', Major::class)->name('elwinm/Education (York University)/B.A. Hons: Information Technology');
Route::get('/minor', Minor::class)->name('elwinm/Education (York University)/Minor: Business Administration');
// Projects
Route::get('/elwinm-old', ElwinmOld::class)->name('elwinm/Projects/ElwinM Old Website And Server');
Route::get('/projects', Random::class)->name('elwinm/Projects/Assorted Projects And Scripts');
// Skills And Tools
Route::get('/skills-tools', SkillsTools::class)->name('elwinm/Skill And Tools/Skills And Tools');
// Contact
Route::get('/contact', Contact::class)->name('elwinm/Contact Information/Get In Touch!');
