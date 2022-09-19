@extends('layouts.auth')
@section('content')
<!-- Login Content -->
<div class="container-login mt-5">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Masuk</h1>
                                </div>
                                @if (session('Berhasil'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('Berhasil') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail"
                                            aria-describedby="emailHelp" placeholder="Enter Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="exampleInputPassword"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Ingat saya</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="/login" class="btn btn-primary btn-block">Masuk</a>
                                    </div>
                                </form>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <a class="font-weight-bold small" href="/register">Belum punya akun?
                                            Registrasi!</a>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a class="text-left font-weight-bold small" href="/forgot-password">Lupa kata
                                            sandi?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Content -->
@endsection
