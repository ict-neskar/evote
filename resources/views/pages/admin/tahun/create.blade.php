@extends('layouts.admin')
@section('title')
    Tambah Tahun Ajaran
@endsection

@section('content')
    <div class="page-heading">
        <h3>Tambah Tahun Ajaran</h3>
        <a href="/admin/kandidat" class="btn icon icon-left btn-primary">
            <i class="bi bi-arrow-90deg-left me-2"></i>Kembali
        </a>
    </div>
    <div class="page-content">
        <section class="row mb-5">
            <div class="col-12">
                <form action="{{ route('tahun.store')}}" method="POST" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="tahun_ajaran">Tahun Ajaran</label>
                                <input type="integer" name="tahun_ajaran" class="form-control" id="tahun_ajaran" placeholder="Masukan Tahun Ajaran" value="{{ old('tahun_ajaran') }}">
                                @error('tahun_ajaran')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
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

    {{-- <script>
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
    </script> --}}

@endsection
