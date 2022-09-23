@extends('layouts.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 ml-5">{{ $title }}</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @if (session('Berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('Berhasil') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if (Request::is('racks*'))
            <div class="card mb-4">
                <div class="col-lg-12 mt-3">
                    <div class="btn-group dropright">
                        <button type="button" class="btn btn-sm btn-outline-secondary rounded mb-2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-download"></i>
                        </button>
                        <div class="dropdown-menu w-100 text-center">
                            <button class="btn btn-sm btn-success col w-75 mb-2"><i class="fa-solid fa-file-excel"></i> Excel</button>
                            <button class="btn btn-sm btn-danger col w-75 mb-2"><i class="fa-solid fa-file-pdf"></i> PDF</button>
                            <button class="btn btn-sm btn-secondary col w-75 mb-2"><i class="fa-solid fa-print"></i> Print</button>
                        </div>
                    </div>
                    <a href="/racks/create" class="btn btn-sm btn-outline-primary rounded mb-2"><i
                            class="fa-solid fa-plus"></i> Tambah</a>
                    <div class="float-right ml-2">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-search"></i></span>
                            </div>
                            <input type="text" id="SearchBox" class="form-control form-control-sm"
                                placeholder="Masukan Kata Kunci" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="float-right">
                        <select name="lengthMenu" id="lengthMenu" class="form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="19">20</option>
                            <option value="49">50</option>
                            <option value="99">100</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-bordered table-striped table-hover w-100"
                        id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Kode Rak</th>
                                <th>Nomor Rak</th>
                                <th>Jumlah Kategori</th>
                                <th class="px-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right">1</td>
                                <td class="text-right">RCK - 01</td>
                                <td class="text-right">1</td>
                                <td class="text-right">3</td>
                                <td class="text-center">
                                    <div class="">
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">2</td>
                                <td class="text-right">RCK - 02</td>
                                <td class="text-right">1</td>
                                <td class="text-right">3</td>
                                <td class="text-center">
                                    <div class="">
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">3</td>
                                <td class="text-right">RCK - 03</td>
                                <td class="text-right">1</td>
                                <td class="text-right">3</td>
                                <td class="text-center">
                                    <div class="">
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">4</td>
                                <td class="text-right">RCK - 04</td>
                                <td class="text-right">2</td>
                                <td class="text-right">0</td>
                                <td class="text-center">
                                    <div class="">
                                        <span data-toggle="modal" data-target="#nonaktifModal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">5</td>
                                <td class="text-right">RCK - 05</td>
                                <td class="text-right">2</td>
                                <td class="text-right">3</td>
                                <td class="text-center">
                                    <div class="">
                                        <span data-toggle="modal" data-target="#modalGagal">
                                            <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip"
                                                data-placement="top" title="Hapus"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @else
            <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <a href="/dashboard3/racks/id" class="text-decoration-none">
                            <div class="card mx-auto border border-primary" style="width: 10rem;">
                                <img src="https://www.pngarts.com/files/12/Vector-Bookshelf-PNG-Photo.png" alt="" class="card-img-top mt-2">
                                <div class="card-body mt-2">
                                    <h5 class="text-center text-gray-800">RCK - 01</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <a href="/dashboard3/racks/id" class="text-decoration-none">
                            <div class="card mx-auto border border-primary" style="width: 10rem;">
                                <img src="https://www.pngarts.com/files/12/Vector-Bookshelf-PNG-Photo.png" alt="" class="card-img-top mt-2">
                                <div class="card-body mt-2">
                                    <h5 class="text-center text-gray-800">RCK - 02</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <a href="/dashboard3/racks/id" class="text-decoration-none">
                            <div class="card mx-auto border border-primary" style="width: 10rem;">
                                <img src="https://www.pngarts.com/files/12/Vector-Bookshelf-PNG-Photo.png" alt="" class="card-img-top mt-2">
                                <div class="card-body mt-2">
                                    <h5 class="text-center text-gray-800">RCK - 03</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <a href="/dashboard3/racks/id" class="text-decoration-none">
                            <div class="card mx-auto border border-primary" style="width: 10rem;">
                                <img src="https://www.pngarts.com/files/12/Vector-Bookshelf-PNG-Photo.png" alt="" class="card-img-top mt-2">
                                <div class="card-body mt-2">
                                    <h5 class="text-center text-gray-800">RCK - 04</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <a href="/dashboard3/racks/id" class="text-decoration-none">
                            <div class="card mx-auto border border-primary" style="width: 10rem;">
                                <img src="https://www.pngarts.com/files/12/Vector-Bookshelf-PNG-Photo.png" alt="" class="card-img-top mt-2">
                                <div class="card-body mt-2">
                                    <h5 class="text-center text-gray-800">RCK - 05</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <a href="/dashboard3/racks/id" class="text-decoration-none">
                            <div class="card mx-auto border border-primary" style="width: 10rem;">
                                <img src="https://www.pngarts.com/files/12/Vector-Bookshelf-PNG-Photo.png" alt="" class="card-img-top mt-2">
                                <div class="card-body mt-2">
                                    <h5 class="text-center text-gray-800">RCK - 06</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <a href="/dashboard3/racks/id" class="text-decoration-none">
                            <div class="card mx-auto border border-primary" style="width: 10rem;">
                                <img src="https://www.pngarts.com/files/12/Vector-Bookshelf-PNG-Photo.png" alt="" class="card-img-top mt-2">
                                <div class="card-body mt-2">
                                    <h5 class="text-center text-gray-800">RCK - 07</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <a href="/dashboard3/racks/id" class="text-decoration-none">
                            <div class="card mx-auto border border-primary" style="width: 10rem;">
                                <img src="https://www.pngarts.com/files/12/Vector-Bookshelf-PNG-Photo.png" alt="" class="card-img-top mt-2">
                                <div class="card-body mt-2">
                                    <h5 class="text-center text-gray-800">RCK - 08</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Modal Nonaktif-->
<div class="modal fade" id="nonaktifModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin akan menghapus rak ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
                <a href="/racks/id/destroy" class="btn btn-outline-danger">Yakin</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Kategori < 0 -->
<div class="modal fade" id="modalGagal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Masih ada kategori di dalam rak ini, silahkan pindahkan terlebih dahulu
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<!---Container Fluid-->
@endsection
