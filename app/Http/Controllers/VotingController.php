<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Candidate;

class VotingController extends Controller
{
    public function votingPage()
    {
        if(!Auth::check())
        {
            return redirect('login');
        }
        elseif (now() < date('2022-10-31 00:00:00')){
            return view('pages.notstarted');

        }
        elseif (now() > date('2022-11-01 12:00:00')) {
            return view('pages.golput');
        }
        elseif(!Auth::user()->has_voted)
        {
            $candidates = DB::table('candidates')->get();
            return view('pages.voting', ['candidates' => $candidates]);
        }else {
            return redirect('peringatan')->with('flashMessage', 'Anda sudah pernah voting');
        }

    }

    public function successPage(){
        return view('pages.success');
    }

    // public function golputPage(){
    //     return view('pages.golput');
    // }

    public function peringatanPage(){
        return view('pages.hasvoted');
    }
    public function peringatan2Page(){
        return view('pages.notstarted');
    }

    public function chooseVoting(Request $request)
    {
        if (!Auth::user()->has_voted) {
            $candidateId = $request->input('candidateId');
            DB::table('candidates')->where('id', $candidateId)
                ->update([
                    'votes'=>DB::raw("votes + 1")
                ]);
    
            DB::table('users')->where('id', Auth::user()->id)
                ->update([
                    'has_voted'=>1
                ]);
    
            DB::table('users')->where('id', Auth::user()->id)
                ->update([
                    'candidate_voted'=> $candidateId
                ]);            
            return redirect('berhasil');
        }else {
            return redirect('voting');
        }
    }

    

}
