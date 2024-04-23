{{-- dashboard --}}

@extends('kerangka.master')
@section('title', 'Dashboard')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b>Selamat Datang di Warung Bu Atin!</b></h1>
        </div>

        <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab"
                    aria-controls="simple-tabpanel-0" aria-selected="true">Makanan</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab"
                    aria-controls="simple-tabpanel-1" aria-selected="false"><i class="fa fa-mug-saucer"></i>Minuman</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="simple-tab-2" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab"
                    aria-controls="simple-tabpanel-2" aria-selected="false">Daftar Menu</a>
            </li>
        </ul>
        <div class="tab-content pt-5" id="tab-content">
            <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
                <div class="row">
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">
                            <img src="{{ asset('template/assets/images/dashboard/seblak.png') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">Makanan</a></p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Seblak</h5>
                                    <h5 class="text-dark mb-0">5K - 20K</h5>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card">
                            <img src="{{ asset('template/assets/images/dashboard/bakso.jpg') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">Makanan</a></p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Bakso</h5>
                                    <h5 class="text-dark mb-0">5K - 20K</h5>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card">
                            <img src="{{ asset('template/assets/images/dashboard/mie.png') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">Makanan</a></p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Mie Ayam</h5>
                                    <h5 class="text-dark mb-0">7K - 20K</h5>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
                <div class="row">
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">
                            <img src="{{ asset('template/assets/images/dashboard/nutrisari.png') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">Minuman</a></p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Nutrisari</h5>
                                    <h5 class="text-dark mb-0">3K - 5K</h5>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card">
                            <img src="{{ asset('template/assets/images/dashboard/pop.jpg') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">Minuman</a></p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Pop Ice</h5>
                                    <h5 class="text-dark mb-0">3K - 5K</h5>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card">
                            <img src="{{ asset('template/assets/images/dashboard/marimas.jpg') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">Minuman</a></p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Marimas</h5>
                                    <h5 class="text-dark mb-0">2K - 5K</h5>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">
                <div class="row">
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">
                            <img src="{{ asset('template/assets/images/dashboard/menu.jpg') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">Daftar</a></p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Menu</h5>
                                    <h5 class="text-dark mb-0"> - </h5>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card">
                            <img src="{{ asset('template/assets/images/dashboard/menu2.jpg') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">Daftar</a></p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Menu</h5>
                                    <h5 class="text-dark mb-0"> - </h5>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                        <div class="card">
                            <img src="{{ asset('template/assets/images/dashboard/menu4.jpg') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="small"><a href="#!" class="text-muted">Daftar</a></p>
                                </div>

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Menu</h5>
                                    <h5 class="text-dark mb-0"> - </h5>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
