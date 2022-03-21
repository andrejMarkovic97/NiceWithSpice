<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@1&display=swap" rel="stylesheet">

</head>

<body>


    <?php
    include "header.php";
    ?>



    <section class="main">

        <div class="store-picture p-5 mb-3 text-center bg-image">

            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Spices & Herbs</h1>
                </div>
            </div>
        </div>
        </div>


        <div class="dropdown m-0">
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

        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">

                            <img src="/nicewithspice/img/all_purpose.jpg" class="card-img-top" alt="All purpose" />
                            <div class="card-body">

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">All purpose spice</h5>
                                    <h5 class="text-dark mb-0">150 RSD</h5>
                                </div>

                                <div class="d-flex justify-content-between mb-2">
                                    <button type="button" class="btn btn-outline-danger">Add to cart</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">

                            <img src="/nicewithspice/img/himalayan_salt.jpg" class="card-img-top" alt="Himalayan salt" />
                            <div class="card-body">

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Himalayan salt</h5>
                                    <h5 class="text-dark mb-0">300 RSD</h5>
                                </div>

                                <div class="d-flex justify-content-between mb-2">
                                    <button type="button" class="btn btn-outline-danger">Add to cart</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">

                            <img src="/nicewithspice/img/mixed_herbs.jpg" class="card-img-top" alt="Mixed herbs" />
                            <div class="card-body">

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Mixed herbs</h5>
                                    <h5 class="text-dark mb-0">99 RSD</h5>
                                </div>

                                <div class="d-flex justify-content-between mb-2">
                                    <button type="button" class="btn btn-outline-danger">Add to cart</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">

                            <img src="/nicewithspice/img/paprika.jpg" class="card-img-top" alt="Paprika" />
                            <div class="card-body">

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Paprika</h5>
                                    <h5 class="text-dark mb-0">100 RSD</h5>
                                </div>

                                <div class="d-flex justify-content-between mb-2">
                                    <button type="button" class="btn btn-outline-danger">Add to cart</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">

                            <img src="/nicewithspice/img/chilli.jpg" class="card-img-top" alt="Chilli" />
                            <div class="card-body">

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Chilli</h5>
                                    <h5 class="text-dark mb-0">100 RSD</h5>
                                </div>

                                <div class="d-flex justify-content-between mb-2">
                                    <button type="button" class="btn btn-outline-danger">Add to cart</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                        <div class="card">

                            <img src="/nicewithspice/img/rainbow_peppercorn.jpg" class="card-img-top" alt="Rainbow peppercorn" />
                            <div class="card-body">

                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Rainbow peppercorn</h5>
                                    <h5 class="text-dark mb-0">250 RSD</h5>
                                </div>

                                <div class="d-flex justify-content-between mb-2">
                                    <button type="button" class="btn btn-outline-danger">Add to cart</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </section>



    <?php
    include "footer.php";
    ?>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>