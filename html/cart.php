<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@1&display=swap" rel="stylesheet">
    <title>Cart</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Nice With Spice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-chevron-double-down"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href='landing.php'>Home</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link" href="store.php">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">
                            Contact us
                        </a>

                    </li>

                </ul>
                <span class="cart">
                    <a class="nav-link active" href="cart.php">
                        <i class="bi bi-cart3"></i>
                    </a>
                </span>

                <div class="dropdown">
                    <span class="cart">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;">
                            <i class="bi bi-person-circle bi-4x"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Update account</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteAccount">Delete account</a></li>
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                    </span>

                </div>



                <form class="d-flex">

                    <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Update account info</h3>
                            <form method="POST" action="">
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" id="typeNameX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typeNameX-2">First And Last Name</label>
                                </div>


                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typePasswordX-2">Retype Password</label>
                                </div>


                                <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteAccount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Delete account</h3>
                            <h5 class="mb-5">Are you sure?</h5>
                            <form method="POST" action="">

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typePasswordX-2">Retype Password</label>
                                </div>


                                <button class="btn btn-danger btn-lg btn-block" name="submit" type="submit">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section class="main">

        <section class="h-100" style="background-color: #eee;">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="fw-normal mb-0 text-black" style="font-family: 'Oswald', sans-serif;">Shopping Cart</h3>

                        </div>

                        <div class=" card rounded-3 mb-4">
                            <div class="card-body p-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="./img/chilli.jpg" class="img-fluid rounded-3" alt="Chilli">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <p class="lead fw-normal mb-2">Chilli</p>

                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>

                                        <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        <h5 class="mb-0">100 RSD</h5>
                                    </div>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <a href="#!" class="text-danger"><i class="bi bi-trash3"></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-4">
                            <div class="card-body p-4 d-flex flex-row">
                                <div class="form-outline flex-fill">
                                    <label class="form-label" for="form1">Discount code</label>
                                    <input type="text" id="form1" class="form-control form-control-lg" />

                                </div>
                                <button type="button" class="btn btn-outline-primary btn-lg ms-3">Apply</button>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body d-flex flex-row">
                                <div class="d-flex flex-fill mt-3 mb-1">
                                    <h5 class="mb-0">Amount:</h5>
                                    <span class="amount ms-3">
                                        <h5 id="amount" class="text-dark"> 100 RSD</h5>
                                    </span>

                                </div>


                                <button type="button" class="btn btn-primary btn-block btn-lg float-right ">Proceed to Pay</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </section>

    <section class="footer" id="footer">
        <div class="container text-center text-md-start mt-5">

            <div class="row mt-3">

                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Nice With Spice
                    </h6>
                    <p>
                        Geared toward making cooking a more enjoyable experience for you!
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Social media
                    </h6>
                    <p>
                        <a href="#!" class="text-reset"><i class="bi bi-instagram"> Instagram</i></a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset"><i class="bi bi-facebook"> Facebook</i></a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset"><i class="bi bi-twitter"> Twitter</i></a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset"><i class="bi bi-linkedin"> LinkedIn</i></a>
                    </p>

                </div>



                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>



                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p>Belgrade, Vojvode Stepe 355</p>
                    <p>nicewithspice@gmail.com</p>
                    <p>+ 381 11 123 456</p>
                    <p>+381 61 123 6789</p>

                </div>

            </div>

        </div>
    </section>



    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright:
        <p>Andrej Marković</p>
    </div>

    </footer>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>