@extends('layouts.admin')
@section('title')
    Tambah Kandidat
@endsection

@section('content')
    <div class="page-heading">
        <h3>Add Candidates</h3>
        <a href="/admin/kandidat" class="btn icon icon-left btn-primary">
            <i class="bi bi-arrow-90deg-left me-2"></i>Show Candidate
        </a>
    </div>
    <div class="page-content">
        <section class="row mb-5">
            <div class="col-12">
                <form action="/admin/kandidat/{{ $candidate->slug }}" method="POST" novalidate enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="name">Nama Kandidat</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Candidates Name" value="{{ old('name', $candidate->name) }}">
                                @error('name')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Votes</label>
                                <input type="text" name="votes" class="form-control" id="votes" readonly placeholder="Enter Candidates votes" value="{{ old('votes', $candidate->votes) }}">
                                @error('votes')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="class" class="block text-sm font-medium text-gray-700 mb-2">Class</label>
                                <select id="class" name="class_id" autocomplete="class_jurusan" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border">
                                    @foreach($classes as $class)
                                    @if( old('class_id', $candidate->class_id) == $class->id)
                                    <option selected value="{{ $class->id }}">{{ $class->jurusan }}</option>
                                    @else
                                    <option value="{{ $class->id }}">{{ $class->jurusan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="image" class="form-label">Photo Profile Candidate</label>
                                <input class="form-control" type="file" id="image" name="image">
                                @error('image')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror

                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="video" class="form-label">Youtube video Link</label>
                                <input class="form-control" type="text" id="video" name="video"
                                    placeholder="Link Youtube Candidate" value="{{ old('video', $candidate->video) }}">
                                    @error('video')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="deskripsi" class="form-label">Candidate Description</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Enter description of candidate" value="{{ old('deskripsi', $candidate->deskripsi) }}"></textarea>
                                @error('deskripsi')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="slug" class="form-label">Candidate Slug</label>
                                <input class="form-control" id="slug" name="slug" type="text" readonly autocomplete="slug" value="{{ old('slug', $candidate->slug) }}">
                                @error('slug')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="form-group">
                                <h4 class="card-title">Candidate Vissions</h4>
                                <textarea name="visi" id="visi" cols="30" rows="5" value="{{ old('visi', $candidate->visi) }}"></textarea>
                                @error('visi')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Candidate Mission</h4>
                            <textarea name="misi" id="misi" cols="30" rows="5" value="{{ old('misi', $candidate->misi) }}"></textarea>
                            @error('misi')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-end ">
                        <button class="btn icon icon-left btn-primary" type="submit">
                            <i class="bi bi-send-fill me-2"></i>Submit
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script>
        const name = document.getElementById('name');
        const slug = document.getElementById('slug');
    
        name.addEventListener('change', async function() {
            const res = await fetch(`/admin/kandidat/slug?${
                new URLSearchParams({name: this.value})
                .toString()
            }`);
            const data = await res.json();
            slug.value = data.slug;
        });
    </script>
    
@endsection