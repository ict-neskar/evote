@extends('layouts.admin')
@section('title')
    Tambah Kandidat
@endsection

@section('content')
    <div class="page-heading">
        <h3>Tambah Kandidat</h3>
        <a href="/admin/kandidat" class="btn icon icon-left btn-primary">
            <i class="bi bi-arrow-90deg-left me-2"></i>Kembali
        </a>
    </div>
    <div class="page-content">
        <section class="row mb-5">
            <div class="col-12">
                <form action="{{ route('kandidat.store')}}" method="POST" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="name">Nama Kandidat</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Masukan nama kandidat" value="{{ old('name') }}">
                                @error('name')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Votes</label>
                                <input type="text" name="votes" class="form-control" id="votes" readonly value="0">
                                @error('votes')<small class="text-red-600 font-medium block my-2" >{{ $message }}</small>@enderror
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
                                    placeholder="Link Youtube Candidate" value="{{ old('video') }}">
                                    @error('video')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="class_id">KELAS</label>
                                <select name="class_id" class="form-control @error('class_id') is-invalid @enderror">
                                    <option value="">Pilih Jurusan</option>
                                    @foreach($classes as $kelasId) <!-- Ensure you are using $classes -->
                                        <option value="{{ $kelasId->class_id }}">{{ $kelasId->jurusans }}</option> <!-- Display class name -->
                                    @endforeach
                                </select>


                                @error('nisn')
                                    <span class="error invalid-feedback" style="display: inline">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="slug" class="form-label">Candidate Slug</label>
                                <input class="form-control" id="slug" name="slug" type="text" readonly autocomplete="slug" value="{{ old('slug') }}">
                                @error('slug')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="form-group">
                                <h1>Deskripsi</h1>
                                <div class="myeditablediv" name="deskripsi" id="deskripsi" value="{{ old('deskripsi') }}">Klik disini untuk mengedit area field ini!</div>
                                 <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="5"></textarea>
                                @error('deskripsi')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h1>Visi</h1>
                            <div class="myeditablediv" name="visi" id="visi" value="{{ old('visi') }}">Klik disini untuk mengedit area field ini!</div>
                            <textarea class="form-control" name="visi" id="visi" cols="30" rows="5"></textarea>
                            @error('visi')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h1>Misi</h1>
                            <div class="myeditablediv" name="misi" id="misi" value="{{ old('misi') }}">Klik disini untuk mengedit area field ini!</div>
                            <textarea class="form-control" name="misi" id="misi" cols="30" rows="5"></textarea>
                            @error('misi')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h1>Program</h1>
                            <div class="myeditablediv" name="program" id="program" value="{{ old('program') }}">Klik disini untuk mengedit area field ini!</div>
                            <textarea class="form-control" name="program" id="program" cols="30" rows="5"></textarea>
                            @error('program')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
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
