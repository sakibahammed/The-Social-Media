<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Social Media Login or Signup</title>
    <!--Animate CSS-->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


    <link
      rel="shortcut icon"
      href="../../image/The Social Media.png"
      type="image/x-icon"
    />

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="login.css" />
    <style>
      .roboto-medium {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
      }
    </style>

    <!--Css Bootstrap added-->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!--Font awesome icon-->

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
  </head>
  <body class="roboto-medium">
    <!--Login page header-->

    <!--Navbar-->

    <header>
      <section class="">
        <nav class="navbar navbar-light bg-light">
          <div
            class="container-fluid d-flex justify-content-around align-items-center"
          >
            <a class="navbar-brand" href="#">
              <!--Nav image-->
              <img
                src="../../image/Untitled_design-removebg-preview.png"
                alt=""
                width="80"
                class="d-inline-block align-text-top img-fluid"
              />
              <!--Nav text-->
            </a>
            <span
              class="fs-1 fw-bold"
              style="font-family: 'Times New Roman', Times, serif"
              >The Social
              <span style="font-style: italic; color: tomato" class=""
                >Media</span
              ></span
            >
          </div>
        </nav>
      </section>


      <section class="container">
        <p class="text-center fs-3 mt-5 animate__animated animate__backInDown">Connect, Share, Thrive: Introducing The Social media, Your New Social Networking App</p>
      </section>
    </header>
    <!--main part in login part-->



    <main >
     
       <div class="d-flex justify-content-center  align-items-center container-fluid mt-5 row">
        <div class="col-lg-2 col-12 p-3">
          <img width="w-100" class="img-fluid" src="../../image/header-pic.png" alt="">
        </div>
        <div class="col-lg-2 col-12 p-3">
          <div class="card mx-auto" style="width: 18rem;">
            
            <div class="card-body ">
              <form class="">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your Email">
                  <div class="mt-3" style="font-size: 10px;" id="emailHelp" class="form-text">We'll never share your email with anyone else except [FBI , Sheikh Hasina , East Germany and Kim Jung Un] Sorry We have to do this.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                
               <center> <button type="submit" id="login-btn" class=" btn btn-primary px-5" name="login">Log in</button></center>


                <hr>
                <center><div class="mt-3" style="font-size: 16px;" id="emailHelp" class="form-text">Don't have an Account Join now <span class="text-danger">!</span></div></center>
                <hr>
                <center>
                  <a href="sign_up.php">
                  <button type="button" class="btn btn-primary">
                  Create New Account
                </button>
              </a>
              </center>
              </form>
            </div>
          </div>
        </div>
       </div>

       
     

    </main>








    <!--Sign up modal-->

    <!-- Button trigger modal -->


<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary fw-bold h3 mx-auto animate__animated animate__backInUp" id="exampleModalLabel">Sign Up <span class="text-danger">!</span></h5>
        
      </div>
      <div class="modal-body">
        <form class="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">first Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your first Name" name="first_name" required="required">
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your last Name" name="last_name" required="required">
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your UserName" required="required" name="username">
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your birthday" required="required" name="user_birthday">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Email" required="required" name="user_email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter an amazing password" required="required" name="user_password">
          </div>
        

          <button type="button" name="signup" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Welcome To The Social Media
          </button>
          
        <?php
          include("insert_user.php");
        ?> -->




        </form>
      </div>
     
    </div>
  </div>
</div> 




<footer class="p-3 mt-5" style="background-color: black; ">
  <p class="text-center" style="color: azure;">All right Reserved</p>
</footer>

    

    <!--Bootstrap JS added-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>


    <script src="login.js"></script>
  </body>
</html>
