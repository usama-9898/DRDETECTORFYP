<!DOCTYPE html>
<html lang="en">

<head>
<style>
.scrolls{
  max-height: 350px;
    overflow-y: auto;

}
.scroll {
    max-height: 400px;
    overflow-y: auto;
}</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dr.Detector - Home</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- bootstrap link  for  small containers -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- css files for small containers -->
  <link href="{{asset('css/Smallcontainers.css')}}" rel="stylesheet">

  <link href="{{asset('css/rowsgap.css')}}" rel="stylesheet">
   
  <!--  -->
  
  

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" >

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
    <div id="content-wrapper" class="d-flex flex-column" ">

      <!-- Main Content -->
      <div id="content" >

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
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" >
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="http://localhost/Dr.detector/public/Profile">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Welcome to Dr.Detector</h1>
            
          </div>

          <!-- Content Row -->
          <div class="container">
          <div class="row top-buffer">
          <div class="row mt-10 ">
          <div class="col-md-4 col-sm-6 ">
                    <div class="box1">
                        <img src="https://blog.ipleaders.in/wp-content/uploads/2020/06/20-Types-of-Identity-Theft-and-Fraud-1-1-1-1.jpg" alt="">
                        <h3 class="title">Victim of a scam?? 
                          <a href="{{ route('reportscam')}}">Report NOW!!</a>
                        </h3>
                        <ul class="icon">
                            <li><a href="{{ route('reportscam')}}"><i class="fas fa-exclamation-circle"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box1">
                        <img src="{{asset('img/pic.jpg')}}" class="img-thumbn">
                        <h3 class="title">Lost Any Document? 
                        <a href= "{{ route('lostdocument')}}">Report NOW!!</a>
                        </h3>
                        <ul class="icon">
                        <li><a href="{{ route('lostdocument')}}"><i class="fas fa-exclamation-circle"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box1">
                        <img src="{{asset('img/pic1.jpg')}} "alt="">
                        <h3 class="title">Lost Your Mobile?
                        <a href= "{{ route('Lostmobile')}}">Report NOW!!</a>
                        </h3>
                        <ul class="icon">
                            <li><a href="{{ route('Lostmobile')}}"><i class="fas fa-exclamation-circle"></i></a></li> 
                        </ul>
                    </div>
                </div>
            </div>


          </div>
          </div>

          <!-- Content Row -->

          <div class="row top-buffer">

            <!-- Area Chart -->
            
            <div class="col-xl-8 col-lg-7 scrolls ">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Lost Items</h6>
                  <div class="dropdown no-arrow">
                   
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
                  <div class="chart-area">
                   
                    <?php use App\Http\Controllers\itemlostcontroller;

                     echo itemlostcontroller::subindex(); ?>
                   
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5 scroll">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Recent Scam Stories</h6>
                  </div>
                <!-- Card Body -->
                <div class="card-body"  >
                  
                  
            
                <?php use App\Http\Controllers\reportscammercontroller;

                echo reportscammercontroller::index(); ?>
                </div>
            
          </div>

          
            </div>
          

          <!-- Content Row -->
          <div class="container">
          <div class="row top-buffer">

            <!-- Content Column -->
            <div class="col-xl-8 col-lg-7 ">

              <!-- Project Card Example -->
                <!-- <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Report Progress</h6>
                  </div>
                  <div class="card-body">
                    <h4 class="small font-weight-bold"> Profile Setup <span class="float-right">0%</span></h4>
                    <div class="progress mb-4">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">PTA Report Progress <span class="float-right">Launch report to see progress</span></h4>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                </div> -->
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">About Dr.Detector</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/detective-logo.png" alt="">
                  </div>
                  <p>Dr.Detector is pakistan's first publically available portal to report scams/scammer along with there pictures and data available a portal which allows you to report lost mobiles block stolen mobiles and report your lost documents</p>
                </div>
              </div>

            <div class="col-xl-4 col-lg-5 ">

              <!-- Illustrations -->
          

             

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
  <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
   <script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script>

  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/chart-area-demo.js')}}"></script> 
  <script src="{{ asset('js/demo/chart-pie-demo.js')}}"></script> 

  
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Script for small containers -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
