<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!--Style for the forms-->
  <link href="{{ asset('\css\Form.css')}}" rel="stylesheet">

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

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
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
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
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
          

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Report Lost Documents</h1>
          <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Documents Information</h6>
                <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <!-- FORM FOR REPORTING-->
                <div class="container">
              
                  <form action="submitlostdocument" method="POST">
                   @csrf
                    <label for="Uname" >Name</label>
                    <input type="text" id="Uname" name="Uname" placeholder="" required>
                
                    <label for="Doctype">Document Type</label>
                    <select name="Doctype" id="Doctype" aria-placeholder="Select" required>
                        <option value="" disabled selected>Select </option>
                        <option value="cnic">C.N.I.C</option>
                        <option value="Vehiclebook">Vehicle Registartion Documents</option>
                        <option value="Makrsheets">Marksheets</option>
                        <option value="License">License</option>
                        <option value="Others">Others</option>
                      </select>
                
                    <label for="Docname">Name On documents</label>
                    <input type="text" id="Docname" name="Docname"  placeholder="" required>

                    <label for="Docinstitution">Institution on Documents</label>
                    <input type="text" id="Docinstitution" name="Docinstitution"  placeholder="" required>

                    <label for="cnic">C.N.I.C </label>
                    <input id="cnic" name="cnic"  autocomplete="off"  placeholder="XXXXX-XXXXXXX-X"  required max="13" type="text" pattern="^\d{5}-\d{7}-\d{1}$" required /> <br>

                    <label for="Vehicletype">Vehicle type</label>
                    <input type="text" id="Vehicletype" name="Vehicletype"  placeholder="" required>

                    <label for="Regnumber">Registration Number</label>
                    <input type="text" id="Regnumber" name="Regnumber"  placeholder="" required>

                    <label for="Docaddress">Address On Documents</label>
                    <input type="text" id="Docaddress" name="Docaddress"  placeholder="" required>
                
                    <label for="lost">Place of lost</label>
                    <input Type= "text" id="lost" name="placeoflost" placeholder="" required ></input>

                    <label for="contactnumber">If found! Contact</label>
                    <input Type= "number"   autocomplete="off"  id="Contact" name="Contact" placeholder="03XXXXXXXXX" maxlength="11" required></input><br>

                    <label for="Info">Additional Information</label>
                    <textarea id="Info" name="info" placeholder=" Type here" style="height: 100px;" required></textarea>
                    
                    <div class="row">
                      
                      <div class="col-md-6">
                        <button href="#" type="submit" class="btn btn-success btn-circle btn-lg" >
                            <i class="fas fa-check"></i>
                          </button>
                       </div>
                       <div class="col-md-6 text-right">
                        <label for="myfile">Add images:</label>
                        <input type="file" id="myfile" name="myfile" multiple>
                      </div>
                    </div>
                    <br><br>
                    
                  </form>
                </div>
              
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

  <!-- Swwet alerts -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script> 
    @if (session('status'))
                 
                        swal({
                              title: '{{ session('status') }}',
                              icon: "success",
                            });
                  @endif
</script>

</body>

</html>
