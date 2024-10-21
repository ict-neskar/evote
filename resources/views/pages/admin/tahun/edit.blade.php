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
                <form action="/admin/tahun/{{ $TahunAjaran->id }}" method="POST" novalidate enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="tahun_ajaran">Tahun Ajaran</label>
                                <input type="number" name="tahun_ajaran" class="form-control" id="tahun_ajaran" placeholder="Masukan Tahun Ajaran" value="{{ old('tahun_ajaran', $TahunAjaran->tahun_ajaran) }}">
                                @error('tahun_ajaran')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn icon icon-left btn-primary" type="submit">
                            <i class="bi bi-send-fill me-2"></i>Submit
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
