<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UnivLab3D</title>
  <link rel="shortcut icon" href="../assets/img/favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    <!-- logo icons -->
    <link href="../assets/img/Logo/logo-principal.svg" rel="icon">
  
    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- bootstrap and icons Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  
    <!-- CSS File -->
    <link href="../assets/css/style_Physique.css" rel="stylesheet">
    <link href="../assets/css/style_landing.css" rel="stylesheet">
    <link href="../assets/css/animated-bg.css" rel="stylesheet">
</head>

<body class="main">

  <header class="header" data-header>
    <div class="container">
      <nav class="navbar navbar-expand-lg text-white fixed-top">
                <!-- Navbar brand -->
                
                <a class="navbar-brand" id="brand" href="../index.html" style="white-space:nowrap"><img
                 src="../assets/img/univlab logo 2.svg"
                 height="35"
                 alt="UnivLab3D"
                 loading="lazy"
                 style="display:inline;"
               /> <b style="display:inline;"> UnivLab3D</b></a>
                
      
                   <!-- Toggle button -->
                <button
                 class="navbar-toggler"
                 type="button"
                 data-bs-toggle="collaps"
                 data-bs-target="#btn"
                >
                <i class="bx bx-menu"></i>
                </button>
      
                   <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse">
                   <!-- Left links -->
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a href="#labs1" class="navbar-link">Labs</a>
                      </li>
                        <li class="nav-item">
                          <a href="#explore1" class="navbar-link">Explore</a>
                         </li>
                        
                        <li class="nav-item">
                          <a href="#footer" class="navbar-link">About Us</a>
                        </li>
                       </ul>
                       
                          <!-- Left links -->
        
                </div>

                <div class="nav-item dropdown no-arrow pe-3">
                      
                        <!-- Profile Iamge Icon -->
                        <a class="nav-link nav-profile d-flex align-items-center dropdown-toggle pe-0" href="#" 
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img href="{{ route('student_profile') }}"  src="../assets/img/man.png" alt="Profile" class="rounded-circle">          
                        </a><!-- fin Profile Iamge Icon -->
              
                        <!-- Profile Dropdown -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('student_profile') }}">
                                <i class="bi bi-person"></i>
                                Profile
                            </a>
                          
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                                <i class="bi bi-box-arrow-right"></i>
                                LogOut
                            </a>
                        </div><!-- fin Profile Dropdown -->
                     
                    </div>

                       </nav>

                  </div>
  </header>
      <section class="shapedividers hero mb-sm-5" id="hero">
        <div class="container">

          <div class="hero-content">
            <h1 class="effet" data-text="Let's Get Physical">Let's Get Physical</h1>
            <h3 class="h2 hero-title2">Science Is Like Magic </h3>

            <p class="hero-text">
              Welcome to UnivLab3D the first 3D platform that provide latest technologies that help you Unleash your ideas and share your exciting lab experiments with us
            </p>


            <div class="hero-form">
              <a href="#labs1" class="text-white" style="text-decoration: none;">
                <button type="submit" class="btn-hero btn-hero-primary">See More</button>
              </a>
            </div>
            <figure class="hero-banner d-none">
              <img src="../assets/img/undraw_Science_re_mnnr-removebg-preview.png" alt="Hero image">
            </figure>
          </div>
        </div>
      </section>
  <!-- LABS SECTION -->
  <div class="container px-2 px-sm-5 m-0">
    <!-- FIRST PAGE -->
    <div  id="labs1" class="row p-0 m-0" style="width: 95vw;">
    <!-- LEFT SIDE IMAGE + TEXT -->
    <div class="col-sm-4 col-12 p-0 m-0 d-flex text-center align-items-center justify-content-center">
      <div class="d-block">
        <div class="d-flex align-items-center justify-content-center">
          <img class="p-3 text-center" src="../assets/img/scientist_left.png" alt="lab tubes">
        </div>
        <h1 class="text-center">Physics laboratory</h1>
        <p class="text-center">Here you will find the latest labs that you need to accomplish. Focus and get ready for your adventure with us. Good luck.
          <br><br>
          <b>For more info visit: <a class="link-primary" target="_blank" href="https://fsciences.univ-setif.dz">FSCIENCES.UNIV-SETIF.DZ</a></b>
        </p>
        <div class="view_item rounded-4 col" style="transform: rotate(90deg); background:none; box-shadow:none; font-size: 5rem;">
          <div class="text-center align-items-center justify-content-center">
            <a href="#labs2"><i class="bi-play-circle-fill more-btn more-btn-primary"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- RIGHT SIDE -->
    <div class="p-0 m-0 m-auto col-sm-8 col-12">
      <!-- BUTTONS ON TOP OF LABS -->
      <div class="row row-cols-2">
        <!-- VIEW TYPE BUTTONS-->
        <div class="col">
          <div class="links p-0">
            <p style="padding-left:15px ;"><b>Views</b></p>
            <ul class="link list-unstyled">
              <!-- view-stacked -->
              <li class="m-15px fw-bold fs-1" data-view="list-view"><i class="bi bi-view-stacked"></i></li>
              <li class="m-15px fw-bold fs-1" data-view="card-view"><i class="bi bi-grid"></i></li>
              <li class="m-15px fw-bold fs-1" ><i class="bi bi-search"></i></li>
            </ul>
          </div>
        </div>
        <!-- SORT BY BUTTON -->
        <div class="col">
          <p><b>Sort by</b></p>
          <div class="dropdown w-auto">
            <button class="sort-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Types
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Latest</a></li>
              <li><a class="dropdown-item" href="#">A-Z</a></li>
              <li><a class="dropdown-item" href="#">ALL</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- LABS -->
      <div class="view_main">
        <!-- LIST VIEW -->
        <div class="view_wrap list-view" style="display: block;">
          <div class="view_item rounded-4">
            <div class="vi_right">
              
              @inject('Tps', 'App\Http\Controllers\TpController')

 @php
$Tps = $Tps::index_filtred();
dd($Tps)

	
  @endphp
              
              <div class="view_item rounded-4">
             <div class="vi_left">
              <img src="../assets/img/chemistry-lab.png" alt="lab">
            </div>
            <div class="vi_right">
             
              
              <div class="btn"><a class="text-white" href="{{ route('Lab') }}"> View More </a></div>
            </div>
            
          </div>     
                       
                               
                                
              <div class="btn"><a class="text-white"  href="{{ route('Lab') }}"> View More </a></div>
            </div>
          </div>
          
        </div>
        <!-- GRID VIEW -->
        <div class="view_wrap grid-view row" style="display: none;">
          <div class="container-fluid">
            <div class="row row-cols-3 text-center">
              <div class="view_item rounded-4 col">
                <div class="vi_left">
                  <img src="../assets/img/chemistry-lab.png" alt="Lab img">
                </div>
                <div class="vi_right">
              @foreach(App\Models\Tp::orderBy('module_id')->get()->slice(0, 5) as $key => $value)
                            @if($value->module_id==1)

              <div class="view_item rounded-4">
             <div class="vi_left">
              <img src="../assets/img/chemistry-lab.png" alt="lab">
            </div>
            <div class="vi_right">
              <p class="title">{{ $value->name }}</p>
              <p class="content">{{ $value->levels_id }}</p>
              <div class="btn"><a class="text-white" href="{{ route('Lab') }}"> View More </a></div>
            </div>
          </div>   
          @endif                
                                @endforeach
                  <div class="btn"><a class="text-white" href="{{ route('Lab') }}"> View More </a></div>

                </div>
              </div>
              
              <div class="view_item rounded-4 col" style="background:none; box-shadow:none; font-size: 5rem; padding-top: 15%;">
                <div class="text-center align-items-center justify-content-center">
                  <i class="bi-play-circle-fill more-btn more-btn-primary"></i>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- SECOND LABS PAGE -->
  <div id="labs2" class="row p-0 m-0" style="width: 95vw;">
    <!-- LEFT SIDE -->
    <div class="p-0 m-0 m-auto col-sm-8 col-12">
      <!-- BUTTONS ON TOP OF LABS -->
      <div class="row row-cols-2">
        <!-- VIEW TYPE BUTTONS-->
        <div class="col">
          <div class="links2 p-0">
            <p style="padding-left:15px ;"><b>Views</b></p>
            <ul class="link list-unstyled">
              <!-- view-stacked -->
              <li class="m-15px fw-bold fs-1" data-view2="list-view2"><i class="bi bi-view-stacked"></i></li>
              <li class="m-15px fw-bold fs-1" data-view2="card-view2"><i class="bi bi-grid"></i></li>
              <li class="m-15px fw-bold fs-1" ><i class="bi bi-search"></i></li>
            </ul>
          </div>
        </div>
        <!-- SORT BY BUTTON -->
        <div class="col">
          <p><b>Sort by</b></p>
          <div class="dropdown w-auto">
            <button class="sort-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Types
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Latest</a></li>
              <li><a class="dropdown-item" href="#">A-Z</a></li>
              <li><a class="dropdown-item" href="#">ALL</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- LABS -->
      <div class="view_main">
        <!-- LIST VIEW -->
        <div class="view_wrap2 list-view2" style="display: none;">
          <div class="view_item rounded-4">
            <div class="vi_left">
              <img src="../assets/img/chemistry-lab.png" alt="lab">
            </div>
            <div class="vi_right">
              <p class="title">Lab 1</p>
              <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam impedit, veniam! Voluptate a impedit animi!</p>
              <div class="btn"><a class="text-white" href="../Physics/Physique_lab.html"> View More </a></div>

            </div>
          </div>
          <div class="view_item rounded-4">
            <div class="vi_left">
              <img src="../assets/img/chemistry-lab.png" alt="lab">
            </div>
            <div class="vi_right">
              <p class="title">Lab 2</p>
              <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam impedit, veniam! Voluptate a impedit animi!</p>
              <div class="btn"><a class="text-white" href="../Physics/Physique_lab.html"> View More </a></div>

            </div>
          </div>
          <div class="view_item rounded-4">
            <div class="vi_left">
              <img src="../assets/img/chemistry-lab.png" alt="lab">
            </div>
            <div class="vi_right">
              <p class="title">Lab 3</p>
              <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam impedit, veniam! Voluptate a impedit animi!</p>
              <div class="btn"><a class="text-white" href="../Physics/Physique_lab.html"> View More </a></div>

            </div>
          </div>
          <div class="view_item rounded-4">
            <div class="vi_left">
              <img src="../assets/img/chemistry-lab.png" alt="lab">
            </div>
            <div class="vi_right">
              <p class="title">Lab 4</p>
              <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam impedit, veniam! Voluptate a impedit animi!</p>
              <div class="btn"><a class="text-white" href="../Physics/Physique_lab.html"> View More </a></div>

            </div>
          </div>
          <div class="view_item rounded-4">
            <div class="vi_left">
              <img src="../assets/img/chemistry-lab.png" alt="lab">
            </div>
            <div class="vi_right">
              <p class="title">Lab 5</p>
              <p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam impedit, veniam! Voluptate a impedit animi!</p>
              <div class="btn"><a class="text-white" href="../Physics/Physique_lab.html"> View More </a></div>

            </div>
          </div>
        </div>
        <!-- GRID VIEW -->
        <div class="view_wrap2 grid-view2 row" style="display: block;">
          <div class="container-fluid">
            <div class="row row-cols-3 text-center">

              @foreach(App\Models\Tp::orderBy('module_id')->get()->slice(0, 5) as $key => $value)
                             @if($value->module_id==1)

              <div class="view_item rounded-4 col">
                <div class="vi_left">
                  <img src="../assets/img/chemistry-lab.png" alt="Lab img">
                </div>
                <div class="vi_right">
                  <p class="title">{{ $value->name }}</p>
              <p class="content">{{ $value->objectif }}</p>
              <div class="btn"><a class="text-white" href="{{ route('Lab') }}"> View More </a></div>
                </div>
              </div>
              @endif  
              @endforeach
              
              <div class="view_item rounded-4 col" style="background:none; box-shadow:none; font-size: 5rem; padding-top: 15%;">
                <div class="text-center align-items-center justify-content-center">
                  <i class="bi-play-circle-fill more-btn more-btn-primary"></i>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
        <nav>
          <ul class="pagination d-flex justify-content-center align-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- RIGHT SIDE IMAGE + TEXT -->
    <div class="col-sm-4 col-12 p-0 m-0 d-flex text-center align-items-center justify-content-center">
      <div class="d-block">
        <div class="d-flex align-items-center justify-content-center">
          <img src="../assets/img/scientist_right.png" alt="lab tubes">
        </div>
        <h1 class="text-center">Explore MORE</h1>
        <p class="text-center">Physics students need to be curious about science</p>
        <div class="view_item rounded-4 col" style="transform: rotate(90deg); background:none; box-shadow:none; font-size: 5rem;">
          <div class="text-center align-items-center justify-content-center">
            <a href="#explore1"><i class="bi-play-circle-fill more-btn more-btn-primary"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- EXPLORE -->
<div id="explore1" class="main container-fluid vh-100">
  <div class="row">
      <div class="col-sm-4 left col-12">
        <div class="row logo">
            <img src="../assets/img/test.png" alt="" srcset="">
        </div>
        <div class="row title">
          <h1>3D ONLINE<br>LABORATORY</h1>
        </div>
        <div class="row imd">
          <img src="../assets/img/scientist_left.png" alt="" srcset="">
        </div>
        <div class="row btns">
          <a class="btn btn-primary" href="#scn" role="button"><i class="bi-caret-down-fill" style="font-size:1.5rem ;"></i></a>
        </div>
      </div>
      <div class="col-sm-8 col-12 right">
        <div class="lab">
          <img src="../assets/img/table_chaise.png" alt="">
        </div>
        <div class="des">
          <p>ADD A PICTURE OF THE LAB PRESENTING ALL THE ROOM AND OBJECTS TO SHOW RIGHT HERE WITH A DESCRIPTION OF THE LAB UNDER THE PICTURE </p>
        </div>
    </div>
  </div>
</div>
<!-- second EXPLORE -->
<div class="main container-fluid" id="scn">
  <div class="row vh-100">
    <div class="col-sm-8 col-12 right">
      <div class="lab">
        <img src="../assets/img/table_chaise.png" alt="">
      </div>
      <div class="des">
        <p>ADD A PICTURE OF THE LAB PRESENTING ALL THE ROOM AND OBJECTS TO SHOW RIGHT HERE WITH A DESCRIPTION OF THE LAB UNDER THE PICTURE </p>
      </div>
    </div>
      <div class="col-sm-4 col-12 left">
        <div class="row logo">
            <img src="../assets/img/test.png" alt="" srcset="">
        </div>
        <div class="row imd2">
          <img src="../assets/img/scientist_right.png" alt="" srcset="">
        </div>
        <div class="row descc">
          <i class="fa-sharp fa-solid fa-flask-vial disg"></i>
          <h4>OBJECTIVE</h4>
          <p>Building an interactive environment that provides a real experience for physics student</p>
        </div>
        <div class="row descc">
          <i class="fa-sharp fa-solid fa-flask-vial disg"></i>
          <h4>UNIVLAB3D</h4>
          <p>The FIRST 3D interactive platform to take the chance and share experience</p>
        </div>
      </div>
  </div>
</div>





<!-- Footer -->
<footer id="footer" class="text-center text-lg-start text-white mt-2" style="font-family: 'Poppins', sans-serif; background-color:HSL(19, 97%, 37%);">
  <div class="container text-center text-md-start mt-5">  
      <div class="row text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class=" mb-4 font-light-bold">About UnivLab3D</h5>
              <hr class="mb-4">
              <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. 
                  Beatae Laborum Ut Minus Corrupti Dolorum Dolore 
                  Assumenda Iste Voluptate Dolorem Pariatur.</p>
          </div>
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="mb-4 font-light-bold">Quick Links</h5>
              <hr class="mb-4">
              <p>
                  <i class="fab fa-facebook"></i>
                  <a href="#" class="text-light" style="text-decoration:none;">  Facebook Link</a>
              </p>
              <p>
                  <i class="fab fa-linkedin-in"></i>
                  <a href="#" class="text-light" style="text-decoration:none">  Linkedin Link</a>
              </p>
              <p>
                  <i class="fab fa-twitter"></i>
                  <a href="#" class="text-light" style="text-decoration:none">  Twitter Link</a>
              </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class=" mb-4 font-light-bold ">Contact Us</h5>
              <hr class="mb-4">
              <p>
                  <i class="fas fa-envelope mr-3"></i>
                  support@UnivLab.com
              </p>
              <p>
                  <i class="fas fa-phone mr-3"></i>
                   Phone(L) - 011-26582050
              </p>
              <p>
                  <i class="fas fa-home mr-3"></i>
                   adresse de l’université ferhat abbas
              </p> 
          </div>
          <hr class="mb-4">
          <div class="row d-flex justify-content-center text-center">
              <div>
                  <p>
                      Copyright 2022 All Right Reserved By:
                      <a href="#" style="text-decoration:none;">
                          <strong class="text-light">IDTW Team</strong>
                  </p>
              </div>
          </div>
      </div>
  </div>
  </footer>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Vendor JS links for liste(DataTable) -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/script_Ch_ph.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>