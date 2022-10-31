<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class PagesController extends Controller
{
    public function homePage() {
        return view('pages.home', [
            "candidates" => Candidate::all()
        ]);
    }
    public function candidatesPage() {
        return view('pages.candidates', [
            "candidates" => Candidate::all()
        ]);
    }
    public function informationPage() {
        return view('pages.information');
    }
    public function statis() {
        return view('pages.statis', [
            'candidates' => Candidate::all()
        ]);
    }
}
