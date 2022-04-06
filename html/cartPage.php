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
    <title>Shopping Cart</title>
</head>

<body>

    <?php
    include "header.php";
    if (!isset($_SESSION)) {
        session_start();
    }

    ?>

    <section class="main">

        <section class="h-100" style="background-color: #eee;">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">


                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="fw-normal mb-0 text-black" style="font-family: 'Oswald', sans-serif;">Shopping Cart</h3>

                        </div>
                        <?php

                        $res = Cart::getAllById($_SESSION['userID'], $conn);
                        $sum = 0;
                        while ($row = $res->fetch_array()) {

                            if ($res->num_rows != 0) {

                                $product = Product::getById($row['product_id'], $conn);
                                $sum += $product->getPrice();
                        ?>
                                <form method="POST" action="" id="addTransactionForm">
                                    <div class=" card rounded-3 mb-4">
                                        <div class="card-body p-4">
                                            <div class="row d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="<?= $product->getImage() ?>" class="img-fluid rounded-3" alt="<?= $product->getName() ?> image">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <p class="lead fw-normal mb-2"><?= $product->getName() ?></p>

                                                </div>

                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h5 class="mb-0"><?= $product->getPrice() ?> RSD</h5>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-danger" id="submitDeleteCart" onclick="deleteFromCart(<?php echo $product->getId() ?>)"><i class="bi bi-trash3"></i></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php

                            }
                        }
                            ?>
                            <div class="card">
                                <div class="card-body d-flex flex-row">
                                    <div class="d-flex flex-fill mt-3 mb-1">
                                        <h5 class="mb-0">Amount:</h5>
                                        <span class="amount ms-3">
                                            <h5 id="amount" class="text-dark"><?= $sum ?> RSD</h5>
                                        </span>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block btn-lg float-right" id="checkout">Checkout</button>
                                </div>
                            </div>
        </section>

    </section>

    <?php
    include "footer.php";
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function deleteFromCart(id) {
            $.ajax({
                type: "POST",
                data: {
                    prodID: id,
                },
                success: function(data) {
                    console.log("Success");
                    location.reload();
                }
            });
        };
    </script>

    <?php
    if (isset($_POST['prodID'])) {
        Cart::removeFromCart($_SESSION['userID'], $_POST['prodID'], $conn);
    }
    ?>

</body>

</html>