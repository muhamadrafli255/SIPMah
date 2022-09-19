@extends('layouts.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Penerbit</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h4 text-gray-800">Data Penerbit</p></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama Penerbit" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Alamat Penerbit" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Penerbit" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="No Telepon Penerbit" value="">
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <div class="float-right">
                                    <a href="/publishers" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/publishers/store" class="btn btn-sm btn-outline-primary">Tambah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection