<?php
require "../db/dbBroker.php";
require "../models/User.php";
require "../models/Cart.php";
require "../models/Product.php";


if (!isset($_SESSION)) {
    session_start();
}

?>


<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="landing.php">Nice With Spice</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-chevron-double-down"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav m-auto my-2 my-lg-0">
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
                <a class="nav-link active" href="cartPage.php">
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
                        <li><a class=" dropdown-item" href="index.php" onclick="logOut(<?php echo $_SESSION['userID'] ?>)">Log out</a></li>
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
                                <input type="text" name="adress" id="typeNameX-2" class="form-control form-control-lg" required />
                                <label class="form-label" for="typeNameX-2">Adress</label>
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
                                <input type="password" name="retype" id="typePasswordX-2" class="form-control form-control-lg" required />
                                <label class="form-label" for="typePasswordX-2">Retype Password</label>
                            </div>


                            <button class="btn btn-primary btn-lg btn-block" name="submitUpdateAccount" type="submit">Confirm</button>
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
                                <input type="password" name="delPassword" id="typePasswordX-2" class="form-control form-control-lg" required />
                                <label class="form-label" for=" typePasswordX-2">Password</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="delRetype" id="typePasswordX-2" class="form-control form-control-lg" required />
                                <label class="form-label" for=" typePasswordX-2">Retype Password</label>
                            </div>


                            <button class="btn btn-danger btn-lg btn-block" name="deleteSubmit" type="submit">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    function logOut(id) {
        $.ajax({
            type: "POST",
            data: {
                logOut: id,
            },
            success: function(data) {
                console.log(logOut);
                console.log("Success");

            }
        });
    };
</script>

<?php
if (isset($_POST['logOut'])) {
    Cart::deleteFromCartID($_SESSION['userID'], $conn);
    session_destroy();
    header('location:index.php');
}

if (isset($_POST['submitUpdateAccount'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $password = $_POST['password'];
    $retype = $_POST['retype'];
    if ($password === $retype) {
        $user = new User($_SESSION['userID'], $name, $email, $password, $adress);
        $user->updateUser($user, $conn);
        echo '<script>
    alert("Update successful !");
    </script>';
    } else {
        echo '<script>
    alert("Passwords do not match !");
    </script>';
    }
}

if (isset($_POST['deleteSubmit'])) {
    $password = $_POST['delPassword'];
    $retype = $_POST['delRetype'];
    if ($password == $retype) {
        Cart::deleteFromCartID($_SESSION['userID'], $conn);
        User::deleteUser($_SESSION['userID'], $conn);

        session_destroy();
        header('location:index.php');
    } else {
        echo '<script>
        alert("Passwords do not match !");
        </script>';
    }
}

?>