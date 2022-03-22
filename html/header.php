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