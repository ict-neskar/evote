<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all(); // Error of intelephense
        return view('pages.candidates', [
            // "category"  => $category,
            "candidates" => $candidates
        ]);
    }

    public function show(Candidate $candidate)
    {
        return view('pages.profile', [
            "candidate"  => $candidate
        ]);
    }

}
