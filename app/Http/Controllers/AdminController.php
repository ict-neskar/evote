<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidate;

class AdminController extends Controller
{
    public function index()
    {
        $jumlah_user = User::count() - 1;
        $jumlah_voted = User::sum('has_voted') - 1;
        $jumlah_notvoted = $jumlah_user - $jumlah_voted;

        $candidates = Candidate::all();


        return view('pages.admin.admin', compact('jumlah_user', 'jumlah_voted', 'jumlah_notvoted', 'candidates'));
    }
}
