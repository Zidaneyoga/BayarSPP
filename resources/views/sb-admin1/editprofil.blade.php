<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="32x32" href="img/bayarSPP-5.png">

    <title>bayarSPP | USER</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                <img src="img/bayarSPP-5.png" class="main-logo" width="50" alt="Awesome Image" />
                <div class="sidebar-brand-text mx-3">bayar<i>SPP</i></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/user">
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
            <li class="nav-item active">
                <a class="nav-link active" href="/myprofile">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/profile_sekolah">
                    <i class="fas fa-fw fa-school"></i>
                    <span>Profil Sekolah</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/tables">
                    <i class="far fa-fw fa-credit-card"></i>
                    <span>Tagihan Pembayaran</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/laporan">
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bagas</span>
                                <img class="img-profile rounded-circle"
                                    src="img/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/myprofile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="/editsandi">
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
                <div class="row justify-content-center">

                    <!-- Page Heading -->
                    <div class="col-xl-8 col-lg-10 col-md-9">
            
                

                      <form>
                          
                          <div class="container-fluid">
      
                              <!-- Page Heading -->
                              <div class="card shadow mb-4">
                                  <div class="card-header py-3">
                                      <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
                                  </div>
                                  <div class="card-body">
      
                                  <div class="form-group">
                                      <label for="name">Nama Siswa</label>
                                      <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Anda" >
                                  </div>
                                
                                  <div class="form-group">
                                      <label for="nisn">NISN</label>
                                      <input type="text" class="form-control" name="nisn" placeholder="Masukkan NISN Anda">
                                  </div>
      
                                  <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label><br>
                                      <input type="radio" name="jeniskelamin" id="flexRadioDefault1" value="Laki-laki"> Laki-laki
                                      <label for="exampleInputEmail1" class="form-label">
                                      <input type="radio" name="jeniskelamin" id="flexRadioDefault1" value="Perempuan"> Perempuan
                                      </label>
                                  </div> 
      
                              <div class="form-group">
                                  <label>Kelas / Jurusan</label>
                                      <select class="form-control" name="jeniskelamin">
                                          <option value="">Pilih Kelas / Jurusan</option>
                                          <option>X RPL A</option>
                                          <option>X RPL B</option>
                                          <option>X RPL C</option>
                                          <option>X RPL D</option>
                                          <option>XI RPL A</option>
                                          <option>XI RPL B</option>
                                          <option>XI RPL C</option>
                                          <option>XI RPL D</option>
                                          <option>XII RPL A</option>
                                          <option>XII RPL B</option>
                                          <option>XII RPL C</option>
                                          <option>XII RPL D</option>
                                      </select>
                              </div>
      
                              <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <input type="alamat" class="form-control" name="alamat" placeholder="Masukan Alamat Anda">
                              </div>
      
                          <div class="form-group">
                          <label for="exampleInputEmail1" class="form-label">Foto</label>
                          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
      
                              <br>
                          
                          
                          <left>
                               <a href="/myprofile" class="btn btn-success btn-icon-split">
                                  <span class="icon text-white-50">
                                      <i class="fas fa-arrow-left"></i>
                                  </span>
                                  <span class="text">Kembali</span>
                              </a>
                              <button type="submit" class="btn btn-primary" >Konfirmasi</button>
                              </left>
                        </form>
      
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>