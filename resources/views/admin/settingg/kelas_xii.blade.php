<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/bayarSPP-5.png') }}">

    <title>bayarSPP | ADMIN</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

             <!-- Sidebar - Brand -->
             <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <img src="{{ asset('img/bayarSPP-5.png') }}" class="main-logo" width="50" alt="Awesome Image" />
                <div class="sidebar-brand-text mx-3">bayar<i>SPP</i></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


           <!-- Heading -->
           <div class="sidebar-heading">
            Menu
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">

            <a class="nav-link" href="/profil/profilesekolah1">
                <i class="fas fa-fw fa-user"></i>
                <span>My Profile</span></a>
        </li>


        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="/datas/filterdatasiswa">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Siswa</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="/pembayaran/filterdatapembayaran">
                <i class="fas fa-fw fa-cash-register"></i>
                <span>Data Pembayaran</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Setting Pembayaran</span>
            </a>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Pembayaran :</h6>
                        <a class="collapse-item" href="/settingg/kelas_x">X</a>
                        <a class="collapse-item" href="/settingg/kelas_xi">XI</a>
                        <a class="collapse-item active" href="/settingg/kelas_xii">XII</a>
                    </div>
            </div>
        </li>

         <!-- Nav Item - History -->
         <li class="nav-item">
            <a class="nav-link" href="/history/filterhistory">
                <i class="fas fa-fw fa-history"></i>
                <span>History Pembayaran</span></a>
        </li>
        
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <br>
             
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                         <!-- Nav Item - User Information -->
                         <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>{{ auth()->user()->name }}</b></span>
                                <img class="img-profile rounded-circle"
                                src="{{ asset('fotosiswa/'.auth()->user()->foto) }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/profil/profilesekolah1">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ganti Kata Sandi
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Portal
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Data Pembayaran SPP Kelas XII</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center thead-light">
                                        <tr>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Bulan Bayar</th>
                                            <th scope="col">Tanggal Pembayaran</th>
                                            <th scope="col">Jumlah Bayar</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $row)                                   

                                        
                                        
                                        <tr>
                                            <td>{{ $row->nama }}</td>
                                            <td class="text-center">{{ $row->nisn }}</td>
                                            <td class="text-center">{{ $row->jurusan }}</td>
                                            <td>September</td>
                                            <th class="text-center">13-08-2020</th>
                                            <td>Rp 100.000,00</td>
                                            <td class="text-success text-center"><b>Lunas</b></td>
                                            <td class="text-center">
                                                
                                            <a href="/settingg/editdatakelas_Xll1" class="btn btn-warning btn-icon-split mx-2">
                                                    <span class="icon text-white-30">
                                                    <i class="fas fa-edit"></i>
                                                    </span>
                                                <span class="text">edit</span>
                                                </a>
                                                <a href="/delete/{{ $row->id }}" class="btn btn-danger btn-icon-split delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}" >
                                                    <span class="icon text-white-30">
                                                    <i class="fas fa-trash"></i>
                                                    </span>
                                                <span class="text">hapus</span>
                                                </a>
                              

                                                </td>
                                        </tr>
                                      
                                    @endforeach  
                                        
                                    </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; bayarSPP 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Ke Halaman Utama?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan "Portal" jika ingin pergi ke halaman utama/portal.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../">Portal</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>

</html>