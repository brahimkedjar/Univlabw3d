
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in || Sign up </title>
     <!-- font awesome icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- css stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style_sign.css')}}">
</head>
<body>

    <section class="sticky">
        <div class="bubbles">
            <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>

        </div>
      </section>

    <div class="container" id="container">

        <div class="form-container sign-up-container" id="sign-up">

            <form action="#" id="loginForm">

                <header>Register a new account</header>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                    <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                </div>
                <span>or  register  with  your  email  id</span>


                  <div class=" row g-3">
                     <div class="col">
                      <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    &nbsp;
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                  </div>
                <div class="form-group">
                    <i class="far fa-user"></i>
                    <input class="myInput" type="text" placeholder="User name" name="username" />

                </div>
                <div class="form-group">
                    <i class="far fa-envelope"></i>
                    <input class="myInput" type="email" placeholder="Email" name="email"/>

                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input class="myInput" type="password" placeholder="Password" name="pass"/>

                </div>
                <div class="form-group">
                    <i class="fas fa-address-card"></i>
                    <input class="myInput" type="text" placeholder="Registration number" name="registration" />

                </div>
                <div class="form-group row g-3">
                    <div class="  col">

                        <select id="inputState" class="form-select" aria-placeholder="Level">

                            <option >Level</option>
                            <option></option>
                          </select>
                    </div>
                    &nbsp;
                    <div class="col">
                        <select id="inputState" class="form-select" aria-placeholder="Departement">
                            <option >Departement</option>
                            <option></option>
                          </select>
                    </div>
                    &nbsp;
                    <div class="col">
                        <select id="inputState" class="form-select" aria-placeholder="Groupe" aria-label="Groupe">
                            <option >Groupe</option>
                            <option></option>
                          </select>
                    </div>
                  </div>

                <button type="submit">Sign Up </button>
            </form>
        </div>


        <div class="form-container sign-in-container" id="sign-in">

            <form action="/teacher">
                <a class="logo1" id="brand1" href="/"><img
                    src="{{asset('images/univlablogo2.svg')}}"
                    height="50"
                    alt="Logo"
                    loading="lazy"
                  /> </a>

                <div class="head1"><header>Sign in to your account</header></div>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                    <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                </div>

                <span> or sign in with your email id</span>
                <div class="form-group">
                    <i class="far fa-envelope"></i>
                     <input  class="myInput"  placeholder="Email" type="text" id="email" required>

                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                     <input  class="myInput" type="password" id="password" placeholder="Password" required>

                     <div class="eye">
                     <i id="hide1" class="fa-solid fa-eye"></i>
                     <i id="hide2"class="fa-solid fa-eye-slash"></i>
                     </div>
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>

        <div class="overlay-container" id="overlayCon">

            <div class="overlay">

                <div class="overlay-panel overlay-left">
                    <a class="logo " id="brand1" href="/"><img
                        src="{{asset('images/univlablogo2copy.svg')}}"
                        height="50"

                        alt="Logo"
                        loading="lazy"
                      /> </a>
                    <h1 style="font-family: Raleway , 'Montserrat';">Hello Friend !</h1>
                    <p>Please provide the</br> informations to register</br> your account</p>
                    <p >Already have an account! Sign in</p>
                    <button class="signIn" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 style="font-family: Raleway , 'Montserrat';">Welcome Back!</h1>
                    <p>Please sign into your</br> account with the given</br> details to continue</p>
                    <p >New here? create a new account</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>

        </div>
    </div>



    <!-- js code -->
    <script src="{{asset('js/script_landing.js')}}">

    </script>

</body>
</html>
