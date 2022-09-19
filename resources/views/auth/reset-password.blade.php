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
                                        <h1 class="h4 text-gray-900 mb-4">Atur Ulang Kata Sandi</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="exampleInputEmail"
                                                aria-describedby="emailHelp" placeholder="Kata sandi baru">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="exampleInputEmail"
                                                aria-describedby="emailHelp" placeholder="Konfirmasi Kata sandi">
                                        </div>
                                        <div class="form-group">
                                            <a href="/update-password" class="btn btn-primary btn-block">Atur Ulang Kata Sandi</a>
                                        </div>
                                    </form>
                                    <hr>
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