<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <title>🆃🅱 Travel Bug | About Us</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">🆃🅱𝓣𝓻𝓪𝓿𝓮𝓵 𝓑𝓾𝓰</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Packages
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="murree_package.php">Murree Package</a></li>
              <li><a class="dropdown-item" href="skardu_package.php">Skardu Package</a></li>
              <li><a class="dropdown-item" href="naran_package.php">Naran Package</a></li>
              <li><a class="dropdown-item" href="hunza_package.php">Hunza Package</a></li>
            </ul>
          </li>
        </ul>

        <div class="mx-2">
          <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#LoginModal">
            Log In
          </button>
          <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#SignUpModal">
            Sign Up
          </button>
        </div>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['email'] ?>
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ChangePasswordModal">Change Password</button></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Login Modal -->
  <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">
            Log in to Travel Bug
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="connectl.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required />
              <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required />
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#SignUpModal">Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Sign Up Modal -->
  <div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="SignUpModalLabel">Sign Up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="connectsu.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required />
              <div id="emailHelp" class="form-text">
                We'll never share your email with anyone else.
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="cexampleInputPassword1" name="cpassword" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Contact Number</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="number" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alternate Number(optional)</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alternate_number" />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Address</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" required />
            </div>

            <button type="submit" class="btn btn-primary">
              Create Account
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#LoginModal">Already a member</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <!--Change Password Modal -->
  <div class="modal fade" id="ChangePasswordModal" tabindex="-1" aria-labelledby="ChangePasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ChangePasswordModalLabel">Change Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="change_password.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label">Old Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="oldpassword" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label">New Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="newpassword" required />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label">Confirm New Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="cnewpassword" required />
            </div>
            <button type="submit" class="btn btn-primary" name="changepassword">Change Password</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <center>
    <h1>
      <div class="p-3 mb-2 bg-dark text-white">𝔸𝕓𝕠𝕦𝕥 𝕌𝕤</div>
    </h1>
  </center>
  <style>
    h1 {
      margin-bottom: -8px;
      margin-top: -10px;
    }
  </style>

  <center>
    <img src="images\office.jpg" class="img-fluid" alt="..." />
  </center>

  <br />
  <h4>
    <div class="bg-dark text-light">
      Travel bug is a well reputed and trusted franchise in the field of
      travel and tourism. This company has been serving its customers with the
      finest packages alongside worldclass facilities for over 25 years now.
      Our company is offering packages to multiple destinations in Pakistan.
      Pakistan is a diverse country blessed with one of the most beautiful
      landscapes. Our goal is to promote the tourism industry of Pakistan and
      make Pakistan the number one tourist destination of the world. We will
      try to take Pakistan's tourism industry to its full potential because we
      believe tourism is the biggest industry in the world.
    </div>
  </h4>
  <style>
    h4 {
      margin-top: -24px;
      margin-bottom: 0px;
      border-top-style: solid;
      border-top-width: 0px;
      border-bottom-style: solid;
      padding-bottom: 0px;
    }
  </style>

  <div class="card text-center">
    <div class="card-header">For all the Hodophiles out there</div>
    <div class="card-body">
      <h5 class="card-title">
        We travel not to escape life but for life not to escape us!
      </h5>
      <p class="card-text"></p>
      <a href="contact.php" class="btn btn-dark">Contact Us</a>
    </div>
    <div class="card-footer text-muted">© 2021 Travel Bug. All rights reserved.</div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>