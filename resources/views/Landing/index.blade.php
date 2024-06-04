<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <title>Web UpSign | Home</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-abc123..." crossorigin="anonymous" />

</head>

<body>
  <!-- header section -->
  <div class="container">
    <!-- Navbar -->
    <nav class="navbar mt-2 navbar-expand-xl navbar-light bg-light">

      <!-- logo brand -->
      <div class="mt-2">
        <a class="navbar-brand" href="#">
          <img src="assets/Vector.png" alt="" width="30" height="30">
          <span class="navbar-brand mb-0 h1 " style="font-size: 2rem; font-weight: 650;">UpSign</span>
        </a>
      </div>
      <!-- end of logo brand -->

      <!-- nav -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#">Billboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Community</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Progress</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ebook</a>
          </li>
        </ul>
      </div>
      <!-- end of nav -->

      <!-- button getstarted -->
      <a href="{{route('registerForm')}}"><button type="button" class="btn btn-dark btn-lg rounded-lg">Get Started</button></a>
    </nav>
    <!-- end of Navbar -->

    <!-- Header content -->
    <header class="header row mt-3">
      <div class="col mb-3">
        <div class="content">
          <h1><span>EMPOWERING YOUR PROJECT</span><br />POTENTIAL</h1>

          <div class="mt-5">
            <form class="form-inline my-2 my-lg-0 ">
              <input class="form-control mr-sm-2" id="search-bar" width="300" type="search" aria-label="Search">
              <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div>

          <!-- button getstarted -->
          <button type="button" class="btn mt-3 btn-dark btn-lg rounded-lg">Get Started</button>
        </div>
      </div>

      <!-- image header -->
      <div class="col mb-3">
        <div class="image">
          <span class="image__bg"></span>
          <img src="assets/Illustration.png" alt="header image" class="img-fluid" />
          <div class="image__content image__content__1">
            <span><i class="ri-user-3-line"></i></span>
            <div class="details">
              <h4>1520+</h4>
              <p>Active Clients</p>
            </div>
          </div>
          <div class="image__content image__content__2">
            <ul>
              <li>
                <span><i class="ri-check-line"></i></span>
                Get 20% off on every 1st month
              </li>
              <li>
                <span><i class="ri-check-line"></i></span>
                Expert Doctors
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end image header -->

    </header>
    <!-- end of Header content -->

    <!-- service section -->
    <div class="row row-cols-1 row-cols-md-2 mt-5 mb-5">
      <!-- card progress tracking -->
      <div class="col mb-4">
        <div class="card" id="card" style="background-color: #F3F3F3;">
          <div class="row mt-1">
            <div class="col">
              <div class="card-body  w-100 h-100">
                <h5 class="card-title mb-4" style="background-color: #B9FF66; display: inline-block; font-size: 25px;">
                  Progress<br>Tracking</h5>
                <div class="mt-5">
                  <a href="#" class="text-decoration-none"><span class="align-self-end text-dark "><i
                        class="bi bi-arrow-up-right-circle-fill"></i> Learn more</span></a>
                </div>
              </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center my-3" style="width: 100%;"><img
                src="assets/tokyo-magnifier-web-search-with-elements 2.png" class="card-img-top" alt="..." width="210">
            </div>
          </div>
        </div>
      </div>
      <!-- end of progress tracking -->
      <!-- card Task manager -->
      <div class="col mb-4">
        <div class="card" id="card" style="background-color: #2CF7F7;">
          <div class="row mt-1">
            <div class="col">
              <div class="card-body  w-100 h-100">
                <h5 class="card-title mb-4" style="background-color: #ffff; display: inline-block; font-size: 25px;">
                  Task<br>Manager</h5>
                <div class="mt-5">
                  <a href="#" class="text-decoration-none"><span class="align-self-end text-dark "><i
                        class="bi bi-arrow-up-right-circle-fill"></i> Learn more</span></a>
                </div>
              </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center my-3" style="width: 100%;"><img
                src="assets/tokyo-selecting-a-value-in-the-browser-window 1.png" class="card-img-top" alt="..."
                width="210"></div>
          </div>
        </div>
      </div>
      <!-- end of Task manager -->
      <!-- card team chat -->
      <div class="col mb-4">
        <div class="card" id="card" style="background-color: #191A23;">
          <div class="row mt-1">
            <div class="col">
              <div class="card-body  w-100 h-100">
                <h5 class="card-title mb-4" style="background-color: #fff; display: inline-block; font-size: 25px;">
                  Team<br>Chat</h5>
                <div class="mt-5">
                  <a href="#" class="text-decoration-none"><span class="align-self-end text-light "><i
                        class="bi bi-arrow-up-right-circle-fill"></i> Learn more</span></a>
                </div>
              </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center my-2" "><img src="
              assets/tokyo-browser-window-with-emoticon-likes-and-stars-around 2.png" class="card-img-top" alt="..."
              style="height: 180px; width: auto;"></div>
          </div>
        </div>
        <!-- end of team chat -->
        <!-- card comunity chat -->
      </div>
      <div class="col mb-4">
        <div class="card bg-light" id="card" style="background-color: #F3F3F3;">
          <div class="row mt-1">
            <div class="col">
              <div class="card-body  w-100 h-100">
                <h5 class="card-title mb-4" style="background-color: #B9FF66; display: inline-block; font-size: 25px;">
                  Comunity<br>Chat</h5>
                <div class="mt-5">
                  <a href="#" class="text-decoration-none"><span class="align-self-end text-dark "><i
                        class="bi bi-arrow-up-right-circle-fill"></i> Learn more</span></a>
                </div>
              </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center my-3"><img
                src="assets/tokyo-sending-messages-from-one-place-to-another 1.png" class="card-img-top" alt="..."
                style="width: 180px;"></div>
          </div>
        </div>
      </div>
      <!-- end of comunity chat -->
      <!-- card billboard -->
      <div class="col mb-4">
        <div class="card " id="card" style="background-color: #2CF7F7;">
          <div class="row mt-1">
            <div class="col">
              <div class="card-body  w-100 h-100">
                <h5 class="card-title mb-5" style="background-color: #ffff; display: inline-block; font-size: 25px;">
                  Billboard</h5>
                <div class="mt-5">
                  <a href="#" class="text-decoration-none"><span class="align-self-end text-dark "><i
                        class="bi bi-arrow-up-right-circle-fill"></i> Learn more</span></a>
                </div>
              </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center my-3" style="width: 100%;"><img
                src="assets/tokyo-many-browser-windows-with-different-information 1.png" class="card-img-top" alt="..."
                style="width: 180px;"></div>
          </div>
        </div>
      </div>
      <!-- end of billboard -->
      <!-- card ebook -->
      <div class="col mb-4">
        <div class="card" id="card" style="background-color: #191A23;">
          <div class="row mt-1">
            <div class="col">
              <div class="card-body  w-100 h-100">
                <h5 class="card-title mb-5" style="background-color: #B9FF66; display: inline-block; font-size: 25px;">
                  Ebook</h5>
                <div class="mt-5">
                  <a href="#" class="text-decoration-none"><span class="align-self-end text-light "><i
                        class="bi bi-arrow-up-right-circle-fill"></i> Learn more</span></a>
                </div>
              </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center my-3" style="width: 100%;"><img
                src="assets/tokyo-volumetric-analytics-of-different-types-in-web-browsers 2.png" class="card-img-top"
                alt="..." style="width: 200px;"></div>
          </div>
        </div>
      </div>
      <!-- end of ebook -->
    </div>
    <!-- end of section service -->
    <!-- section CTA -->
    <div class="card mb-5 mt-3" style="max-width: 100%;background-color: #F3F3F3; border-radius: 40px;">
      <div class="row d-flex inline-block g-4 no-gutters px-4">
        <div class="col my-2 ml-2">
          <!-- deskripsi UpSign -->
          <div class="card-body px-3 py-3 ">
            <h2 class="card-title font-weight-bold" style="font-family: 50px;">Apa Itu UpSign?</h2>
            <p class="card-text">UpSign is a project assignment platform for students, allowing them to showcase the
              projects they have created and helping students find projects while earning profit.</p>
            <button type="button" class="btn btn-dark rounded-lg">Asign Your Project</button>
          </div>
        </div>

        <!-- gambar ilusterasi 2 -->
        <div class="col">
          <img src="assets/Illustration2.png" alt="..."
            style=" position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 220px;">
        </div>
      </div>
    </div>
    <!-- end of section CTA -->
    <!-- section testimonial -->
    <div class="mt-3 mb- 4h-100 w-100">
      <!-- Judul -->
      <div class="mt-5"><span class="font-weight-bold"
          style="background-color: #B9FF66; font-size: 1.5em;">Testimonial</span></div>
      <!-- Carousel -->
      <div id="mycarousel" class="carousel slide mt-5 w-100 h-100" data-ride="carousel">
        <ol class="carousel-indicators ">
          <li data-target="#mycarousel" data-slide-to="0" class="active" style="color: #191A23;"></li>
          <li data-target="#mycarousel" data-slide-to="1" style="color: #191A23;"></li>
          <li data-target="#mycarousel" data-slide-to="2" style="color: #191A23;"></li>
          <li data-target="#mycarousel" data-slide-to="3" style="color: #191A23;"></li>
          <li data-target="#mycarousel" data-slide-to="4" style="color: #191A23;"></li>
        </ol>
        <div class="carousel-inner w-100 h-100" style="border-radius: 20px;">
          <div class="carousel-item active" data-interval="10000">
            <img src="assets/carousel1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="10000">
            <img src="assets/carousel2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="10000">
            <img src="assets/carousel3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="10000">
            <img src="assets/carousel4.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-interval="10000">
            <img src="assets/carousel5.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#mycarousel" data-slide="prev"
          id="control-prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#mycarousel" data-slide="next"
          id="control-next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    </div>
    <!-- end of section testimonial -->
    <section>

    </section>
    <!-- section contact -->
    <div class="mt-3">
      <!-- Judul -->
      <div class="mt-5"><span class="font-weight-bold" style="background-color: #B9FF66; font-size: 1.5em;">Contact
          Me</span>
      </div>

      <!-- form contact -->
      <div class="row ml-1 mt-5 w-100 h-100 mb-5 " style="background-color: #F3F3F3; border-radius: 20px;">
        <div class="col py-5 px-5">
          <form>

            <!-- radio -->
            <div class="mb-4">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Say Hi</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Get a Quote</label>
              </div>
            </div>

            <!-- input box -->
            <div class="form-group ">
              <label for="exampleFormControlInput1">Nama</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email*</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message*</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="5"></textarea>
            </div>

            <!-- button getstarted -->
            <button type="button" class="btn btn-dark rounded-lg mt-2 w-100">Send Message</button>
          </form>
        </div>
        <div class="col d-flex align-items-start flex-column bd-highlight w-100 my-5" id="container-contact-image">
          <div class="ml-auto p-2 bd-highlight w-100">
            <img src="assets/Illustration4.png" class="image-contact" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- end section contact -->

    <!-- section footer -->
    <div class="mt-5 w-100">
      <div class="p-3 w-100" style="background-color: #191A23; border-top-left-radius: 20px; border-top-right-radius: 20px;">
        <!-- footer navbar -->
        <nav class="navbar navbar-expand-xl navbar-light d-flex justify-content-between w-100 ">

          <!-- logo brand -->
          <div>
            <a class="navbar-brand" href="#">
              <img src="assets/Footer.png" alt="" width="30" height="30">
              <span class="navbar-brand mb-0 h1 " style="font-size: 2rem; font-weight: 650; color: #fff;">UpSign</span>
            </a>
          </div>
          <!-- end of logo brand -->

          <!-- nav -->
          <div class="collapse navbar-collapse justify-content-center " id="navbarTogglerDemo02">
            <ul class="nav justify-content-between">
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff;">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff;">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff;">Use Cases</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff;">Pricing </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff;">Blog</a>
              </li>
            </ul>
          </div>
          <!-- end of nav -->

          <!-- button getstarted -->
          <a data-mdb-ripple-init class="btn btn-primary btn-sm rounded-circle btn-floating"
            style="background-color: #fff" href="#" role="button"><i class="fab fa-linkedin"
              style="color: #191A23;"></i></a>
          <a data-mdb-ripple-init class="btn btn-primary btn-sm rounded-circle btn-floating"
            style="background-color: #fff" href="#" role="button"><i class="fab fa-facebook"
              style="color: #191A23;"></i></a>
          <a data-mdb-ripple-init class="btn btn-primary btn-sm rounded-circle btn-floating"
            style="background-color: #fff" href="#" role="button"><i class="fab fa-twitter"
              style="color: #191A23;"></i></a>
        </nav>
        <!-- end of footer navbar -->
        <!-- contact us -->
        <div class="row p-3">
          <div class="col-sm-4">
            <div class="mt-3"><span class="font-weight-bold"
                style="background-color: #B9FF66; font-size: 1em;">Contact us:</span>
            </div>
            <div class="mt-3 text-light">
              <p>Email: Info@gmail.com</p>
              <p>Phone: 0812345678</p>
              <p>Address: Jl. Sengkaling raya,
                Kab. Malang, Jawa Timur</p>
            </div>
          </div>
          <div class="col-sm-8 py-3 d-flex justify-content-center">
            <form class="form-inline py-5 justify-content-center" style="background-color: #292A32; width: 500px; gap: 30px; border-radius: 16px;">
              <div class="form-group mb-2 input-group-lg ">
                <label for="inputEmail2" class="sr-only">Email</label>
                <input type="Email" class="form-control" id="inputEmail2" placeholder="Email" style="border: 2px solid #fff; background-color: #292A32; width: 220px;">
              </div>
              <button type="submit" class="btn btn-primary btn-lg mb-2" style="background-color: #B9FF66; color: #191A23;">Subscribe to news</button>
            </form>
          </div>
        </div>
        <!-- end of contact us -->
        <!-- line -->
        <div class="px-3 w-100" >
          <svg width="100%" height="2">
            <line x1="0" y1="1" x2="100%" y2="1" style="stroke: #fff; stroke-width: 2;" />
          </svg>
        </div>
        <!-- end of line -->
        <!-- term end condition -->
        <div class="px-3 py-3 d-flex justify-content-center">
          <p style="color: #fff;">© 2023 UpSign. All Rights Reserved. <a href="">Privacy Policy</a></p>
        </div>
      </div>
    </div>
    <!-- end section footer -->
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