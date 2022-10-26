<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminCandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all(); // Error of intelephense
        return view('pages.admin.candidates.index', [
            'candidates' => $candidates
        ]);
    }

    public function create()
    {
        return view('pages.admin.candidates.create', [
            'classes'    => ClassRoom::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'slug'   => 'required',
            // 'banner' => 'required|image|file|max:5024',
            'image' => 'required|image|file|max:5024',
            'video' => 'required',
            'name' => 'required|max:255',
            'class_id'   => 'required|numeric',
            'deskripsi'   => 'required',
            'visi'   => 'required',
            'misi'   => 'required',
            'program'   => 'required'
        ]);

        // $validatedData['banner'] = $request->file('image')->store('candidates-images');
        $validatedData['image'] = $request->file('image')->store('candidates-images');
        // $validatedData['user_id'] = auth()->user()->id;

        Candidate::create($validatedData);

        return redirect()->to('/admin/kandidat')->with('success', 'Berhasil membuat kandidat baru.');
    }

    public function show(Candidate $candidate)
    {

    }

    public function edit(Candidate $candidate)
    {
        return view('pages.admin.candidates.edit', [
            'candidate'   => $candidate,
            'classes'    => ClassRoom::all()
        ]);
    }

    public function update(Request $request, Candidate $candidate)
    {
        $rules = [
            'slug'   => 'required',
            // 'banner' => 'required|image|file|max:5024',
            'image' => 'required|image|file|max:5024',
            'video' => 'required',
            'name' => 'required|max:255',
            'class_id'   => 'required|numeric',
            'deskripsi'   => 'required',
            'visi'   => 'required',
            'misi'   => 'required',
            'program'   => 'required',
            'votes' => 'required'
        ];


        if ($request->slug !== $candidate->slug) {
            $rules['slug'] = 'required';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->candidate('old-image')) Storage::delete($request->candidate('old-image'));
            // $validatedData['banner'] = $request->file('banner')->store('candidates-images');
            $validatedData['image'] = $request->file('image')->store('candidates-images');
        }

        // $validatedData['user_id'] = auth()->user()->id;

        $candidate->where('id', $candidate->id)->update($validatedData);
        return redirect()->to('/admin/kandidat')->with('success', 'Data kandidat telah di update.');
    }

    public function destroy(Candidate $candidate)
    {
        if ($candidate->image) Storage::delete($candidate->image);
        $candidate->delete();

        return redirect()->to('/admin/kandidat')->with('success', 'Data kandidat berhasil di hapus.');
    }

    public function slug()
    {
        $slug = Str::of(request('name'))->slug()->value;
        while (true) {
            $candidate = Candidate::query()->where('slug', '=', $slug)->get();
            if ($candidate->isNotEmpty()) {
                $slug .= '-' . Str::lower(Str::random(5));
                continue;
            } else {
                break;
            }
        }
        return response()->json([
            "slug"  => $slug
        ]);
    }


}
