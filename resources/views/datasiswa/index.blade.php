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
        <li class="nav-item active">
            <a class="nav-link active" href="/datas/filterdatasiswa">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Siswa</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item ">
            <a class="nav-link " href="/pembayaran/filterdatapembayaran">
                <i class="fas fa-fw fa-cash-register"></i>
                <span>Data Pembayaran</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Setting Pembayaran</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pembayaran kelas:</h6>
                    <a class="collapse-item" href="/setting_pembayaran">setting</a>
                    <a class="collapse-item" href="/settingg/kelas_x">X</a>
                    <a class="collapse-item" href="/settingg/kelas_xi">XI</a>
                    <a class="collapse-item" href="/settingg/kelas_xii">XII</a>
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
                    <p>DATA PAYMENT</p> 
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">SMKN 8 Malang</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('img/smk8.png') }}">
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
                                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">



                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Filter </h6>
                        </div>
                    <form class="row row-cols-lg-auto g-1">    
                        <div class="card-body">
                       
                          <div class="form-group row">

                            <label for="" class=" mt-2 mx-5">Kelas</label>
							    <div class="col-sm-2">
                  <select class="form-control" name="category_id">
                            <option value="">Pilih Kelas</option>
                            @foreach($categories as $category)
                            @if($category->category_id==$category_id)
                            <option value="{{ $category->category_id }}" selected>{{ $category->category_name }}</option>
                            @else
                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                            @endif
                            @endforeach
                        </select>
						  	    </div>

                            <label for="" class=" mt-2 mx-5">Jurusan</label>
							    <div class="col-sm-2">
                  <select class="form-control" name="customer_id">
                            <option value="">Pilih Jurusan</option>
                            @foreach($customers as $customer)
                            @if($customer->customer_id==$customer_id)
                            <option value="{{ $customer->customer_id }}" selected>{{ $customer->customer_name }}</option>
                            @else
                            <option value="{{ $customer->customer_id }}">{{ $customer->customer_name }}</option>
                            @endif
                            @endforeach
                        </select>
						  	    </div>

                                          
                                  <button type="submit" class="btn btn-primary btn-icon-split mx-5">
                                    <span class="icon text-white-30">
                                    <i class="fas fa-search"></i>
                                    </span>
                                    <span class="text">Cari</span>
                                </button>
                        </div>
                        </div>
                    </form>    
                    </div>

                    

                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran SPP</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">No</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                     

                                    </thead>
                                    <tbody>

                                    <?php $no = 1 ?>
                    @foreach($order_details as $order_detail)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>                                         
                                            <td class="text-center">{{ $order_detail->nisn }}</td>
                                            <td class="text-center">{{ $order_detail->nama }}</td>
                                            <td class="text-center">{{ $order_detail->jenis_kelamin }}</td>
                                            <td class="text-center">{{ $order_detail->category_name }}</td>
                                            <td class="text-center">{{ $order_detail->customer_name }}</td>
                                            <td class="text-center">{{ $order_detail->alamat }}</td>
                                            <td class="text-center">
                                          
                                                <a href="#" class="btn btn-info"><i class="fas fa-book-reader"></i></a>
                                                <a href="datasiswa/show " class="btn btn-success"><i class="fa fa-user-edit"></i></a>
                                                
                                                <form method="POST" action="datasiswa/destroy{{ $order_detail }}" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger delete" onclick="return confirm('Delete?')"><i class="fa fa-trash-alt"></i></button>
                                                </form>
                                                 
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
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Tekan "Logout" jika ingin keluar dari admin dan pergi ke portal.</div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            hide_total_value_end();
        })

        function hide_total_value_end() {
            if ($('select[name="total_operator"]').val() == 'between')
                $('input[name="total_value_end"]').show();
            else
                $('input[name="total_value_end"]').hide();
        }
    </script>
 

</body>

</html>