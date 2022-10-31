<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
        $jumlah_user = User::count() - 1;
        $jumlah_voted = User::sum('has_voted') - 1;
        $jumlah_notvoted = $jumlah_user - $jumlah_voted;

        $candidates = Candidate::all();


        return view('pages.statis', compact('jumlah_user', 'jumlah_voted', 'jumlah_notvoted', 'candidates'));
    }
}
