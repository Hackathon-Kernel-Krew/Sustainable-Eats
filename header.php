<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Sample</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

    <div class="col-12">
        <div class="row">

            <div class="col-2">
                <div class="row">
                    <div class="col-12">
                        <img class="lg d-flex align-items-center mt-3 mb-3 offset-0 offset-lg-3" src="resources/images/logo.png">
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="row">
                    <div class="col 12">
                        <div class="row">
                            <ul class="nav mt-3 offset-lg-4">
                                <li class="nav-item">
                                    <a class="nav-link active fs-5" style="color: black;" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-5" style="color: black;" href="#">Our Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-5" style="color: black;" href="#">Our Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-5" style="color: black;" href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="row">
                    <div class="col-12">
                        <div class="offset-lg-4 col-12 col-lg-3 align-self-end mt-3">
                            <div class="row">

                                <div class="col-1 col-lg-3 ms-5 ms-lg-0 mt-1 cart-icon"></div>

                                <div class="col-2 col-lg-6 offset-lg-2">
                                    <div class="col-12">
                                        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list"></i></button>

                                        <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                                <h4 class="offcanvas-title text-light" id="offcanvasRightLabel">My Cake Shop</h4>
                                                <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">
                                                <H5 class="text-light offset-1 mt-4 mb-4  signout" onclick="window.location='userProfile.php'">My Profile</H5>
                                                <H5 class="text-light offset-1 mt-4 mb-4  signout" onclick="window.location=''">My Product</H5>
                                                <H5 class="text-light offset-1 mt-4 mb-4  signout" onclick="window.location=''">Watchlist</H5>
                                                <H5 class="text-light offset-1 mt-4 mb-4  signout" onclick="window.location=''">Purchase History</H5>
                                                <H5 class="text-light offset-1 mt-4 mb-4  signout" onclick="window.location=''">Message</H5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
</body>