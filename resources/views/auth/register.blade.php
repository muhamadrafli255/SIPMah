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
                                    <h1 class="h4 text-gray-900 mb-4">Registrasi</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="exampleInputEmail"
                                            aria-describedby="emailHelp" placeholder="NIS / NUPTK">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail"
                                            aria-describedby="emailHelp" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail"
                                            aria-describedby="emailHelp" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option value="" selected disabled>Jenis Kelamin</option>
                                            <option value="">Laki - Laki</option>
                                            <option value="">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="exampleInputEmail"
                                            aria-describedby="emailHelp" placeholder="No Telepon">
                                    </div>
                                    <label class="mt-2" for="exampleFormControlSelect1">Alamat</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option value="" selected disabled>Provinsi</option>
                                                    <option value="">Jawa Barat</option>
                                                    <option value="">Jawa Tengah</option>
                                                    <option value="">Jawa Timur</option>
                                                    <option value="">Sumatera Barat</option>
                                                    <option value="">Sumatera Utara</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option value="" selected disabled>Kabupaten / Kota</option>
                                                    <option value="">Bandung</option>
                                                    <option value="">Kota Bandung</option>
                                                    <option value="">Purwakarta</option>
                                                    <option value="">Bogor</option>
                                                    <option value="">Cianjur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option value="" selected disabled>Kecamatan</option>
                                                    <option value="">Katapang</option>
                                                    <option value="">Arjasari</option>
                                                    <option value="">Baleendah</option>
                                                    <option value="">Kutawaringin</option>
                                                    <option value="">Cangkuang </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option value="" selected disabled>Desa</option>
                                                    <option value="">Sangkanhurip</option>
                                                    <option value="">Sukamukti</option>
                                                    <option value="">Cilampeni</option>
                                                    <option value="">Gandasari</option>
                                                    <option value="">Katapang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <select name="" class="form-control" id="">
                                                    <option value="" disabled selected>Kode Pos</option>
                                                    <option value="">40921</option>
                                                    <option value="">40961</option>
                                                    <option value="">40966</option>
                                                    <option value="">40922</option>
                                                    <option value="">40955</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                    placeholder="Alamat Lengkap"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="/store" class="btn btn-primary btn-block">Registrasi</a>
                                    </div>
                                </form>
                                <hr>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p>Sudah punya akun? <a class="font-weight-bold" href="/">Masuk!</a></p>
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
<!-- Login Content -->
@endsection
