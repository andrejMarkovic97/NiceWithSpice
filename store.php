<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@1&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Nice With Spice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href='#'>Home</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link" href="#">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Contact us
                        </a>

                    </li>

                </ul>
                <span class="cart">
                    <a class="nav-link active" href="#">
                        <i class="bi bi-cart3"></i>
                    </a>
                </span>

                <form class="d-flex">

                    <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    </nav>

    <section class="main">

        <div class="store-picture p-5 text-center bg-image">

            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Spices & Herbs</h1>
                </div>
            </div>
        </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                Sort
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item" type="button">Price ascending</button></li>
                <li><button class="dropdown-item" type="button">Price descending</button></li>
                <li><button class="dropdown-item" type="button">Product title, A-Z</button></li>
                <li><button class="dropdown-item" type="button">Product title, Z-A</button></li>
            </ul>
        </div>
    </section>



    <section class="footer">

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