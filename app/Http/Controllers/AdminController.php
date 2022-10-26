<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $jumlah_user = User::count() - 1;
        $jumlah_voted = User::sum('has_voted');
        $jumlah_notvoted = $jumlah_user - $jumlah_voted;

        return view('pages.admin.admin', compact('jumlah_user', 'jumlah_voted', 'jumlah_notvoted'));
    }
}
