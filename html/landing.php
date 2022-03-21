<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@1&display=swap" rel="stylesheet">
    <title>Home page</title>
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
                            <li><a class="dropdown-item" href="#">Update account</a></li>
                            <li><a class="dropdown-item" href="#">Delete account</a></li>
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
    </nav>
    </nav>

    <section class="landing-main">
        <div class="container py-5">
            <div class="row py-4">
                <div class="col-lg-7 pt-5 text-center">
                    <h1 class="landing-h1">The plural of spouse is spice</h1>
                    <div class="btnbuylp">
                        <a href="store.php">
                            <button class="btnlp mt-3">Buy now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class=" footer" id="footer">

        <footer class="text-center text-lg-start bg-light text-muted">

            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">


            </section>

            <section class="">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>