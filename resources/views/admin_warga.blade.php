<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">

    <!-- CSFR token for ajax call -->
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

    <!-- toastr notifications -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <style>
        .hidden {
            display: none !important;
        }

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
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-light p-1">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="/">
                    {{--  <div class="sidebar-brand-icon rotate-n-15">  --}}
            <div class="illustration"><img src="assets/img/logo.png" style="height:40px" ></div>
        {{--  </div>  --}}
                    <div class="sidebar-brand-text mx-3"><span style="color:#1b262c;">Bumi Ratu</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar"></ul>

                {{--  <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>  --}}

                <a class="btn btn-outline-light btn-block btn-lg bg-success text-center rounded shadow-sm action-button "  type="button" href="/home">Surat Izin Domisili</a>
                <a class="btn btn-outline-light btn-block btn-lg bg-success text-center rounded shadow-sm action-button " type="button" href="/keramaianAdmin">Surat Izin Keramaian</a>
                <a class="btn btn-outline-light btn-block btn-lg bg-success text-center rounded shadow-sm action-button "type="button" href="/tidakmampuAdmin">Surat Keterangan Tidak Mampu</a>
                <a class="btn btn-outline-light btn-block btn-lg bg-success text-center rounded shadow-sm action-button "type="button" href="/tidakmampusekolahAdmin">Surat Keterangan Tidak Mampu Sekolah</a>
                <a class="btn btn-outline-light btn-block btn-lg bg-success text-center rounded shadow-sm action-button "type="button" href="/usahaAdmin">Surat Keterangan Usaha</a>
                <a class="btn btn-outline-light btn-block btn-lg bg-successtext-center rounded shadow-sm action-button " type="button">Edit Database Warga</a>

            </div>
        </nav>
        {{--  <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>

                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they arent good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
                </nav>
            </div>  --}}

            <div class="container-fluid">
                <br>
                <h2 class="text-dark mb-4">Halaman Admin</h2>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Database Warga</p>
                    </div>
                    <div class="card-body">
                        <!-- <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                    <label>Show&nbsp;
                                        <select class="form-control form-control-sm custom-select custom-select-sm">
                                            <option value="10" selected="">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right dataTables_filter" id="dataTable_filter">
                                    <label>
                                        <input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search">
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="table-responsive table mt-2 panel-body" id="postTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0 table-striped table-bordered table-hover" id="postTable" style="visibility: hidden;"> -->
                        <a href="#" class="btn btn-primary add-modal">
                        <span class="glyphicon glyphicon-eye-open"></span> Tambah Warga</a>
                        <br><br>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="postTable">
                                <thead>
                                    <tr>
                                        <th valign="middle">NIK</th>
                                        <th>Nama</th>
                                        <th>Pekerjaan</th>
                                        <th>Dusun</th>
                                        <th>Last updated</th>
                                        <th>Actions</th>
                                    </tr>
                                    {{ csrf_field() }}
                                </thead>
                                <tbody>
                                    @foreach($warga as $post)
                                        <tr class="item{{$post->id}}">
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->nama}}</td>
                                            <td>{{$post->pekerjaan}}</td>
                                            <td>{{$post->dusun}}</td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->diffForHumans() }}</td>
                                            <td>
                                                <button class="show-modal btn btn-success" data-id="{{$post->id}}" data-nama="{{$post->nama}}" data-ttl="{{$post->ttl}}" data-jk="{{$post->jenis_kelamin}}" data-agama="{{$post->agama}}" data-alamat="{{$post->alamat}}" data-pekerjaan="{{$post->pekerjaan}}" data-dusun="{{$post->dusun}}">
                                                <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                                <button class="edit-modal btn btn-info" data-id="{{$post->id}}" data-nama="{{$post->nama}}" data-ttl="{{$post->ttl}}" data-jk="{{$post->jenis_kelamin}}" data-agama="{{$post->agama}}" data-alamat="{{$post->alamat}}" data-pekerjaan="{{$post->pekerjaan}}" data-dusun="{{$post->dusun}}">
                                                <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                                <button class="delete-modal btn btn-danger" data-id="{{$post->id}}" data-nama="{{$post->nama}}" data-ttl="{{$post->ttl}}" data-jk="{{$post->jenis_kelamin}}" data-agama="{{$post->agama}}" data-alamat="{{$post->alamat}}" data-pekerjaan="{{$post->pekerjaan}}" data-dusun="{{$post->dusun}}">
                                                <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.panel-body -->
                        {{$warga->links()}}

                        <!-- <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2019</span></div>
            </div>
        </footer> -->
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    
    <!-- Modal form to add a post -->
    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">NIK:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="nik_add" autofocus>
                                <small>Min: 16, Max: 16, Hanya Angka</small>
                                <p class="errorNIK text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nama">Nama:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="nama_add" autofocus>
                                <small>Min: 4, Max: 30, Hanya Huruf</small>
                                <p class="errorNama text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="ttl">Tempat, Tanggal Lahir:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="ttl_add" autofocus>
                                <small>Contoh : Lampung Selatan, 23 Februari 2000</small>
                                <p class="errorTTL text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="jk">Jenis Kelamin:</label>
                            <div class="col-sm-auto">
                                <select class="form-control" id="jk_add">
                                    <option>Pria</option>
                                    <option>Perempuan</option>
                                </select>
                                <p class="errorJK text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="agama">Agama:</label>
                            <div class="col-sm-auto">
                                <select class="form-control" id="agama_add">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                                <p class="errorAgama text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pekerjaan">Pekerjaan:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="pekerjaan_add" autofocus>
                                <small>Min: 4, Max: 30, Hanya Huruf</small>
                                <p class="errorPekerjaan text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="alamat_add" autofocus>
                                <small>Min: 4, Max: 40</small>
                                <p class="errorAlamat text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="dusun">Dusun:</label>
                            <div class="col-sm-auto">
                                <select class="form-control" id="dusun_add">
                                    <option>Suka Jaya</option>
                                    <option>Bumi Ratu II</option>
                                    <option>Bumi Ratu I</option>
                                    <option>Sinar Banten</option>
                                    <option>Bumi Asri</option>
                                    <option>Negeri Gading</option>
                                </select>
                                <p class="errorDusun text-center alert alert-danger hidden"></p>
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

    <!-- Modal form to show a post -->
    <div id="showModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                    <div class="form-group">
                            <label class="control-label col-sm-2" for="id">NIK:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="nik_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nama">Nama:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="nama_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="ttl">Tempat, Tanggal Lahir:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="ttl_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="jk">Jenis Kelamin:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="jk_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="agama">Agama:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="agama_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pekerjaan">Pekerjaan:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="pekerjaan_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="alamat_show" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="dusun">Dusun:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="dusun_show" disabled>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal form to edit a form -->
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                    <div class="form-group">
                            <label class="control-label col-sm-2" for="id">NIK:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="nik_edit" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nama">Nama:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="nama_edit" autofocus>
                                <small>Min: 4, Max: 30, Hanya Huruf</small>
                                <p class="errorNama text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="ttl">Tempat, Tanggal Lahir:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="ttl_edit" autofocus>
                                <small>Contoh : Lampung Selatan, 23 Februari 2000</small>
                                <p class="errorTTL text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="jk">Jenis Kelamin:</label>
                            <div class="col-sm-auto">
                                <select class="form-control" id="jk_edit">
                                    <option>Pria</option>
                                    <option>Perempuan</option>
                                </select>
                                <p class="errorJK text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="agama">Agama:</label>
                            <div class="col-sm-auto">
                                <select class="form-control" id="agama_edit">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                </select>
                                <p class="errorAgama text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pekerjaan">Pekerjaan:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="pekerjaan_edit" autofocus>
                                <small>Min: 4, Max: 30, Hanya Huruf</small>
                                <p class="errorPekerjaan text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="alamat_edit" autofocus>
                                <small>Min: 4, Max: 60</small>
                                <p class="errorAlamat text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" style="margin-left: 15px;" for="dusun">Dusun:</label>
                            <div class="col-sm-auto">
                                <select class="form-control" id="dusun_edit">
                                    <option>Suka Jaya</option>
                                    <option>Bumi Ratu II</option>
                                    <option>Bumi Ratu I</option>
                                    <option>Sinar Banten</option>
                                    <option>Bumi Asri</option>
                                    <option>Negeri Gading</option>
                                </select>
                                <p class="errorDusun text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                            <span class='glyphicon glyphicon-check'></span> Edit
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal form to delete a form -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Apakah Anda yakin ingin menghapus data ini?</h3>
                    <br />
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">NIK:</label>
                            <div class="col-sm-auto">
                                <input type="text" class="form-control" id="nik_delete" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nama">Nama:</label>
                            <div class="col-sm-auto">
                                <input type="name" class="form-control" id="nama_delete" disabled>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                            <span id="" class='glyphicon glyphicon-trash'></span> Delete
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
    <!-- toastr notifications -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- AJAX CRUD operations -->
    <script type="text/javascript">
        // add a new post
        $(document).on('click', '.add-modal', function() {
            $('.modal-title').text('Add');
            $('#addModal').modal('show');
        });
        
        $('.modal-footer').on('click', '.add', function() {
            id = $('#nik_add').val();
            $.ajax({
                type: 'POST',
                url: 'wargaAdmin',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $('#nik_add').val(),
                    'nama': $('#nama_add').val(),
                    'ttl': $('#ttl_add').val(),
                    'jenis_kelamin': $('#jk_add').val(),
                    'agama': $('#agama_add').val(),
                    'pekerjaan': $('#pekerjaan_add').val(),
                    'alamat': $('#alamat_add').val(),
                    'dusun': $('#dusun_add').val()
                },
                success: function(data) {
                    $('.errorNIK').addClass('hidden');
                    $('.errorNama').addClass('hidden');
                    $('.errorTTL').addClass('hidden');
                    $('.errorJK').addClass('hidden');
                    $('.errorAgama').addClass('hidden');
                    $('.errorPekerjaan').addClass('hidden');
                    $('.errorAlamat').addClass('hidden');
                    $('.errorDusun').addClass('hidden');

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#addModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.id) {
                            $('.errorNIK').removeClass('hidden');
                            $('.errorNIK').text(data.errors.id);
                        }
                        if (data.errors.nama) {
                            $('.errorNama').removeClass('hidden');
                            $('.errorNama').text(data.errors.nama);
                        }
                        if (data.errors.ttl) {
                            $('.errorTTL').removeClass('hidden');
                            $('.errorTTL').text(data.errors.ttl);
                        }
                        if (data.errors.jenis_kelamin) {
                            $('.errorJK').removeClass('hidden');
                            $('.errorJK').text(data.errors.jenis_kelamin);
                        }
                        if (data.errors.agama) {
                            $('.errorAgama').removeClass('hidden');
                            $('.errorAgama').text(data.errors.agama);
                        }
                        if (data.errors.pekerjaan) {
                            $('.errorPekerjaan').removeClass('hidden');
                            $('.errorPekerjaan').text(data.errors.pekerjaan);
                        }
                        if (data.errors.alamat) {
                            $('.errorAlamat').removeClass('hidden');
                            $('.errorAlamat').text(data.errors.alamat);
                        }
                        if (data.errors.dusun) {
                            $('.errorDusun').removeClass('hidden');
                            $('.errorDusun').text(data.errors.dusun);
                        }
                    } else {
                        toastr.success('Successfully added Post!', 'Success Alert', {timeOut: 5000});
                        $('#postTable').append("<tr class='item" + id + "'><td>" + id + "</td><td>" + data.nama + "</td><td>" + data.pekerjaan + "</td><td>" + data.dusun + "</td><td>Right now</td><td><button class='show-modal btn btn-success' data-id='" + id + "' data-nama='" + data.nama + "' data-pekerjaan='" + data.pekerjaan + "' data-dusun='" + data.dusun + "'><span class='glyphicon glyphicon-eye-open'></span> Show</button> <button class='edit-modal btn btn-info' data-id='" + id + "' data-nama='" + data.nama + "' data-pekerjaan='" + data.pekerjaan + "' data-dusun='" + data.dusun + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + id + "' data-nama='" + data.nama + "' data-pekerjaan='" + data.pekerjaan + "' data-dusun='" + data.dusun + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                    }
                },
            });
        });

        // Show a post
        $(document).on('click', '.show-modal', function() {
            $('.modal-title').text('Show');
            $('#nik_show').val($(this).data('id'));
            $('#nama_show').val($(this).data('nama'));
            $('#ttl_show').val($(this).data('ttl'));
            $('#jk_show').val($(this).data('jk'));
            $('#agama_show').val($(this).data('agama'));
            $('#pekerjaan_show').val($(this).data('pekerjaan'));
            $('#alamat_show').val($(this).data('alamat'));
            $('#dusun_show').val($(this).data('dusun'));
            $('#showModal').modal('show');
        });

        // Edit a post
        $(document).on('click', '.edit-modal', function() {
            $('.modal-title').text('Edit');
            $('#nik_edit').val($(this).data('id'));
            $('#nama_edit').val($(this).data('nama'));
            $('#ttl_edit').val($(this).data('ttl'));
            $('#jk_edit').val($(this).data('jk'));
            $('#agama_edit').val($(this).data('agama'));
            $('#pekerjaan_edit').val($(this).data('pekerjaan'));
            $('#alamat_edit').val($(this).data('alamat'));
            $('#dusun_edit').val($(this).data('dusun'));
            id = $(this).data('id');
            $('#editModal').modal('show');
        });
        $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
                type: 'PUT',
                url: 'wargaAdmin/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $('#nik_edit').val(),
                    'nama': $('#nama_edit').val(),
                    'ttl': $('#ttl_edit').val(),
                    'jenis_kelamin': $('#jk_edit').val(),
                    'agama': $('#agama_edit').val(),
                    'pekerjaan': $('#pekerjaan_edit').val(),
                    'alamat': $('#alamat_edit').val(),
                    'dusun': $('#dusun_edit').val()
                },
                success: function(data) {
                    $('.errorNIK').addClass('hidden');
                    $('.errorNama').addClass('hidden');
                    $('.errorTTL').addClass('hidden');
                    $('.errorJK').addClass('hidden');
                    $('.errorAgama').addClass('hidden');
                    $('.errorPekerjaan').addClass('hidden');
                    $('.errorAlamat').addClass('hidden');
                    $('.errorDusun').addClass('hidden');

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#addModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.id) {
                            $('.errorNIK').removeClass('hidden');
                            $('.errorNIK').text(data.errors.id);
                        }
                        if (data.errors.nama) {
                            $('.errorNama').removeClass('hidden');
                            $('.errorNama').text(data.errors.nama);
                        }
                        if (data.errors.ttl) {
                            $('.errorTTL').removeClass('hidden');
                            $('.errorTTL').text(data.errors.ttl);
                        }
                        if (data.errors.jenis_kelamin) {
                            $('.errorJK').removeClass('hidden');
                            $('.errorJK').text(data.errors.jenis_kelamin);
                        }
                        if (data.errors.agama) {
                            $('.errorAgama').removeClass('hidden');
                            $('.errorAgama').text(data.errors.agama);
                        }
                        if (data.errors.pekerjaan) {
                            $('.errorPekerjaan').removeClass('hidden');
                            $('.errorPekerjaan').text(data.errors.pekerjaan);
                        }
                        if (data.errors.alamat) {
                            $('.errorAlamat').removeClass('hidden');
                            $('.errorAlamat').text(data.errors.alamat);
                        }
                        if (data.errors.dusun) {
                            $('.errorDusun').removeClass('hidden');
                            $('.errorDusun').text(data.errors.dusun);
                        }
                    } else {
                        toastr.success('Successfully updated Post!', 'Success Alert', {timeOut: 5000});
                        $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.nama + "</td><td>" + data.pekerjaan + "</td><td>" + data.dusun + "</td><td>Right now</td><td><button class='show-modal btn btn-success' data-id='" + data.id + "' data-nama='" + data.nama + "' data-pekerjaan='" + data.pekerjaan + "' data-dusun='" + data.dusun + "'><span class='glyphicon glyphicon-eye-open'></span> Show</button> <button class='edit-modal btn btn-info' data-id='" + data.id + "' data-nama='" + data.nama + "' data-pekerjaan='" + data.pekerjaan + "' data-dusun='" + data.dusun + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-nama='" + data.nama + "' data-pekerjaan='" + data.pekerjaan + "' data-dusun='" + data.dusun + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                    }
                }
            });
        });

        // delete a post
        $(document).on('click', '.delete-modal', function() {
            $('.modal-title').text('Delete');
            $('#nik_delete').val($(this).data('id'));
            $('#nama_delete').val($(this).data('nama'));
            $('#deleteModal').modal('show');
            id = $('#nik_delete').val();
        });
        $('.modal-footer').on('click', '.delete', function() {
            $.ajax({
                type: 'DELETE',
                url: 'wargaAdmin/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
                    toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                    $('.item' + data['id']).remove();
                }
            });
        });
    </script>
</body>

</html>