@extends('layouts.admin')
@section('title')
    Kandidat
@endsection

@section('content')
    <div class="page-heading">
        @if(session('success'))
        <div class="bg-white shadow-sm p-5 border-l-4 border-green-500 mb-5">
            <span class="font-medium text-green-500 text-base">{{ session('success') }}</span>
        </div>
        @endif
        <h3>Menampilkan data kandidat</h3>
        <a href="/admin/kandidat/create" class="btn icon icon-left btn-primary me-0 me-sm-3 mb-1 mb-sm-0">
            <i class="bi bi-person-plus-fill me-2"></i>Tambah Kandidat
        </a>
    </div>
    <div class="page-content">
        <div class="row">
            @foreach($candidates as $candidate)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center margin-bottom-10">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/' . $candidate->image) }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{ $candidate->name }}</h5>
                                <h6 class="text-muted mb-0">{{ $candidate->class->kelas }} {{ $candidate->class->jurusanl }} {{ $candidate->class->rombel }}</h6>
                            </div>
                        </div>
                        <p>
                        </p>
                        <a href="/admin/kandidat/{{ $candidate->slug }}/edit" class="btn icon icon-left btn-primary w-100 mb-2">
                            <i class="bi bi-person-plus-fill me-2"></i>Edit
                        </a>
                        <form action="/admin/kandidat/{{ $candidate->id }}" class="btn icon icon-left btn-danger w-100" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>                
    </div>
@endsection