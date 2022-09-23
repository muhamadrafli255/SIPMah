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

            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <a href="/dashboard3/categories/id" class="text-decoration-none">
                        <div class="card mx-auto border border-primary" style="width: 10rem;">
                            <img src="https://png-5.vector.me/files/images/3/5/350819/book_preview" alt="" class="card-img-top">
                            <div class="card-body mt-2">
                                <h5 class="text-center text-gray-800">Novel</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <a href="/dashboard3/categories/id" class="text-decoration-none">
                        <div class="card mx-auto border border-primary" style="width: 10rem;">
                            <img src="https://png-5.vector.me/files/images/3/5/350819/book_preview" alt="" class="card-img-top">
                            <div class="card-body mt-2">
                                <h5 class="text-center text-gray-800">Komik</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                    <a href="/dashboard3/categories/id" class="text-decoration-none">
                        <div class="card mx-auto border border-primary" style="width: 10rem;">
                            <img src="https://png-5.vector.me/files/images/3/5/350819/book_preview" alt="" class="card-img-top">
                            <div class="card-body mt-2">
                                <h5 class="text-center text-gray-800">Filosofi</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    </div>
</div>
</div>
@endsection
