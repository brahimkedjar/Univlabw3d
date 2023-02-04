<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style_landing.css" />
    <link
      rel="stylesheet"
      href="assets/vendor/fontawesome-free-6.2.0-web/css/all.css"
    />
    
    <!-- bootstrap css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
</head>
<body>
frontend.sign
<!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white fixed-top" id="main-nav">
    <!-- Container wrapper -->
     <div class="container">
            <!-- Navbar brand -->
            
            <a class="navbar-brand" id="brand" href="index.html" ><img
             src="assets/img/univlab logo 2.svg"
             height="35"
             alt="UnivLab3D"
             loading="lazy"
           /> <b> UnivLab3D</b></a>
            
  
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
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
               <!-- Left links -->
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#secondP">Explore</a>
                  </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#labs" >Labs</a>
                     </li>
                    
                    <li class="nav-item">
                       <a class="nav-link" href="#footer">AboutUs</a>
                    </li>
                   </ul>
                      <!-- Left links -->
                     
                    <div class="d-flex align-items-center">
                      <a href="{{ route('login_form') }}" ><button type="button" class="btn  px-3 me-2" id="btn3">
                             LogIn
                         </button></a>
                         <a href="{{ route('login_form') }}"><button type="button" id="btn1" class="btn btn-primary me-3">
                            SignUp 
                         </button></a>
                    </div>

                    <div class="nav-item dropdown no-arrow pe-3">
                      
                        <!-- Profile Iamge Icon -->
                        <a class="nav-link nav-profile d-flex align-items-center dropdown-toggle pe-0" href="#" 
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="assets/img/man.png" alt="Profile" class="rounded-circle">          
                        </a><!-- fin Profile Iamge Icon -->
              
                        <!-- Profile Dropdown -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="Profile/Teacher_Profile.html">
                                <i class="bi bi-person"></i>
                                Profile
                            </a>
                            
                            <a href="{{ route('admin_form') }}"class="dropdown-item" href="Admin.html">
                                <i class="bi bi-gear"></i>
                                Admin
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="bi bi-box-arrow-right"></i>
                                LogOut
                            </a>
                        </div><!-- fin Profile Dropdown -->
                     
                    </div>



                  </div>
        <!-- Collapsible wrapper -->
    </div>
       <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  <div class="container-fluid firstP">
    
        <div class="layer">

          <div class="row h-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-center text-white">Get started with Univab3D</h1>
            <div class="text-center">
              <button type="button" id="btn5" class="btn btn-primary  mt-4">
                <a href="#secondP"> <b>Get started </b> </a>
            </button>
            </div>
            
          </div>
            
        </div>
    
  </div>


  <!--  First Page -->



  <!-- Second Page -->
    
           




<!-- about UnivLab3D -->
<section class="container-xxl" id="secondP">
  <div class="about"id="About">
    <div  class="row">
        <div class="row">
            <div class="col" id="col1">
                       <img
                         src="assets/img/Virtual reality-amico.svg"
                         height="500"
                       />
            </div>
            <div class="col text-center mt-5" id="col2">
                <h2 class="wlcm mt-5"style="font-size: 4vw">Welcome to our virtual lab <b style="color: #2A9D8F;font-size: 5vw">UnivLab3D</b></h2>
                <p class="presentation mt-5">ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br> ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <br> ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum 
                <br> ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </p>
            </div>
          </div>
    </div>
  </div>
</section>



<section class="body" id="labs">
  <div class="container container7">
    <div class="container">
      <!-- Announcement -->
      <hr class="mb-4 text-center" color="#264653" width="1080px" size="3px">
      <div class="announcement text-center">Announcement</div>
     
    </div>



    
     




    <div class="col">
      <!-- cards -->
      <center>
        <div class="container" >
        

          <input type="radio" name="slider" class="d-none" id="s1" checked>
          <input type="radio" name="slider" class="d-none" id="s2">
          <input type="radio" name="slider" class="d-none" id="s3">
          <input type="radio" name="slider" class="d-none" id="s4">
          <input type="radio" name="slider" class="d-none" id="s5">
      
          <div class="cards">
            <label for="s1" id="slide1">
              <div class="card">
                <div class="image">
                  <img src="assets/img/scientist3.jpg" alt="">
                 
                </div>
                <div class="infos">
                  <span class="name">Science Engineering</span>
                  <span class="lorem">Lorem ipsum dolor sit amet, sit amet  adipiscing elit. Aenean vel ansd . Nullam
                    lorem. Nulla eu
                    sodales</span>
                </div>
                <a href="#" class="btn-contact">details</a>
               
              </div>
            </label>
      
            <label for="s2" id="slide2">
              <div class="card">
                <div class="image">
                  <img src="assets/img/science.jpg" alt="">
                  
                </div>
                <div class="infos">
                  <span class="name">Life science</span>
                  <span class="lorem">Lorem ipsum dolor sit, adipiscing elit. Aenean vel sit ansd . Nullam
                    lorem. Nulla eu
                    sodales karma stellus</span>
                </div>
                <a href="#" class="btn-contact">details</a>
             
              </div>
            </label>
      
            <label for="s3" id="slide3">
              <div class="card">
                <div class="image">
                  <img src="assets/img/news.jpg" alt="">
                 
                </div>
                <div class="infos">
                  <span class="name">News</span>
                  <span class="lorem">Lorem ipsum dolor, sit amet let kar adipiscing. Aenean vel velit sit ansd . Nullam
                    lorem. Nulla karma stellus</span>
                </div>
                <a href="#" class="btn-contact">details</a>
               
              </div>
            </label>
      
            <label for="s4" id="slide4">
              <div class="card">
                <div class="image">
                  <img src="assets/img/articles.jpg" alt="">
                  
                </div>
                <div class="infos">
                  <span class="name">Articles</span>
                  <span class="lorem">Lorem ipsum dolor sit, sit amet elit. Aenean sit amet sit amet vel velit sit ansd. Nulla eu
                    sodales stellus</span>
                </div>
                <a href="#" class="btn-contact">details</a>
              
              </div>
            </label>
      
            <label for="s5" id="slide5">
              <div class="card">
                <div class="image">
                  <img src="assets/img/social.jpg" alt="">
               
                </div>
                <div class="infos">
                  <span class="name">Community</span>
                  <span class="lorem">Lorem ipsum sit amet, sit amet elit. Aenean vel velit ansd . Nullam
                    lorem. Nulla eu
                    sodales stellus</span>
                </div>
                <a href="#" class="btn-contact">details</a>
                
                
              </div>
            </label>
          </div>
      
        </div>

      </center>
      
      <div class="container" id="GOTO"  >
        <!-- Go to section -->

        
        <div class="go-to text-center">Go to</div>
        <div class="buttons mb-2">
          <a href="{{ route('Lab_tst') }}"><button class="button" id="first" > Physics</button></a>
          <a href="{{ route('chim_tst') }}"><button class="button" id="second">Chemistry</button></a>
        </div>
      </div>
      
        
      </div>
    </div>
  </div>
</section>





<!-- Footer -->
<footer id="footer" class="text-center text-lg-start text-white mt-2" style="font-family: 'Poppins', sans-serif; background-color:#2a9d8f;">
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






  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="assets/js/script_landing.js"></script>
</body>
</html>