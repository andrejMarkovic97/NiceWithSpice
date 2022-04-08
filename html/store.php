<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:ital@1&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/main.js"></script>

</head>

<body>


    <?php
    include "header.php";

    $pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && ($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache');
    if ($pageRefreshed == 1) {
        $_SESSION['search'] = 0;
    }
    if (!isset($_SESSION)) {
        session_start();
    }


    if ($_SESSION['sort'] == 0 && $_SESSION['search'] == 0) {
        $_SESSION['products'] =  Product::getAllProducts($conn);
    }

    if ($_SESSION['search'] != 0) {
        $filter = $_SESSION['search'];
        $prod = Product::searchProducts($filter, $conn);
        if (sizeof($prod) > 0) {
            $_SESSION['products'] = $prod;
        } else {

            echo '<script>
                alert("No such product !");
                </script>';
        }
    }




    $products = $_SESSION['products'];



    if (sizeof($products) === 0) {
        echo "NO PRODUCTS!";
        die();
    }
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

        <div class="buttons">
            <span class="dropdown m-0">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    Sort
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">

                    <li><button class="dropdown-item sortButton" name="ASC" id="sortAscending" type="submit" value="asc">Price ascending</button></li>
                    <li><button class=" dropdown-item sortButton" name="DESC" id="sortDescending" type="submit" value="desc">Price descending</button></li>


                </ul>



            </span>
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addItem">Add item</button>

        </div>
        <div class="modal fade" id="addItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Add item</h3>
                            <form method="POST" action="" id="addItemForm" enctype="multipart/form-data">
                                <div class="form-outline mb-4">
                                    <input type="text" name="itemName" id="itemName" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typeNameX-2">Item name</label>
                                </div>


                                <div class="form-outline mb-4">
                                    <input type="number" step="any" name="price" id="itemPrice" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typeNumber">Price</label>
                                </div>


                                <div class="form-outline mb-4">
                                    <input type="file" name="image" id="itemImage" class="form-control form-control-lg" accept=".jpg, .png, .jpeg" required>
                                    <label for="itemImage">Insert product image</label>


                                </div>

                                <button class="btn btn-primary btn-lg btn-block" name="AddItemSubmit" type="submit">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <section style="background-color: #eee;">
            <div class="container py-5">
                <?php

                $count = 0;
                foreach ($products as $product) {
                    if ($count % 3 === 0) {

                ?>
                        <div class="row">


                        <?php } ?>
                        <!-- CLOSING FIRST IF BRACKET -->

                        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                            <div class="card">


                                <img src="<?= $product->getImage() ?>" class="card-img-top" alt="<?= $product->getName() ?> image" />
                                <div class="card-body">

                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0"><?= $product->getName() ?></h5>
                                        <h5 class="text-dark mb-0"><?= $product->getPrice() ?> RSD</h5>
                                    </div>

                                    <div class="d-flex justify-content-between mb-2">
                                        <form action="" method="POST" class="addToCartForm">
                                            <input type="hidden" name="product_id" value="<?= $product->getId() ?>">

                                            <button type="submit" name="addToCart" id="addCart" class="btn btn-primary">Add to cart</button>
                                        </form>


                                        <button type="button" name="deleteItem" onclick="deleteProduct(<?php echo $product->getId() ?>)" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteItem">Delete item</button>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php $count++;
                        if ($count % 3 === 0) { ?>
                        </div>
                <?php }
                    }


                ?>
                <!-- CLOSING SECOND IF BRACKET AND WHILE -->

        </section>


    </section>



    <?php
    include "footer.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $('.sortButton').click(function(e) {
            e.preventDefault();
            var val = $(this).val();

            $.ajax({

                type: "GET",
                data: {
                    filter: val,
                },
                success: function(data) {
                    console.log("Success");
                    location.reload();
                }

            });
        });
    </script>


</body>

</html>
<?php
if (isset($_POST['AddItemSubmit'])) {
    $name = $_POST['itemName'];
    $price = $_POST['price'];

    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp_image, "../img/$image");

    $prod = new Product(0, $name, $price, "../img/" . $image);
    $prod->createProduct($prod, $conn);
}


if (isset($_POST['addToCart'])) {
    Cart::addToCart($_SESSION['userID'], $_POST['product_id'], $conn);
    echo '<script>alert("Product added to cart !")</script>';
?>

<?php
}

if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
    $_SESSION['sort'] = 1;
    $_SESSION['products'] = Product::getAllPriceSorted($conn, $filter);
}



?>