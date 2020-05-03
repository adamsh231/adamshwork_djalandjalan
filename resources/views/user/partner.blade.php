<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Djalandjalan.com</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="{{asset('template/css/partners.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand navbar-light justify-content-center fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.html"> <img id="home-logo" src="{{asset('template/assets/img/LogoH-1.svg')}}" width="160" height="auto" alt="" style="position: relative"></a>

            <ul class="navbar-nav nav-justified text-center">
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link d-flex flex-column">
                        <i class="fa fa-plus-circle fa-lg"></i>
                        <span class="d-none d-sm-inline">Tambah</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="openingBuatTrip.html">Partners</a></li>
                        <li><a href="#">Open Trip</a></li>
                    </ul>

                </li>
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link d-flex flex-column">
                        <i class="fa fa-commenting-o fa-lg"><span class="notif animated rubberBand">new</span></i>
                        <span class="d-none d-sm-inline">Pesan</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Pesan</a></li>
                        <li><a href="#">Pesan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link d-flex flex-column">
                        <i class="fa fa-bell fa-lg"></i>
                        <span class="d-none d-sm-inline">Notifikasi</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Notif</a></li>
                        <li><a href="#">Notif</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="{{ Auth::user()->picture }}" class="avatar" alt="Avatar"><span> {{ Auth::user()->name }}</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item"><i class="fa fa-plane"></i> Tripmu</a></li>
                        <li><a href="#" class="dropdown-item"><i class="fa fa-check-circle"></i> Verifikasi Akun</a></li>
                        <li class="divider dropdown-divider"></li>
                        <li><a href="profil.html" class="dropdown-item"><i class="fa fa-user-o"></i> Profil</a></li>
                        <li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Pengaturan Akun</a></li>
                        <li><a href="{{ url('/logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i> Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container page-content">
        <div class="row">
            <div class="col-2">
                <div class="filter">
                    <div class="kategori-filter">
                        <b>Urutkan Berdasarkan</b>
                        <select class="form-control" id="inputGender">
                            <option>Terbaru</option>
                            <option>Jumlah Anggota</option>
                        </select>
                    </div>
                </div>
                <div class="filter">
                    <div class="kategori-filter">
                        <b>Tanggal</b>
                        <input type="text" name="datefilter " class="form-control" placeholder="Pilih Tanggal" value="">
                    </div>
                </div>
                <div class="filter">
                    <div class="kategori-filter">
                        <b>Anggota</b>
                        <select class="form-control" id="inputGender">
                            <option>Kurang dari 3</option>
                            <option>3 hingga 6</option>
                            <option>Lebih dari 6</option>
                        </select>
                    </div>
                </div>
                <div class="filter">
                    <div class="kategori-filter">
                        <b>Kategori</b>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            <label class="form-check-label" for="inlineRadio1">Gunug</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            <label class="form-check-label" for="inlineRadio1">Pantai</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            <label class="form-check-label" for="inlineRadio1">Air Terjun</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            <label class="form-check-label" for="inlineRadio1">Road Trip</label>
                        </div>
                    </div>
                </div>
                <div class="filter">
                    <div class="kategori-filter">
                        <b>Lokasi</b>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            <label class="form-check-label" for="inlineRadio1">Jawa Timur</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            <label class="form-check-label" for="inlineRadio1">Jawa Tengah</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            <label class="form-check-label" for="inlineRadio1">Jawa Barat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            <label class="form-check-label" for="inlineRadio1">DKI Jakarta</label>
                        </div>
                    </div>
                </div>

                <div class="text-center reset">
                    <button type="button" id="resetChecklist" class="btn btn-outline-success btn-sm">Reset</button>
                </div>
            </div>

            <div class="col-10">
                <div class="row partners-thread">

                    @foreach ($partner as $p)
                    <div class="col-6 col-md-3 partners-thread-card">
                        <a href="thread.html">
                            <div class="card card-partners">
                                <div class="img-hover-zoom">
                                    <img src="{{ $p->dest_picture }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <img src="{{ $p->user->picture }}" class="display-profil" alt="Avatar">
                                    <h5 class="card-title">{{ (explode(' ', $p->dest_name)[0]) }}</h5>
                                    <h6 class="card-title">{{ (explode(' ', $p->user->name)[0]) }} / {{ $p->user->city }}</h6>
                                    <p class="card-text">Tgl: <span>{{ date('d M Y', strtotime($p->start_date)) }} - {{ date('d M Y', strtotime($p->end_date)) }}</span></p>
                                    <p class="card-text">Titik Kumpul: <span>{{ substr($p->gather_point,0,20) }}</span></p>
                                    <p class="card-text" style="float: right;">Butuh: <span style="font-weight: bold">4 orang lagi</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer" style="background-color: white; margin-top: 50px;">
        <div class="container pt-3 border-bottom">
            <div class="row">
                <div class="col-md-3 col-sm-12 mb-3 text-center">
                    <img id="home-logo" src="{{asset('template/assets/img/logoV-1.svg')}}" width="100%" height="auto" alt="" style="position: relative">
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="col-md-3 col-sm-6 col-6 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Tentang</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#">djalandjalan.com</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="href=" #">Partners</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#">Aksesbilitas</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Keamanan</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#"></i>Keamanan</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#"></i>Tips & Trik</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Dukungan</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#"></i>Bantuan</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#"></i>Syarat & Ketentuan</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="#"></i>Kebijakan Privasi</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">Temukan Kami</h5>
                        <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                                <a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                                <a href="#" style="margin-left: 10px;"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
                                <a href="#" style="margin-left: 10px;"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" d-flex justify-content-center align-items-center">
                        <div class="container">
                            <p class="m-0 text-center">Copyright &copy; djalandjalan.com 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script src="{{asset('template/js/slick.js')}}"></script>
    <script type="text/javascript " src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js "></script>
    <script type="text/javascript " src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js "></script>

    <script>
        function uncheckAll() {
            $("input[type='checkbox']:checked").prop("checked", false)
        }
        $('#resetChecklist').on('click', uncheckAll)
    </script>
</body>

</html>
