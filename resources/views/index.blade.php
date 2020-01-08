<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">

    <!-- CSFR token for ajax call -->
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>Getting Started</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <!-- toastr notifications -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <style>
        .panel-heading {
            padding: 0;
        }
        .panel-heading ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .panel-heading li {
            float: left;
            border-right:1px solid #bbb;
            display: block;
            padding: 14px 16px;
            text-align: center;
        }
        .panel-heading li:last-child:hover {
            background-color: #ccc;
        }
        .panel-heading li:last-child {
            border-right: none;
        }
        .panel-heading li a:hover {
            text-decoration: none;
        }

        .table.table-bordered tbody td {
            vertical-align: baseline;
        }
        /* icheck checkboxes */
        .iradio_flat-yellow {
            background: url(https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/yellow.png) no-repeat;
        }
    </style>
</head>

<body>
    {{ csrf_field() }}
    <!-- Modal form to add a post -->
    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <!-- <h4 class="modal-title"></h4> -->
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nik">NIK:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik_add" autofocus>
                                <small>Min: 16, Max: 16, Hanya Angka</small>
                                <p class="errorNIK text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success add" data-dismiss="modal">
                            <span id="" class='glyphicon glyphicon-check'></span> Add
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  <div>  --}}
        <div class="header-blue">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">



                <div class="container-fluid"><div class="col-1"><img src="assets/img/logo.png" style="height:60px" ></div><a class="navbar-brand" href="/">Bumi Ratu Ngambur</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/">Beranda</a></li>
                            <li class="nav-item" role="presentation"><a class="btn  btn-outline-warning    " href="#surat">Buat Surat</a></li>
                            {{--  <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true" href="#">Buat Surat </a>  --}}
                                {{--  <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Surat Domisili</a><a class="dropdown-item" role="Surat Izin Keramaian" href="#">Surat Izin Keramaian</a><a class="dropdown-item" role="Surat Keterangan Tidak Mampu" href="#">Surat Keterangan Tidak Mampu</a><a class="dropdown-item" role="presentation" href="#">Surat Keterangan Usaha dan PBB</a><a class="dropdown-item" role="presentation" href="#">Surat Pindah Kosong</a></div>  --}}
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            {{--  <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>  --}}
                        </form><a class="btn btn-outline-success" role="button" href="/login">Log In</a></div>
                </div>
            </nav>
            {{--  <div class="container hero">  --}}
                    {{--  <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(https://wisato.id/wp-content/uploads/2019/03/Daya-Pikat-10-Tempat-Wisata-di-Pesisir-Barat.jpg/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?tx    tsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>  --}}
<div class="simple-slider">
        <div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="assets/img/2.jpg" class="w-100 h-100">
        </div>
        <div class="swiper-slide">
            <img src="assets/img/1.jpg" class="w-100 h-100">
        </div>
        <div class="swiper-slide">
            <img src="assets/img/desk.jpg" class="w-100 h-100">
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

    {{--  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            {{--  <div class="img-responsive">  --}}
            {{--  <div class="carousel-item active" data-interval="10000">
                <img src="assets/img/1.jpg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="assets/img/2.jpg"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                        h5>...</h5>
                        <p>...</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/desk.jpg" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>

        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>  --}}

    <div class="features-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Fitur-Fitur Aplikasi</h2>
                {{--  <p class="text-center">Apa apa saja yang bisa dilakukan Aplikasi Web Bumiratungambur.com </p>  --}}
            </div>
            <div class="row features">
                <div class="col-sm-10 col-lg-4 item"><i class="fa fa-envelope-open icon"></i>
                    <h3 class="name">Surat Izin Domisili</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-envelope-open icon"></i>
                    <h3 class="name">Surat Izin Kegiatan</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-envelope-open icon"></i>
                    <h3 class="name">Surat Keterangan Tidak Mampu</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-envelope-open icon"></i>
                    <h3 class="name">Surat Keterangan PBB</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-newspaper-o icon"></i>
                    <h3 class="name">Artikel Desa</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Nomor Desa</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Artikel Desa</h2>
                <p class="text-center">Artikel-artikel terkait tentang desa terbaru. </p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
                <h3 class="name">Article Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
    </div>
    </div>



<section id="surat"></section>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Buat Surat</h2>
                <p class="text-center">Request Surat Domisili, Surat Izin Kegiatan dll Langsung ke Balai tanpa harus ke tempat. </p>
            </div><br>

    <div class="col text-center">
            <div class="buttons"><a class="btn btn-primary add-modal" role="button" href="#">Surat Izin Domisili</a><a class="btn btn-warning" type="button" href="/suratizinkegiatan">Surat Izin Kegiatan</a></div>
            <br>
            <div class="buttons"><a class="btn btn-success" role="button" href="/suratketerangantidakmampu">Surat Keterangan Kurang Mampu</a><a class="btn btn-danger" type="button"href="/suratketeranganpbb">Surat Keterangan PBB</a></div>
            </div><br><br><br>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
sc
<script src="../package/js/swiper.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
         autoHeight: true, //enable auto height
        spaceBetween: 30,
        centeredSlides: true,

        autoplay: {
        delay: 500,
        disableOnInteraction: false,
    },
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
    });
</script>

    </div>



    {{--  <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center">Your Wonderful Article Title</h1>
                        <p class="text-center"><span class="by">by</span> <a href="#">Author Name</a><span class="date">Sept 8th, 2016 </span></p><img class="img-fluid" src="assets/img/desk.jpg"></div>
                    <div class="text">
                        <p>Sed lobortis mi. Suspendisse vel placerat ligula. <span style="text-decoration: underline;">Vivamus</span> ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in
                            justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. <strong>Ut vehicula rhoncus</strong> elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit <em>pulvinar dict</em> vel in justo. Vestibulum
                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        <h2>Aliquam In Arcu </h2>
                        <p>Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae.</p>
                        <figure><img class="figure-img" src="assets/img/beach.jpg">
                            <figcaption>Caption</figcaption>
                        </figure>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit
                            pulvinar dictum vel in justo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <!-- toastr notifications -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- AJAX CRUD operations -->
    <script type="text/javascript">
        // add a new post
        $(document).on('click', '.add-modal', function() {
            $('#addModal').modal('show');
        });
        $('.modal-footer').on('click', '.add', function() {
            $.ajax({
                type: 'POST',
                url: '/',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'nik': $('#nik_add').val()
                },
                success: function(data) {
                    $('.errorNIK').addClass('hidden');

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#addModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.nik) {
                            $('.errorNIK').removeClass('hidden');
                            $('.errorNIK').text(data.errors.nik);
                        }
                    } else {
                        toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                    }
                },
            });
        });
    </script>
</body>

</html>
