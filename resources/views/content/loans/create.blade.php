@extends('layouts.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Peminjaman</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h4 text-gray-800">Data Peminjaman</p></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 mb-1">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputDate">Tanggal Pinjam</label>
                                    <input type="date" class="form-control" id="inputDate" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-1">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputName">Nama Peminjam</label>
                                    <select name="" id="inputName" class="form-control" required>
                                        <option value="" selected disabled>Pilih Nama Peminjam</option>
                                        <option value="">Rudiansyah Fakhrul</option>
                                        <option value="">Jujun Saputra</option>
                                        <option value="">Dani Fitriani</option>
                                        <option value="">Andara Amanda</option>
                                        <option value="">Queensha Marsya</option>
                                        <option value="">Raina Aqila</option>
                                        <option value="">Sadiya Marshanda</option>
                                        <option value="">Robi Firmansyah</option>
                                        <option value="">Dodi Permana</option>
                                        <option value="">Jajang Sukmara</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-1">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputName">Judul Buku</label>
                                    <select name="" id="inputName" class="form-control" required>
                                        <option value="" selected disabled>Pilih Judul Buku</option>
                                        <option value="">Negeri Diujung Tanduk</option>
                                        <option value="">Amba</option>
                                        <option value="">Orang - Orang Biasa</option>
                                        <option value="">Matematika Kelas 11</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-1">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputDateBayo">Estimasi Pengembalian</label>
                                    <input type="date" class="form-control" id="inputDateBayo" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <div class="float-right">
                                    <a href="/loans" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/loans/store" class="btn btn-sm btn-outline-primary">Tambah</a>
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