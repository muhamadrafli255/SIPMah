@extends('layouts.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/books">Peminjaman</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    <div class="container-xl px-4 mt-4 mb-4">
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header"><p class="h5 text-gray-800">Gambar Buku</p></div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-fluid rounded mb-2" src="https://laksmipamuntjak.com/public/uploads/2017/01/Liberaturpreis%202016%20Photo%20FINAL%20FINAL%20COVER%20OP%201.jpg" alt="" width="170px" height="170px">
                        <h4>Amba</h4>
                        <p>BKS - 0002</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4 mb-xl-0 py-2">
                    <div class="card-header"><p class="h5 text-gray-800">Detail Peminjaman</p></div>
                    <div class="card-body">
                        <div class="row">
                            {{-- NIS / NUPTK Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Kode Peminjaman</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: PMJ - OOO3</h6>
                            </div>
                            {{-- END NIS / NUPTK Detail --}}
                            {{-- Full Name Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Judul Buku</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Amba</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Nama Peminjam</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Robi Firmansyah</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Petugas Peminjam</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: Rudiansyah Fakhrul</h6>
                            </div>
                            {{-- End Full Name Detail --}}
                            {{-- Email Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Tanggal Pinjam</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: 15/09/2022</h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Petugas Pengembalian</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: </h6>
                            </div>
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Tanggal Kembali</h6>
                            </div>
                            <div class="col-lg-9">
                                <h6 class="text-muted">: 20/09/2022</h6>
                            </div>
                            {{-- End No Telepon Detail --}}
                            {{-- No Telepon Detail --}}
                            <div class="col-lg-3">
                                <h6 class="text-gray-800">Status Peminjaman</h6>
                            </div>
                            <div class="col-lg-9 mb-5">
                                <h6 class="text-muted">: <span class="badge badge-warning">Sedang Dipinjam</span></h6>
                            </div>
                            {{-- End No Telepon Detail --}}
                            <div class="col-lg-12 mt-2 mb-1">
                                <div class="float-right">
                                    <a href="/loans" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/loans/id/edit" class="btn btn-sm btn-outline-primary">Ubah</a>
                                    <button data-toggle="modal" data-target="#modalPengembalian" class="btn btn-sm btn-outline-warning">Kembalikan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nonaktif-->
<div class="modal fade" id="modalPengembalian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin akan mengembalikan peminjaman ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                <a href="/loans/id/return" class="btn btn-outline-success">Yakin</a>
            </div>
        </div>
    </div>
</div>
@endsection