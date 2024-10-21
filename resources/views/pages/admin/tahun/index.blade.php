@extends('layouts.admin')
@section('title')
    Tahun Ajaran
@endsection

@section('content')
    <div class="page-heading">
        @if(session('success'))
        <div class="bg-white shadow-sm p-5 border-l-4 border-green-500 mb-5">
            <span class="font-medium text-green-500 text-base">{{ session('success') }}</span>
        </div>
        @endif
        <h3>Tahun Ajaran</h3>
        <a href="/admin/tahun/create" class="btn icon icon-left btn-primary me-0 me-sm-3 mb-1 mb-sm-0">
            <i class="bi bi-person-plus-fill me-2"></i>Tambah Tahun Ajaran
        </a>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($TahunAjaran as $index => $tahun)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $tahun->tahun_ajaran }}</td>
                                    <td>
                                        <form method="post" action="{{ route('tahun.destroy', $tahun->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('tahun.edit', $tahun->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
