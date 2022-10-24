@extends('layouts.admin')
@section('title')
    Tambah Kandidat
@endsection

@section('content')
    <div class="page-heading">
        <h3>Add Candidates</h3>
        <a href="admin/user" class="btn icon icon-left btn-primary">
            <i class="bi bi-arrow-90deg-left me-2"></i>Show User
        </a>
    </div>
    <div class="page-content">
        <section class="row mb-5">
            <div class="col-12">
                <form action="/admin/user" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter User Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="text" name="nis" class="form-control" id="nis" placeholder="Enter User NIS">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-12 col-sm-6">
                            <fieldset class="form-group">
                                <label for="userDepartment">Department</label>
                                <select class="form-select" id="userDepartment" name="userDepartment">
                                    <option selected>Select User Department</option>
                                    <option >Rekayasa Perangkat Lunak</option>
                                    <option>Teknik Komputer Jaringan</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-6 col-sm-3">
                            <fieldset class="form-group">
                                <label for="userRombel">Rombel</label>
                                <select class="form-select" id="userRombel" name="userRombel">
                                    <option selected>Select User Rombel</option>
                                    <option >1</option>
                                    <option >2</option>
                                    <option>3</option>
                                </select>
                            </fieldset>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Enter New User Password" value="ASDF">
                                <span class="input-group-text" id="togglePassword">
                                    <i class="bi bi-eye-fill" id="iconTogglePassword"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <button class="btn icon icon-left btn-primary" name="submit">
                            <i class="bi bi-send-fill me-2"></i>Submit
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection