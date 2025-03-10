<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/dashboard',[PageController::class, 'admin'])->name('admin');
Route::get('/dashboard/profile',[PageController::class, 'profile'])->name('profile');
Route::get('/dashboard/NewProfile',[PageController::class, 'NewProfile'])->name('newprofile');
Route::get('/dashboard/skills',[PageController::class, 'skills'])->name('skills');
Route::get('/dashboard/skills/newSkills',[PageController::class, 'addNewSkills'])->name('createSkills');
Route::get('/dashboard/contact',[PageController::class, 'contact'])->name('contact');
// Route::post('/store', [ProfileController::class, 'store'])->name('store');
// Route::post('/post', [MailController::class, 'Forums'])->name('Forums');
