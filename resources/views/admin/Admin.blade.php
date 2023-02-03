<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Admin Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- logo icons -->
  <link href="assets/img/Logo/logo-principal.svg" rel="icon">
  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- bootstrap links for liste(DataTable) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

  <!-- bootstrap and icons Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <!-- CSS File -->
  <link href="assets/css/style_page_admin.css" rel="stylesheet">

</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <!-- Logo -->
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/Logo/logo-principal.svg" alt="">
        <span class="d-none d-lg-block">UnivLab3D</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- fin Logo -->
    
    <!-- Search Bar              
    <div class="search-bar align-items-center">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="Search" placeholder="Search" >
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>                            fin Search Bar -->
    
    <!-- Icons Header -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        
        <!-- mobile tablete Search Icon-->
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- fin mobile tablete Search Icon-->

        <!-- Notification -->
        <li class="nav-item dropdown">
          <!-- Notification Icon -->
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">3</span>
          </a><!-- fin Notification Icon -->

          <!--Notification Dropdown Items -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 3 new notifications
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>warning</h4>
                <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>danger</h4>
                <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>success</h4>
                <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!--fin Notification Dropdown Items -->

        </li><!-- fin Notification -->

        <!-- Messages (zadtha man 3andi ^_^) -->
        <li class="nav-item dropdown">
          <!-- Messages Icon -->
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- fin Messages Icon -->

          <!-- Messages Dropdown  -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Toumi </h4>
                  <p>aw haya wachi hadha tawalto 3lina</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Douar</h4>
                  <p>wech tgolo f site ta3i haja mliha tasta3arfo ah...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>harag</h4>
                  <p>aw mba3da ki tkhalas arwah ndiro fiha ga3da nchaykho chwi...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- fin Messages Dropdown  -->

        </li><!-- fin Messages -->

        <!--Profile-->
        
        <li class="nav-item dropdown no-arrow pe-3">
          <!-- Profile Iamge Icon -->
          <a class="nav-link nav-profile d-flex align-items-center dropdown-toggle pe-0" href="#" 
             data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-none d-md-block ps-2">M. Anes &nbsp;&nbsp;</span>
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">          
          </a><!-- fin Profile Iamge Icon -->

          <!-- Profile Dropdown -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
              aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#" onclick="active('5')">
                  <i class="bi bi-person"></i>
                  Profile
              </a>
              <a class="dropdown-item" href="#" onclick="active('6')">
                  <i class="bi bi-gear"></i>
                  Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="bi bi-box-arrow-right"></i>
                  Logout
              </a>
          </div><!-- fin Profile Dropdown -->
        </li><!-- fin Profile -->

      </ul>
    </nav><!-- fin Icons Header -->

  </header><!-- fin Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- Dashboard -->
      <li class="nav-item" onclick="active('1')">
        <a id="collapsed_1" class="nav-link " href="#" >
          <i class="bi bi-grid">&nbsp;&nbsp;&nbsp;Dashboard</i>
        </a>
      </li><!-- fin Dashboard -->

      <li class="divider">
        <div></div>
      </li>

      
      <li style="height: 10px;">
        <div></div>
      </li>
      <!-- Teacher -->
      <li class="nav-item" onclick="active('2')">
        <a id="collapsed_2" class="nav-link collapsed" href="#" >
          &nbsp;&nbsp;<i class="bi bi-person-lines-fill">&nbsp;&nbsp;&nbsp;Teacher</i>
          
        </a>
      </li><!-- fin Teacher -->

      <!-- Module -->
      <li class="nav-item" onclick="active('3')">
        <a id="collapsed_3" class="nav-link collapsed" href="#" >
          &nbsp;&nbsp;<i class="bi bi-list-ul">&nbsp;&nbsp;&nbsp;Module</i>
        </a>
      </li><!-- fin Module -->
      <!-- Admin -->
      <li class="nav-item" onclick="active('4')">
        <a id="collapsed_4" class="nav-link collapsed" href="#" >
          &nbsp;&nbsp;<i class="bi bi-people-fill">&nbsp;&nbsp;&nbsp;Admin</i>
          
        </a>
      </li><!-- fin Admin -->

      <li class="divider">
        <div></div>
      </li>
      
      <!-- Profile -->
      <li class="nav-item" onclick="active('5')">
        <a id="collapsed_5" class="nav-link collapsed" href="#" >
          <i class="bi bi-person">&nbsp;&nbsp;&nbsp;Profile</i>
        </a>
      </li><!-- fin Profile -->
      <!-- setting -->
      <li class="nav-item" onclick="active('6')">
        <a id="collapsed_6" class="nav-link collapsed" href="#" >
          <i class="bi bi-gear">&nbsp;&nbsp;&nbsp;Setting</i>
        </a>
      </li><!-- fin setting -->

    </ul>

    <script type="text/javascript">
      var v='1';
      function active(a) {
        
        var x="collapsed_"+a;
        var y="collapsed_"+v;
        var off_ = document.getElementById(a);
        var on_ = document.getElementById(v);
        var collapsed1 = document.getElementById(x);
        var collapsed2 = document.getElementById(y);       
        on_.classList.add("off");
        on_.classList.remove("on");
        
        collapsed2.classList.add("collapsed");
        
        off_.classList.remove("off");
        off_.classList.add("on");
        
        collapsed1.classList.remove("collapsed");
        
        
        v=a;
     }
  </script>

  </aside><!-- fin Sidebar-->

  <main id="main" class="main">
    
    <section id="1" class="section dashboard on">
      <!-- Title -->
      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Admin.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- fin Title -->
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- visiter -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card visiter-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Visiter <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>44</h6>
                      <span class="text-danger small pt-1 fw-bold">5%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- fin visiter -->

            <!-- graphe visiter -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Graphe Visiter <span>/This Year</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'visiter',
                          data: [110, 40, 280, 510, 420, 82, 560,150,264,452,47],
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'date',
                          categories: ["01", "02","03","04","05","06","07","08","09","10","11","12"]
                        },
                        
                      }).render();
                    });
                  </script>
                  <!-- fin Line Chart -->

                </div>

              </div>
            </div><!-- fin graphe visiter -->

          </div>
        </div><!-- fin Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Recent Activity</h5>
              <!-- activity -->
              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    M. douar add <a href="#" class="fw-bold text-dark">New TP</a>
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum 
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum 
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Lorem Ipsum Lorem Ipsum <a href="#" class="fw-bold text-dark">Lorem Ipsum</a> Lorem Ipsum Lorem Ipsum 
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum 
                  </div>
                </div>

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Lorem Ipsum Lorem Ipsum Lorem 
                  </div>
                </div>

              </div><!-- fin activity -->

            </div>
          </div><!-- fin Recent Activity -->

          

          <!-- Department most visited -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Department most visited<span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1000,
                          name: 'physic'
                        },
                        {
                          value: 500,
                          name: 'chimi'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- fin Department most visited -->

        </div><!-- fin Right side columns -->

      </div>


      <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
          </div>
          <!-- Left -->
  
          <!-- Right -->
          <div>
            <a href="" class="me-4 text-reset">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="" class="me-4 text-reset">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
              <i class="bi bi-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
              <i class="bi bi-github"></i>
            </a>
          </div>
          <!-- Right -->
        </section>
        <!-- Section: Social media -->
  
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i>UnivLab3D
                </h6>
                <p>
                  Here you can use rows and columns to organize your footer content. Lorem ipsum
                  dolor sit amet, consectetur adipisicing elit.
                </p>
              </div>
              <!-- Grid column -->
  
              
  
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
                <p>
                  <a href="#!" class="text-reset">TPs chemie</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">TPs physique</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Home</a>
                </p>
              </div>
              <!-- Grid column -->
  
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="bi bi-bank"></i></i>  Universite UFAS1 Setif, Algeria</p>
                <p>
                  <i class="bi bi-envelope"></i>  Support@Univlab3d.com</p>
                <p><i class="bi bi-telephone"></i>   +213 03 36 0000</p>
                
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
  
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2022 Copyright.
          <a class="text-reset fw-bold" href="index.html">UnivLab3D</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </section>













    <!-- TEACHER -->
















    <section id="2" class="section Teacher off">
             <!-- Page Title -->
             <div class="pagetitle">
              <h1>List of Teacher</h1>
              <nav class="navbar navbar-expand-lg">
                <form class="row g-3 container">
    
                <div class="col-md-10">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="Admin.html">Home</a></li>
                  <li class="breadcrumb-item">Teacher</li>
                </ol></div>
                <div class="col-md-2">


                <button class="btn btn-outline-primary shadow-sm" type="submit" data-bs-toggle="modal"data-bs-target="#teacherModal">
                  <i class="bi bi-person-plus-fill bx-flashing-hover">&nbsp;&nbsp;new teacher</i>
                </button>

                


              </div>
                </form>
              </nav>
              
              
            </div><!-- fin Page Title -->
    
            <!-- The form of add teacher -->
            <!-- Modal -->
            <div class="modal fade" id="teacherModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header bg-dark">
                    <h1 class="modal-title fs-5 text-white" id="ModalLabel"><b>&nbsp;New Teacher</b></h1>
                    <i class="bi bi-x-lg text-white bx-tada-hover" data-bs-dismiss="modal" aria-label="Close"></i>
                  </div>
                  <div class="modal-body">
                    
                    <form action="{{route('teachers.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="Teacher_ID">Teacher ID:</label>
    <input type="text" class="form-control" id="Teacher_ID" name="Teacher_ID">
  </div>
  <div class="form-group">
    <label for="first_name">First Name:</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name:</label>
    <input type="text" class="form-control" id="last_name" name="last_name">
  </div>
  <div class="form-group">
    <label for="department">Department:</label>
    <input type="text" class="form-control" id="department" name="department">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <button type="submit" class="btn btn-primary">Add Teacher</button>
</form>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- fin The form of add teacher -->
            
            <!-- liste Teacher -->

         
          <table id="example" class="table table-hover" style="width:100%">
              <tr>
                <th >Teacher ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Department </th>
                <th>Email Address</th>
              </tr>

                @foreach(App\Models\Teacher::orderBy('Teacher_ID')->get() as $key => $value)
             <tr>
               <td>{{ $value->Teacher_ID }} </td>
               <td>{{ $value->first_name }} </td>
               <td>{{ $value->last_name }} </td>
               <td>{{ $value->department }} </td>
               <td>{{ $value->email }} </td>
             <tr>
              @endforeach
            
          </table>

                <!-- fin liste Teacher -->
    </section>












    <!-- MODULES -->













    <section id="3" class="section Module off">
             <!-- Page Title -->
             <div class="pagetitle">
              <h1>List of Module</h1>
              <nav class="navbar navbar-expand-lg">
                <form class="row g-3 container">
    
                <div class="col-md-10">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="Admin.html">Home</a></li>
                  
                  <li class="breadcrumb-item">Module</li>
                </ol></div>
                <div class="col-md-2">
                <button class="btn btn-outline-primary shadow-sm" type="submit" data-bs-toggle="modal" data-bs-target="#mewModule">
                  <i class="bi bi-plus-circle bx-flashing-hover">&nbsp;&nbsp;new module</i>
                </button>
              </div>
                </form>
              </nav>
              
              
            </div><!-- fin Page Title -->
    
            <!-- The form of add Module -->
            <!-- Modal -->
            <div class="modal fade" id="mewModule" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header bg-dark">
                    <h1 class="modal-title fs-5 text-white" id="mewModuleLabel">New Module</h1>
                    <i class="bi bi-x-lg text-white bx-tada-hover" data-bs-dismiss="modal" aria-label="Close"></i>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('modules.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="module_name">Module Name:</label>
    <input type="text" class="form-control" id="module_name" name="module_name">
  </div>
  <div class="form-group">
    <label for="levels_id">Levels ID:</label>
    <input type="text" class="form-control" id="levels_id" name="levels_id">
  </div>
  <div class="form-group">
    <label for="speclalities_id">Specialties ID:</label>
    <input type="text" class="form-control" id="speclalities_id" name="speclalities_id">
  </div>
  <div class="form-group">
    <label for="user_id">User ID:</label>
    <input type="text" class="form-control" id="user_id" name="user_id">
  </div>
  <button type="submit" class="btn btn-primary">Add Module</button>
</form>
                   
                    
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- fin The form of add teacher -->
            <!-- liste Module -->

          
          <table id="example" class="table table-hover" style="width:100%">
              <tr>
                <th>Module Name</th>
                <th>Responsable </th>
                <th>Faculty</th>
                <th>Department</th>
                <th>Specialization</th>
                <th>Cycle</th>
              </tr>
            
               @foreach(App\Models\Module::orderBy('module_name')->get() as $key => $value)
             <tr>
               <td>{{ $value->module_name }} </td>
               <td>{{ $value->levels_id }} </td>
               <td>{{ $value->user_id }} </td>
               <td>{{ $value->speclalities_id }} </td>
             <tr>
              @endforeach
            
          </table>
                          <!-- fin liste Module -->

              </section>

    













    <!-- ADMIN -->
















    <section id="4" class="section Admin off">
       <!-- Page admin -->
       <div class="pagetitle">
        <h1>List of Admin</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Admin.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
          </ol>
        </nav>
      </div><!-- fin Page Title -->
      
        <!-- The form of admin info -->
            <!-- Modal -->
            <div class="modal fade" id="adminInfo" tabindex="-1" aria-labelledby="adminInfoLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                  <div class="modal-header bg-dark">
                    <h1 class="modal-title fs-5 text-white" id="adminInfoLabel">Admin info</h1>
                    <i class="bi bi-x-lg text-white bx-tada-hover" data-bs-dismiss="modal" aria-label="Close"></i>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        <div class="card user-card">
                            <div class="card-block">
                                <div class="user-image">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600 m-t-25 m-b-10">ana_howa19</h6>
                                <p class="text-muted"> Ana Howa</p>
                                <hr>
                                <p class="f-w-600 m-t-25 m-b-10">About</p>
                                <div>
                                <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <hr>
                                <p class="f-w-600 m-t-25 m-b-10">Contact</p>
                                <div class="row justify-content-center user-social-link">
                                    <div class="col-auto"><a href="#!"><i class="bi bi-envelope"></i></i></a></div>
                                    <div class="col-auto"><a href="#!"><i class="bi bi-facebook"></i></a></div> 
                                    <div class="col-auto"><a href="#!"><i class="bi bi-telephone"></i></a></div>
                                </div>
                            </div>
                        </div>     
                      </div>
                    </div>  
                          
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- fin The form of admin info -->
            
      <!-- List of Admin -->
      <table id="example" class="table table-hover" style="width:100%">
        <thead>
            <tr>
                <th >Admin ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Name</th>
                <th>Email Address</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
          <tr>
            
              <td scope="row">1818360000</td>
              <td>Ana</td>
              <td>Howa</td>
              <td>ana_howa19</td>
              <td>ana.howa@univ-setif.dz</td>
              <td><button class="btn2000 bx-tada-hover" onClick=""><i class="fa fa-trash"></i></button></td>
              
          </tr>
      
        
    </table>
          <!-- fin liste admin -->
    </section>





















    <!-- PROFILE -->


























    <section id="5" class="section Profile off">
        <!-- Page Title -->
        <div class="pagetitle">
          <h1>Profile</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="Admin.html">Home</a></li>
              <li class="breadcrumb-item">Profile</li>
            </ol>
          </nav>
        </div>
        <!-- fin Page Title -->
        <div class="container emp-profile">
          <form method="post">
              <div class="row">
                  <div class="col-md-4">
                      <div class="profile-img">
                          <img src="assets/img/profile-img.jpg" alt=""/>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="profile-head">
                                  <h5>
                                      Anes Manallah
                                  </h5>
                                  <h6>
                                      Etudiant
                                  </h6>
                                  
                                  <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                                    </div>
                                  </nav>
                                  
                      </div>
                  </div>
                  <div class="col-md-2">
                      <input type="button" data-bs-toggle="modal" data-bs-target="#EditProfileModal" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                  </div>
                  <!-- Modal pour edit profile -->
                  <div class="modal fade" id="EditProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header bg-dark">
                          <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Edit Profile</h1>
                          <i class="bi bi-x-lg text-white bx-tada-hover" data-bs-dismiss="modal" aria-label="Close"></i>
                        </div>
                        <div class="modal-body">
                          <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-photo-tab" data-bs-toggle="tab" data-bs-target="#nav-photo" type="button" role="tab" aria-controls="nav-photo" aria-selected="true">Photo</button>
                              <button class="nav-link" id="nav-password-tab" data-bs-toggle="tab" data-bs-target="#nav-password" type="button" role="tab" aria-controls="nav-password" aria-selected="false">Password</button>
                              
                            </div>
                          </nav>
                          <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="nav-photo" role="tabpanel" aria-labelledby="nav-photo-tab" tabindex="0">
                              <div class="profile-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                                <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab" tabindex="0">
                               <!-- Change Password -->

                                    <form style="margin-top:20px;" class="containermodal">
                                      <div class="row mb-3 mt-4">
                                        <label for="currentPassword" class="col-md-12">Current Password</label>
                                        
                                          <input name="password" type="password" class="form-Title col-md-12" id="currentPassword">
                                        
                                      </div>
                                      <div class="row mb-3">
                                        <label for="newPassword" class="col-md-12">New Password</label>
                                        
                                          <input name="newpassword" type="password" class="form-Title col-md-12" id="newPassword">
                                        
                                      </div>
                                      <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-12">Re-enter New Password</label>
                                       
                                          <input name="renewpassword" type="password" class="form-Title col-md-12" id="renewPassword">
                                        
                                      </div>
                                      <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                      </div>
                                    </form>
                              <!-- fin Change Password -->
                            </div>
                          </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- fin Modal pour edit profile -->
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <div class="profile-work">
                          <p>About</p>
                          <a href="">Website</a><br/>


                      </div>
                  </div>
                  <div class="col-md-8">
                      <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>User Id</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>Kshiti123</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Name</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>manallah anes</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Profession</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>Web Developer and Designer</p>
                                          </div>
                                      </div>
                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Experience</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>Expert</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Hourly Rate</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>10$/hr</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Total Projects</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>230</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>English Level</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>Expert</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Availability</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>6 months</p>
                                          </div>
                                      </div>
                              
                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row">
                              <div class="col-md-6">
                                  <label>Email</label>
                              </div>
                              <div class="col-md-6">
                                  <p>hiiih@gmail.com</p>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <label>Phone</label>
                              </div>
                              <div class="col-md-6">
                                  <p>123 456 7890</p>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <label>Social networks</label>
                            </div>
                            <div class="col-md-6">
                              <a href="" class="me-4 text-reset">
                                <i class="bi bi-facebook"></i>
                              </a>
                              <a href="" class="me-4 text-reset">
                                <i class="bi bi-linkedin"></i>
                              </a>
                              <a href="" class="me-4 text-reset">
                                <i class="bi bi-google"></i>
                              </a>
                              <a href="" class="me-4 text-reset">
                            </div>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </form>           
      </div>


    </section>

    <section id="6" class="section setting off">
      <!-- Page Title -->
      <div class="pagetitle">
        <h1>Setting</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Admin.html">Home</a></li>
            <li class="breadcrumb-item">Setting</li>
          </ol>
        </nav>
      </div>
      <!-- fin Page Title -->
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
 

  <!-- Vendor JS links for liste(DataTable) -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main_page_admin.js"></script>

</body>
</html>