<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/bayarSPP-5.png') }}">

    <title>bayarSPP | USER</title>

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/user">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <img src="{{ asset('img/bayarSPP-5.png') }}" class="main-logo" width="50" alt="Awesome Image" />
                <div class="sidebar-brand-text mx-3">bayar<i>SPP</i></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link active" href="dashboard1">
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
                <a class="nav-link" href="profilesiswa1">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="profilesekolah1">
                    <i class="fas fa-fw fa-school"></i>
                    <span>Profil Sekolah</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tagihanpembayaran1">
                    <i class="far fa-fw fa-credit-card"></i>
                    <span>Tagihan Pembayaran</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="laporanpembayaran1">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan Pembayaran</span></a>
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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $data->nama }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('img/user.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profilesiswa">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="editsandi">
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
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Tables -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Pembayaran SPP Kelas XII</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center thead-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">History Pembayaran</th>
                                            <th scope="col">Tgl Dibayar</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">Juli</td>
                                            <td class="text-center">08-07-2022</td>
                                            <td class="text-center">Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">Agustus</td>
                                            <td class="text-center">08-08-2022</td>
                                            <td class="text-center">Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">September</td>
                                            <td class="text-center">08-09-2022</td>
                                            <td class="text-center">Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">4</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">Oktober</td>
                                            <td class="text-center">08-10-2022</td>
                                            <td class="text-center">Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">5</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">November</td>
                                            <td class="text-center">08-11-2022</td>
                                            <td class="text-center">Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">6</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">Desember</td>
                                            <td class="text-center">08-12-2022</td>
                                            <td class="text-center">Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">7</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">Januari</td>
                                            <td class="text-center">08-01-2022</td>
                                            <td class="text-center">Belum Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">Februari</td>
                                            <td class="text-center">08-02-2022</td>
                                            <td class="text-center">Belum Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">9</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">Maret</td>
                                            <td class="text-center">08-03-2022</td>
                                            <td class="text-center">Belum Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">10</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">April</td>
                                            <td class="text-center">08-04-2022</td>
                                            <td class="text-center">Belum Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">11</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">Mei</td>
                                            <td class="text-center">08-05-2022</td>
                                            <td class="text-center">Belum Lunas</td>
                                                                                         
                                        </tr>
                                        <tr>
                                            <td class="text-center">12</td>
                                            <td class="text-center">XII</td>
                                            <td class="text-center">Juni</td>
                                            <td class="text-center">08-06-2022</td>
                                            <td class="text-center">Belum Lunas</td>
                                                                                         
                                        </tr>
                                        
                                                      
                                    </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>

                <!-- DataTales Tables -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-primary">Pembayaran SPP Kelas XI</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">History Pembayaran</th>
                                        <th scope="col">Tgl Dibayar</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">Juli</td>
                                        <td class="text-center">08-07-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">Agustus</td>
                                        <td class="text-center">08-08-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">September</td>
                                        <td class="text-center">08-09-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">Oktober</td>
                                        <td class="text-center">08-10-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">November</td>
                                        <td class="text-center">08-11-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">Desember</td>
                                        <td class="text-center">08-12-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">Januari</td>
                                        <td class="text-center">08-01-2022</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">Februari</td>
                                        <td class="text-center">08-02-2022</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">Maret</td>
                                        <td class="text-center">08-03-2022</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">April</td>
                                        <td class="text-center">08-04-2022</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">11</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">Mei</td>
                                        <td class="text-center">08-05-2022</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">12</td>
                                        <td class="text-center">XI</td>
                                        <td class="text-center">Juni</td>
                                        <td class="text-center">08-06-2022</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- DataTales Tables -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-primary">Pembayaran SPP Kelas X</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">History Pembayaran</th>
                                        <th scope="col">Tgl Dibayar</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">Juli</td>
                                        <td class="text-center">08-07-2020</td>
                                        <td class="text-center">Lunas</td>
                                                                                    
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">Agustus</td>
                                        <td class="text-center">08-08-2020</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">September</td>
                                        <td class="text-center">08-09-2020</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">Oktober</td>
                                        <td class="text-center">08-10-2020</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">November</td>
                                        <td class="text-center">08-11-2020</td>
                                        <td class="text-center">Lunas</td> 
                                                                                    
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">Desember</td>
                                        <td class="text-center">08-12-2020</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">Januari</td>
                                        <td class="text-center">08-01-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">8</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">Februari</td>
                                        <td class="text-center">08-02-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">9</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">Maret</td>
                                        <td class="text-center">08-03-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">10</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">April</td>
                                        <td class="text-center">08-04-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">11</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">Mei</td>
                                        <td class="text-center">08-05-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
                                    <tr>
                                        <td class="text-center">12</td>
                                        <td class="text-center">X</td>
                                        <td class="text-center">Juni</td>
                                        <td class="text-center">08-06-2021</td>
                                        <td class="text-center">Lunas</td>
                                                                                     
                                    </tr>
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
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan "Logout" jika ingin keluar dari halaman user.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../">Logout</a>
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