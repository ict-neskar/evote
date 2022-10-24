<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homePage() {
        return view('pages.home');
    }
    public function candidatesPage() {
        return view('pages.candidates');
    }
    public function informationPage() {
        return view('pages.information');
    }
}
