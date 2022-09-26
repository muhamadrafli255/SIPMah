@extends('layouts.main')
@section('content')           
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    @if (Request::is('dashboard3*'))
                    
                    @else
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
                        @if (Request::is('dashboard*'))
                        @if (session('Berhasil'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('Berhasil') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @endif
                    </div>
                    @endif

                    @if (Request::is('dashboard3*'))
                    @if (session('Berhasil'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('Berhasil') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @endif

                    @if (Request::is('dashboard3*'))
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                          <h4 class="mt-2 text-gray-800">Semua Buku</h4>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <div class="float-lg-right">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-search"></i></span>
                                </div>
                                <input type="text" id="SearchBox" class="form-control"
                                    placeholder="Masukan Kata Kunci" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="btn-group dropright">
                                    <button type="button" class="btn btn-outline-info ml-1 rounded"
                                        data-toggle="modal" data-target="#modalFilter">
                                        <i class="fa-solid fa-filter"></i>
                                    </button>
                                    <div class="modal fade" id="modalFilter" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Penyaringan data</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-group mb-2">
                                                            <label for="statusFilter">Kategori</label>
                                                            <select name="" id="statusFilter" class="form-control">
                                                                <option value="" selected disabled>Berdasarkan Kategori
                                                                </option>
                                                                <option value="">Novel</option>
                                                                <option value="">Komik</option>
                                                                <option value="">Dongeng</option>
                                                                <option value="">Filosofi</option>
                                                                <option value="">Biologi</option>
                                                                <option value="">Biografi</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group mb-2">
                                                            <label for="statusFilter">Pembaca</label>
                                                            <select name="" id="statusFilter" class="form-control">
                                                                <option value="" selected disabled>Berdasarkan Pembaca
                                                                </option>
                                                                <option value="">Paling Banyak</option>
                                                                <option value="">Paling Sedikit</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group mb-2">
                                                            <label for="statusFilter">Penerbit</label>
                                                            <select name="" id="statusFilter" class="form-control">
                                                                <option value="" selected disabled>Berdasarkan Penerbit
                                                                </option>
                                                                <option value="">Gramedia</option>
                                                                <option value="">Erlangga</option>
                                                                <option value="">Bentang Pustaka</option>
                                                                <option value="">Mizan Pustaka</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-primary">Saring</button>
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-dismiss="modal">Batal</button>
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
                      </div>

                      <div class="row">
                          <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <a href="/dashboard3/books/id" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 16rem;">
                                <img src="https://ebooks.gramedia.com/ebook-covers/42421/image_highres/ID_NUT2018MTH05NUT.jpg" height="384px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-muted mb-2">Tere Liye</p>
                                    <h5 class="text-gray-800 mb-2">Negeri Diujung Tanduk</h5>
                                    <span class="badge badge-pill badge-primary">120X Dipinjam</span>
                                </div>
                            </div>
                        </a>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                                <a href="/dashboard3/books/id" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 16rem;">
                                <img src="https://ebooks.gramedia.com/ebook-covers/37335/big_covers/ID_GPU2017MTH05AMBA_B.jpg" height="384px" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <p class="text-muted mb-2">Laksmi Pamuntjak</p>
                                  <h5 class="text-gray-800 mb-2">Amba</h5>
                                  <span class="badge badge-pill badge-primary">70X Dipinjam</span>
                                </div>
                              </div>
                            </a>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <a href="/dashboard3/books/id" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 16rem;">
                                <img src="https://www.gramedia.com/blog/content/images/2019/05/orang-orang-biasa-4.jpg" height="384px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-muted mb-2">Andrea Hirata</p>
                                    <h5 class="text-gray-800 mb-2">Orang - Orang Biasa</h5>
                                    <span class="badge badge-pill badge-primary">130X Dipinjam</span>
                                </div>
                              </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <a href="/dashboard3/books/id" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 16rem;">
                                <img src="https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.jpg" height="384px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-muted mb-2">Leila S. Chudori</p>
                                    <h5 class="text-gray-800 mb-2">Laut Bercerita</h5>
                                    <span class="badge badge-pill badge-primary">60X Dipinjam</span>
                                </div>
                              </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <a href="/dashboard3/books/id" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 16rem;">
                                <img src="https://ebooks.gramedia.com/ebook-covers/45496/image_highres/ID_FITE2018MTH12.jpg" height="384px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="text-muted mb-2">Herry Manampiring</p>
                                        <h5 class="text-gray-800 mb-2">Filosofi Teras</h5>
                                        <span class="badge badge-pill badge-primary">30X Dipinjam</span>
                                    </div>
                              </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <a href="/dashboard3/books/id" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 16rem;">
                                <img src="https://ebooks.gramedia.com/ebook-covers/48708/image_highres/ID_KIPANA2019MTH08.jpg" height="384px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-muted mb-2">Ibnu Katsir</p>
                                    <h5 class="text-gray-800 mb-2">Kisah Para Nabi</h5>
                                    <span class="badge badge-pill badge-primary">30X Dipinjam</span>
                                </div>
                              </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <a href="/dashboard3/books/id" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 16rem;">
                                <img src="https://ebooks.gramedia.com/ebook-covers/13357/big_covers/ID_GPU2014MTH06BIND_B.jpg" height="384px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-muted mb-2">Prof. Dr. Ir. Irwandy Arif, M. Sc</p>
                                    <h5 class="text-gray-800 mb-2">Batubara Indonesia</h5>
                                    <span class="badge badge-pill badge-primary">20X Dipinjam</span>
                                </div>
                              </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <a href="/dashboard3/books/id" class="text-decoration-none">
                            <div class="card mx-auto" style="width: 16rem;">
                                <img src="https://ebooks.gramedia.com/ebook-covers/61049/image_highres/BLK_KARD2021311822.jpg" height="384px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="text-muted mb-2">Ann Druyan</p>
                                    <h5 class="text-gray-800 mb-2">Kosmos : Aneka Rag..</h5>
                                    <span class="badge badge-pill badge-primary">20X Dipinjam</span>
                                </div>
                              </div>
                            </a>
                        </div>
                      </div>
                    @endif

                </div>
                <!---Container Fluid-->
@endsection      