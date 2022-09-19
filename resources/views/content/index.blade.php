@extends('layouts.main')
@section('content')           
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
                        @if (session('Berhasil'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('Berhasil') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>
                </div>
                <!---Container Fluid-->
@endsection      