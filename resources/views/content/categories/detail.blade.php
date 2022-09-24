@extends('layouts.main')
@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        @if (Request::is('dashboard3/categories/id'))
        <h1 class="h3 mb-0 text-gray-800">{{ $title1 }}</h1>
        @else
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/officers">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
        @endif
    </div>
    <!-- Account page navigation-->
    @if (Request::is('dashboard3/categories/id'))
    <div class="row">
        <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
            <a href="/dashboard3/books/id" class="text-decoration-none">
                <div class="card mx-auto" style="width: 16rem;">
                    <img src="https://ebooks.gramedia.com/ebook-covers/42421/image_highres/ID_NUT2018MTH05NUT.jpg"
                        height="384px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-muted mb-2">Tere Liye</p>
                        <h5 class="text-gray-800 mb-2">Negeri Diujung Tanduk</h5>
                        <span class="badge badge-pill badge-primary">120X Dipinjam</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
            <a href="/books/id" class="text-decoration-none">
                <div class="card mx-auto" style="width: 16rem;">
                    <img src="https://ebooks.gramedia.com/ebook-covers/37335/big_covers/ID_GPU2017MTH05AMBA_B.jpg"
                        height="384px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-muted mb-2">Laksmi Pamuntjak</p>
                        <h5 class="text-gray-800 mb-2">Amba</h5>
                        <span class="badge badge-pill badge-primary">70X Dipinjam</span>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
            <a href="dashboard3/books/id" class="text-decoration-none">
                <div class="card mx-auto" style="width: 16rem;">
                    <img src="https://www.gramedia.com/blog/content/images/2019/05/orang-orang-biasa-4.jpg"
                        height="384px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-muted mb-2">Andrea Hirata</p>
                        <h5 class="text-gray-800 mb-2">Orang - Orang Biasa</h5>
                        <span class="badge badge-pill badge-primary">130X Dipinjam</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">
                    <p class="h4 text-gray-800">Data Kategori</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- NIS / NUPTK Detail --}}
                        <div class="col-lg-6">
                            <h6 class="text-gray-800">Kode Kategori</h6>
                        </div>
                        <div class="col-lg 3">
                            <h6 class="text-muted">: CTG - 01</h6>
                        </div>
                        {{-- END NIS / NUPTK Detail --}}
                        {{-- Full Name Detail --}}
                        <div class="col-lg-6">
                            <h6 class="text-gray-800">Nama Kategori</h6>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="text-muted">: Novel</h6>
                        </div>
                        {{-- End Full Name Detail --}}
                        {{-- Email Detail --}}
                        <div class="col-lg-6">
                            <h6 class="text-gray-800">Jumlah Buku Pada Kategori</h6>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="text-muted">: 16</h6>
                        </div>
                        {{-- End Email Detail --}}
                        <div class="col-lg-12 mt-2">
                            <div class="float-right">
                                <a href="/categories" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                <a href="/categories/id/edit" class="btn btn-sm btn-outline-primary">Ubah</a>
                                <a href="" class="btn btn-sm btn-outline-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
