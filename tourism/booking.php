<?php
session_start();
include('config.php');
if (isset($_POST['delete'])) {
    $query0 = "SELECT max(booking_id) FROM booking;";
    $result0 = mysqli_query($con, $query0);
    while ($row = mysqli_fetch_array($result0)) {
        $booking = $row[0];
    }
    $query4 = "SELECT Customer_id FROM booking where Booking_id = '$booking'; ";
    $result4 = mysqli_query($con, $query4);
    while ($row = mysqli_fetch_array($result4)) {
        $customer_id = $row[0];
    }
    $query5 = "SELECT Package_id FROM booking where Booking_id = '$booking'; ";
    $result5 = mysqli_query($con, $query5);
    while ($row = mysqli_fetch_array($result5)) {
        $package_id = $row[0];
    }
    $query1 = "DELETE FROM booking_transportation where booking_id = '$booking';";
    $result1 = mysqli_query($con, $query1);
    $query2 = "DELETE FROM booking_hotel where booking_id = '$booking'";
    $result2 = mysqli_query($con, $query2);
    $query3 = "DELETE FROM customer_booking where booking_id = '$booking';";
    $result3 = mysqli_query($con, $query3);
    $query = "DELETE FROM booking where booking_id = '$booking';";
    $result = mysqli_query($con, $query);
    $query6 = "DELETE FROM customer_package where Customer_id = '$customer_id' and Package_id = '$package_id';";
    $result6 = mysqli_query($con, $query6);

    echo '<script>alert("Your booking was deleted!")</script>';
    echo "<script>location='booking.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>🆃🅱 Travel Bug | Booking</title>
    <link rel="stylesheet" href="style.css" Type="text/css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    <div>
        <img src="images\300x600(3).jpg" class="floatRight">
    </div>

    <div>
        <img src="images\300x600(3).jpg" class="floatLeft">
    </div>

    <center>
        <div>
            <strong><u>
                    <h1>𝔹𝕠𝕠𝕜𝕚𝕟𝕘</h1>
                </u></strong>
        </div>
    </center>


    <div class="row">
        <u>
            <h3 class="mb-3">Package Name</h3>
        </u>

        <form action="book.php" method="POST">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="package" id="murree" value="1">
                <label class="form-check-label" for="exampleRadios1">
                    <h5>Murree Package</h5>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="package" id="skardu" value="2">
                <label class="form-check-label" for="exampleRadios2">
                    <h5>Skardu Package</h5>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="package" id="naran" value="3">
                <label class="form-check-label" for="exampleRadios1">
                    <h5>Naran Package</h5>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="package" id="hunza" value="4">
                <label class="form-check-label" for="exampleRadios2">
                    <h5>Hunza Package</h5>
                </label>
            </div>
            <br>
            <u>
                <h3 class="mb-3">Transportation</h3>
            </u>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="transport" id="corolla" value="1">
                <label class="form-check-label" for="exampleRadios1">
                    <h5>Toyota Corolla</h5>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="transport" id="hilux" value="2">
                <label class="form-check-label" for="exampleRadios2">
                    <h5>Toyota Hilux</h5>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="transport" id="hiace" value="3">
                <label class="form-check-label" for="exampleRadios1">
                    <h5>Toyota Hiace</h5>
                </label>
            </div>
            <br>
            <script type="text/javascript">
                function fn2() {
                    var murree = $("input[id='murree']:checked").val();
                    var skardu = $("input[id='skardu']:checked").val();
                    var naran = $("input[id='naran']:checked").val();
                    var hunza = $("input[id='hunza']:checked").val();
                    var people = document.getElementById("person").value;
                    var corolla = $("input[id='corolla']:checked").val();
                    var hilux = $("input[id='hilux']:checked").val();
                    var hiace = $("input[id='hiace']:checked").val();
                    if (skardu) {
                        if (people > 2) {
                            var string = "Hotel Name: Hotel Bliss"
                            var price = people * 15000
                            var package = 15000
                            var place = "Skardu Package"
                            document.getElementById('output4').innerHTML = string
                            document.getElementById('output5').innerHTML = place
                        }
                    } else if (murree) {
                        if (people == 2) {
                            var string = "Hotel Name: Crown Plaza"
                            var price = 20000
                            var package = 10000
                            var place = "Murree Package"
                            document.getElementById('output4').innerHTML = string
                            document.getElementById('output5').innerHTML = place
                        }
                    } else if (naran) {
                        if (people > 2) {
                            var string = "Hotel Name: Spotlight Hotel"
                            var price = people * 13000
                            var package = 13000
                            var place = "Naran Package"
                            document.getElementById('output4').innerHTML = string
                            document.getElementById('output5').innerHTML = place
                        }
                    } else if (hunza) {
                        if (people > 2) {
                            var string = "Hotel Name: Royal Galaxy"
                            var price = people * 15000
                            var package = 15000
                            var place = "Hunza Package"
                            document.getElementById('output4').innerHTML = string
                            document.getElementById('output5').innerHTML = place
                        }
                    } else {
                        var package = null
                        var price = null
                        alert("Select one package")

                    }
                    if (people == 0) {
                        alert("Enter valid number of people");
                    }

                    if (corolla) {
                        var transport = "Transport: Toyota Corolla"
                    } else if (hilux) {
                        var transport = "Transport: Toyota Hilux"
                    } else if (hiace) {
                        var transport = "Transport: Toyota Hiace"
                    } else {
                        var transport = null
                        alert("Select one transport")
                    }
                    if (people != 2 && murree) {
                        alert("Only 2 people allowed as it is a couple package")
                    }
                    if (people < 3 && (skardu || naran || hunza)) {
                        alert("More than 2 people allowed as it is a family package")
                    }
                    if (people > 2 && (package == null)) {
                        var people = null
                        var transport = "-------"
                        var string = "-------"
                        var place = "-------"
                        document.getElementById('output4').innerHTML = string
                        document.getElementById('output5').innerHTML = place
                    }
                    document.getElementById('output').innerHTML = price;
                    document.getElementById('output2').innerHTML = people;
                    document.getElementById('output3').innerHTML = package;
                    document.getElementById('output6').innerHTML = transport;

                }
            </script>


            <center>
                <label for="No of people">Total no of people:</label>
                <input type="number" id="person" name="person" value="0"><br>
            </center>
            <br>
            <center>
                <button type="submit" name="confirmbtn" onclick="fn2()" id="confirmbtn" class="btn btn-dark btnclick">Confirm</button>
                <p style="margin-bottom: 50px; "><strong>(Make sure to check all details before pressing this button)</strong></p>
            </center>
        </form>
        <br>
    </div>
    </div>
    <div class="card text-center">
        <div class="card-header">For all the Hodophiles out there</div>
        <div class="card-body">
            <h5 class="card-title">
                We travel not to escape life but for life not to escape us!
            </h5>
            <p class="card-text"></p>
            <a href="contact.php" class="btn btn-dark">Contact Us</a>
        </div>
        <div class="card-footer text-muted">
            © 2021 Travel Bug. All rights reserved.
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>