<?php
require "../db/dbBroker.php";
require "../models/User.php";

session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $user = new User(1, "Andrej", $email, $pass);

    $odg = User::loginUser($user, $conn);

    if ($odg->num_rows == 1) {
        $_SESSION['user_id'] = $user->getId();
        header('Location: landing.php');
        exit();
    } else {
        echo '<script>
        alert("Invalid credentials !");
        </script>';
    }
}





?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login page</title>
</head>

<body>

    <section class="vh-100" style="background-color:#5F021F;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">

                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Sign in</h3>
                            <form method="POST" action="" id="loginForm">
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                </div>


                                <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button>



                                <hr class="my-4">

                            </form>
                            <h4 class="mb-4">No account? Register:</h4>
                            <button class="btn btn-primary btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign up</button>
                        </div>
                    </div>
                </div>
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
                            <h3 class="mb-5">Sign up</h3>
                            <form method="POST" action="" id="registerForm">
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" id="typeNameX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typeNameX-2">First And Last Name</label>
                                </div>


                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" name="adress" id="typeAdressX-2" class="form-control form-control-lg" required />
                                    <label class="form-label" for="typeAdressX-2">Adress</label>
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



    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>