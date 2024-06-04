<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/signuppage.css')}}" />
  <title>Web UpSign | Sign Up</title>

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
        <img src="assets/Illustration.png" alt="" class="shadow-img img-fluid" style="width: 400px;">

      </div>
      <!-- sisi kanan -->
      <div class="col-6 bg-secondary full-height-col d-flex flex-column justify-content-center align-items-center">
        <div>

          <form class="d-flex justify-content-center flex-column align-items-center">
            <span class="mb-4 font-weight-bold text-light" style="font-size: 40px;">Sign Up</span>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <span class="text-light mb-4 w-100 text-left">Date of birthday</span>

            <div class="form-row mb-4">
              <div class="form-group-birth col-md-6">
                <input type="text" class="form-control" id="inputYear" placeholder="Year" maxlength="4" pattern="\d{4}"
                  inputmode="numeric">
              </div>
              <div class="form-group-birth col-md-3">
                <input type="text" class="form-control" id="inputMonth" placeholder="Month" maxlength="2"
                  pattern="\d{2}" inputmode="numeric">
              </div>
              <div class="form-group-birth col-md-3">
                <input type="text" class="form-control" id="inputDay" placeholder="Day" maxlength="2" pattern="\d{2}"
                  inputmode="numeric">
              </div>
            </div>
            <button type="submit" class="btn btn-dark mb-4" style="width: 400px;">Sign Up!</button>

            <span class="text-light">Already a member? <a href="" class="text-light">Log in ></a></span>

          </form>
          <div class="d-flex flex-columm">
            <div class="or-divider w-100">Or</div>
          </div>
          <div class="d-flex justify-content-center align-items-center " style="gap: 10px ;"">
            <a data-mdb-ripple-init class=" btn btn-primary btn-md rounded-circle btn-floating"
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
  <script>
    document.getElementById('inputYear').addEventListener('input', function (e) {
      let year = e.target.value;
      if (!/^\d{0,4}$/.test(year)) {
        e.target.value = year.slice(0, 4);
      }
    });

    document.getElementById('inputMonth').addEventListener('input', function (e) {
      let month = e.target.value;
      if (!/^\d{0,2}$/.test(month)) {
        e.target.value = month.slice(0, 2);
      }
      if (month > 12) {
        e.target.value = 12;
      }
    });

    document.getElementById('inputDay').addEventListener('input', function (e) {
      let day = e.target.value;
      if (!/^\d{0,2}$/.test(day)) {
        e.target.value = day.slice(0, 2);
      }
      if (day > 31) {
        e.target.value = 31;
      }
    });
  </script>
</body>

</html>