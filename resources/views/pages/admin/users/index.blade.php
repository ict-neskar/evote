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
        <h3>Menampilkan data user</h3>
        <a href="/admin/user/create" class="btn icon icon-left btn-primary me-0 me-sm-3 mb-1 mb-sm-0">
            <i class="bi bi-person-plus-fill me-2"></i>Tambah User
        </a>
    </div>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Data Users
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Name</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Rombel</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->nis }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->class->kelas }}</td>
                                <td>{{ $user->class->jurusans }}</td>
                                <td>{{ $user->class->rombel }}</td>                                    
                                @if ($user->has_voted)
                                <td>
                                    <span class="badge bg-success">Voted</span>
                                </td>
                                @else
                                <td>
                                    <span class="badge bg-danger">Not yet</span>
                                </td>
                                @endif
                                <td class="d-flex flex-row">
                                    <form method="post" action="{{ route('user.destroy', $user->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <a href="{{ route('students.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
                                        <a href="{{ route('students.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        
        </section>
    </div>

    <!-- Modal Delete User -->
    <div class="modal fade" id="confirmationDeleteCandidate" tabindex="-1" aria-labelledby="confirmationDelete"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0">
                    <h6 class="modal-title" id="confirmationDeleteProgramLabel">
                        Are you sure want to delete this User?
                    </h6>
                    <!-- Title Program Candidate -->
                    <p>
                        Padli Septiana
                    </p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <a href="" class="btn icon icon-left btn-danger me-3">
                        <i class="me-2 bi bi-trash-fill"></i>Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection