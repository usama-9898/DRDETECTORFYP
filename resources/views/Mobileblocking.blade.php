<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dr.Detector</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
  <!--Style for the forms-->
  <link href="{{ asset('\css\Form.css')}}" rel="stylesheet" type="text/css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/Dr.detector/public/home">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dr.Detector</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/Dr.detector/public/home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->

  

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="{{ route('reportscam')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Report Scam</span></a>

          <a class="nav-link" href="{{ route('Lostmobile')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Report Lost Mobile</span></a>

          <a class="nav-link" href="{{ route('lostdocument')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Report Lost Document</span></a>

          <a class="nav-link" href="{{ route('Mobileblocking')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>PTA Mobile Blocking</span></a>
          
          <a class="nav-link" href="http://localhost/Dr.detector/public/founditem">
          <i class="fas fa-fw fa-table"></i>
          <span>Post Found Items</span></a>

        <a class="nav-link" href="http://localhost/Dr.detector/public/itemslost">
          <i class="fas fa-fw fa-table"></i>
          <span>Lost Items</span></a>

          <a class="nav-link" href="http://localhost/Dr.detector/public/founditempost">
          <i class="fas fa-fw fa-table"></i>
          <span>Found Items</span></a>

      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <marquee direction="left" , scrollamount="5 " onmouseover="this.stop();", onmouseout="this.start();" > 
        Reporting false Information about an Individual/Company is a criminal offence and will be dealt as per LAW.
      </marquee>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                {{ auth::user()->name }}
                </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
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
            

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">PTA Mobile Blocking</h1>
          

        </div>
        <!-- /.container-fluid -->
        <div class="row">
            <!--OWNER DETAILS FOR MOBILE BLOCKING-->
            <div class="col-md-6">
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Owner Details</h6>
                        <div class="dropdown no-arrow">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                          </a>
                          
                        </div>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                          <!--Form For Blocking-->
                          <form action="{{route('blockmobile') }}" method="POST">
                          @csrf
                            <label for="Name" >Name</label>
                            <input type="text" id="Name"  autocomplete="off"  name="Name" placeholder="" required> <br> 
                        
                            <label for="cnic">CNIC</label>
                            <input id="cnic" name="cnic"  autocomplete="off"  placeholder="XXXXX-XXXXXXX-X"  required max="13" type="text" pattern="^\d{5}-\d{7}-\d{1}$" required /> <br>
                        
                            <label for="Address">Address</label>
                            <input type="text" id="Address" name="Address" required autocomplete="off" placeholder="" required> <br>
                        
                            <label for="Contact">Contact No.</label>
                            <input Type= "number"   autocomplete="off"  id="Contact" name="Contact" placeholder="03XXXXXXXXX" maxlength="11" required></input><br>
                        
                       
                      </div>
                    </div>
                    <input type="submit" class="btn btn-success btn-icon-split" value="Submit">
                        
      </input>
                  </div>
                

            </div>
            <!-- MOBILE DETAILSS FOR BLOCKING -->
            <div class="col-md-6">
                <div class="col-xl-12 col-lg-12">
                    <div class="card shadow mb-4">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Mobile Details</h6>
                        <div class="dropdown no-arrow">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                          </a>
                          
                        </div>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                          <!--Form For Blocking-->
                          
                            <label for="Brand" >Brand</label>
                            <input type="text" id="Brand" name="Brand" placeholder="" required> <br> 
                        
                            <label for="Model">Model</label>
                            <input type="text" id="Model" name="Model" placeholder="" required> <br>
                        
                            <label for="Imei">Imei</label>
                            <input type="number" id="Imei" name="Imei" autocomplete="off" placeholder="XXXXXXXXXXXXX" maxlength="13" > <br>
                            <div>
                                <label for="Purchaseslip">Add Purchase slip (if any):</label>
                                <input type="file" id="Purchaseslip" name="Purchaseslip" multiple>
                              </div>
                 
                        </form>
                       
                      </div>
                </div>

            </div>
       
    
            
        </div>
      
        
          

      
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{route('mylogout')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

</body>

</html>
