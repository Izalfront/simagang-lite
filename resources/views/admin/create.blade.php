@extends('layouts.admin')

@section('title', 'Create')

@section('heading', 'Form Tambah User')

@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action="{{ route('admin.store') }}" method="POST" class="user">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="username"
                                        name="username" placeholder="Username">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="nama"
                                        name="nama" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" id="email"
                                        name="email" placeholder="Email Address">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password"
                                        name="password" placeholder="Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
