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
        <!-- Account page navigation-->
        <div class="row">
            <div class="col-xl-12">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header"><p class="h4 text-gray-800">Data Penerbit</p></div>
                    <div class="card-body">
                        <div class="row">
                            {{-- NIS / NUPTK Detail --}}
                            <div class="col-lg-6">
                                <h6 class="text-gray-800">Kode Penerbit</h6>
                            </div>
                            <div class="col-lg 3">
                                <h6 class="text-muted">: PNB - 01</h6>
                            </div>
                            {{-- END NIS / NUPTK Detail --}}
                            {{-- Full Name Detail --}}
                            <div class="col-lg-6">
                                <h6 class="text-gray-800">Nama Perusahaan</h6>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="text-muted">: PT Gramedia Pustaka Utama</h6>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="text-gray-800">Nama Penerbit</h6>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="text-muted">: Gramedia</h6>
                            </div>
                            
                            <div class="col-lg-12 mt-5 text-center">
                                <h5 class="text-gray-800">Buku Pada Kategori</h5>
                            </div>
                            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
    
                                <!--Controls-->
                                <div class="col-lg-12 mx-auto">
                                    <div class="text-center my-3">
                                        <a class="btn-sm btn-primary" href="#multi-item-example" data-slide="prev"><i
                                                class="fas fa-chevron-left"></i></a>
                                        <a class="btn-sm btn-primary" href="#multi-item-example" data-slide="next"><i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <!--/.Controls-->
    
                                <!--Indicators-->
                                <ol class="carousel-indicators mx-auto">
                                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#multi-item-example" data-slide-to="1"></li>
    
                                </ol>
                                <!--/.Indicators-->
    
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
    
                                    <!--First slide-->
                                    <div class="carousel-item active">
    
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2" style="float:left">
                                            <div class="card mx-auto mb-2" style="width: 15rem;">
                                                <img src="https://ebooks.gramedia.com/ebook-covers/42421/image_highres/ID_NUT2018MTH05NUT.jpg"
                                                    height="364px" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <p class="text-muted mb-2">Tere Liye</p>
                                                    <h5 class="text-gray-800 mb-2">Negeri Diujung Tan...</h5>
                                                    <span class="badge badge-pill badge-primary">120X Dipinjam</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2" style="float:left">
                                            <div class="card mx-auto mb-2" style="width: 15rem;">
                                                <img src="https://ebooks.gramedia.com/ebook-covers/37335/big_covers/ID_GPU2017MTH05AMBA_B.jpg" height="364px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <p class="text-muted mb-2">Laksmi Pamuntjak</p>
                                      <h5 class="text-gray-800 mb-2">Amba</h5>
                                      <span class="badge badge-pill badge-primary">70X Dipinjam</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2" style="float:left">
                                            <div class="card mx-auto mb-2" style="width: 15rem;">
                                                <img src="https://www.gramedia.com/blog/content/images/2019/05/orang-orang-biasa-4.jpg" height="364px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="text-muted mb-2">Andrea Hirata</p>
                                        <h5 class="text-gray-800 mb-2">Orang - Orang Biasa</h5>
                                        <span class="badge badge-pill badge-primary">130X Dipinjam</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2" style="float:left">
                                            <div class="card mx-auto mb-2" style="width: 15rem;">
                                                <img src="https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.jpg" height="364px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="text-muted mb-2">Leila S. Chudori</p>
                                        <h5 class="text-gray-800 mb-2">Laut Bercerita</h5>
                                        <span class="badge badge-pill badge-primary">60X Dipinjam</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First slide-->
    
                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2" style="float:left">
                                            <div class="card mx-auto mb-2" style="width: 15rem;">
                                                <img src="https://ebooks.gramedia.com/ebook-covers/45496/image_highres/ID_FITE2018MTH12.jpg" height="364px" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="text-muted mb-2">Herry Manampiring</p>
                                            <h5 class="text-gray-800 mb-2">Filosofi Teras</h5>
                                            <span class="badge badge-pill badge-primary">30X Dipinjam</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2" style="float:left">
                                            <div class="card mx-auto mb-2" style="width: 15rem;">
                                                <img src="https://ebooks.gramedia.com/ebook-covers/45496/image_highres/ID_FITE2018MTH12.jpg" height="364px" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="text-muted mb-2">Herry Manampiring</p>
                                            <h5 class="text-gray-800 mb-2">Filosofi Teras</h5>
                                            <span class="badge badge-pill badge-primary">30X Dipinjam</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2" style="float:left">
                                            <div class="card mx-auto mb-2" style="width: 15rem;">
                                                <img src="https://ebooks.gramedia.com/ebook-covers/45496/image_highres/ID_FITE2018MTH12.jpg" height="364px" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="text-muted mb-2">Herry Manampiring</p>
                                            <h5 class="text-gray-800 mb-2">Filosofi Teras</h5>
                                            <span class="badge badge-pill badge-primary">30X Dipinjam</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2" style="float:left">
                                            <div class="card mx-auto mb-2" style="width: 15rem;">
                                                <img src="https://ebooks.gramedia.com/ebook-covers/45496/image_highres/ID_FITE2018MTH12.jpg" height="364px" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p class="text-muted mb-2">Herry Manampiring</p>
                                            <h5 class="text-gray-800 mb-2">Filosofi Teras</h5>
                                            <span class="badge badge-pill badge-primary">30X Dipinjam</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            {{-- End Email Detail --}}
                            <div class="col-lg-12 mt-5">
                                <div class="float-right">
                                    <a href="/publishers" class="btn btn-sm btn-outline-secondary">Kembali</a>
                                    <a href="/publishers/id/edit" class="btn btn-sm btn-outline-primary">Ubah</a>
                                    <a href="" class="btn btn-sm btn-outline-danger">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection