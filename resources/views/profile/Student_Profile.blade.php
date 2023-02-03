<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Profile</title>
    <link rel="stylesheet" href="../assets/css/style_Profile.css" />
    <link
      rel="stylesheet"
      href="../assets/vendor/fontawesome-free-6.2.0-web/css/all.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
  </head>
  <body>
    <div class="container-xxl">
      <div
        class="row h-100 d-flex flex-column justify-content-start align-items-center"
      >
       
          <div
            class=" text-white header-profile "
            style="background-color: #e76f51; height: 220px"
          >
            <div class=" d-flex justify-content-around align-items-start">
              <a href="javascript:history.back()" class="mt-2 text-white"
                ><i class="fa-sharp fa-solid fa-arrow-left fa-xl"></i
              ></a>
              <div class="text-center">
                <h3 class="mt-2">
                  <i class="fa-sharp fa-solid fa-graduation-cap"></i> Profile
                  page
                </h3>
              </div>
              
            </div>

            <div class="ms-5 mt-5 d-flex justify-content-start align-items-end" >
              <img
                src="../assets/img/businessman-removebg-preview 1.png"
                alt="Generic placeholder image"
                class="img-fluid mt-5 ms-5 "
                style="width: 100px; z-index: 1 ;"
              />
              
              <h3 class="mb-5 ms-4" id="username">{{ session('data')['username']}}</h3>
              
            </div>
          </div>

          
        
      </div>
    


    <section class="mt-5 user_info">
      <div class="row  d-flex justify-content-center align-items-center">
        <div class="row  p-2">
          <h3 class="text-center">User information </h3>  
        </div>

        <div class="row row-cols-2  ">
          <div class="col text-start text-center">
            <h6>Full Name</h6>
            <p class="text-muted">{{ session('data')['first_name']}} {{ session('data')['last_name']}}</p>
          </div>
          <div class="col text-start text-center">
            <h6>E-mail</h6>
            <p class="text-muted">{{ session('data')['email']}}</p>
          </div>
          <div class="col text-start text-center">
            <h6>Departement</h6>
            <p class="text-muted">{{ session('data')['departement_id']}}</p>
          </div>
          <div class="col text-start text-center">
            <h6>Role</h6>
            <p class="text-muted">Student</p>
          </div>
        </div>
      </div>
      
    
        <div class="col-12 text-center">
            <img src="../assets/img/Researchers-pana (1).svg" class="img-fluid" style="height: 600px;" alt="">
          </div>
        

      </div>
    </section>
  </div>

   

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>

  </body>
</html>