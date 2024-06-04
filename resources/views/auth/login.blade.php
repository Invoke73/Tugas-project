<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/loginpage.css')}}" />
  <title>Web UpSign | Login</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-abc123..." crossorigin="anonymous" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <div class="container-fluid full-screen-container">
    <div class="row h-100">
      <!-- sisi kiri -->
      <div class="col-6 bg-light full-height-col d-flex flex-column justify-content-center align-items-center ">
        <img src="assets/contact-image.png" alt=""
          class="shadow-img img-fluid" style="width: 400px;">
        <span class="mt-5 font-weight-bold" style="font-size: 40px;">WELLCOME</span>
      </div>
      <!-- sisi kanan -->
      <div class="col-6 bg-secondary full-height-col d-flex flex-column justify-content-center align-items-center">
        <div>
          <form class="d-flex justify-content-center flex-column align-items-center">
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-dark mb-4" style="width: 150px;">Log In</button>

            <span class="text-light">New to Instructables? <a href="" class="text-light">Sign Up ></a></span>
            <span class="text-light">Forget <a href="" class="text-light">Usernama/Password ></a></span>
          </form>
          <div class="d-flex flex-columm">
              <div class="or-divider w-100">Or</div>
          </div>
          <div class="d-flex justify-content-center align-items-center " style="gap: 10px ;"">
            <a data-mdb-ripple-init class="btn btn-primary btn-md rounded-circle btn-floating"
            style="background-color: #fff" href="#" role="button"><i class="fab fa-facebook"
              style="color: #191A23;"></i></a>
          <a data-mdb-ripple-init class="btn btn-primary btn-md rounded-circle btn-floating"
            style="background-color: #fff" href="#" role="button"><i class="fab fa-google"
              style="color: #191A23;"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- jQuery, Popper.js, and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
  </script>
</body>

</html>