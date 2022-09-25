@extends('layouts.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Rak</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h4 text-gray-800">Data Rak</p></div>
                    <div class="card-body">
                        <div class="row">
                            {{-- NIS / NUPTK Detail --}}
                            <div class="col-lg-6">
                                <h6 class="text-gray-800">Kode Rak</h6>
                            </div>
                            <div class="col-lg 3">
                                <h6 class="text-muted">: RCK - 01</h6>
                            </div>
                            {{-- END NIS / NUPTK Detail --}}
                            {{-- Full Name Detail --}}
                            <div class="col-lg-6">
                                <h6 class="text-gray-800">Nomor Rak</h6>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="text-muted">: 1</h6>
                            </div>
                            {{-- End Full Name Detail --}}
                            {{-- Email Detail --}}
                            <div class="col-lg-6">
                                <h6 class="text-gray-800">Kategori Dalam Rak</h6>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="text-muted">: Novel, Biologi, Agama</h6>
                            </div>
                            {{-- End Email Detail --}}
                            <div class="col-lg-12 mt-2">
                                <div class="float-right">
                                    <a href="/racks" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/racks/id/edit" class="btn btn-sm btn-outline-primary">Ubah</a>
                                    <a href="/officers/id/edit" class="btn btn-sm btn-outline-danger">Hapus</a>
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