<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin DashBoard - Local Produce Market Place</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="adminDashBoardStyles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- main header -->
            <div class="col-12 d-flex flex-row justify-content-between bg-body border-bottom">
                <div class="p-3">
                    <img src="resources/logo.png" class="main-logo" alt="main-logo" />
                </div>
                <div class="my-auto d-flex flex-row">
                    <div class="d-none d-md-none d-lg-block pe-3">
                        <ul class="nav nav-underline gap-4">
                            <li class="nav-item">
                                <a class="nav-link def-link1" href="#"><i class="bi bi-cart-fill def-link-btn"></i> Delivery Ordes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link def-link1" href="#"><i class="bi bi-car-front-fill def-link-btn"></i> Dispatch</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link def-link1" href="#"><i class="bi bi-car-front-fill def-link-btn"></i> Dispatcher</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link def-link1" href="#"><i class="bi bi-gear-fill def-link-btn"></i> Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link def-link1" href="#"><i class="bi bi-box-fill def-link-btn"></i> Stores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link def-link1" href="#"><i class="bi bi-x-circle-fill def-link-btn"></i> Sign Out</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-block d-md-block d-lg-none">
                        <!-- main menu offcanvas -->
                        <nav class="navbar">
                            <div class="container-fluid">
                                <button class="navbar-toggler navbar-btn def-btn-modify" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="offcanvas offcanvas-end bg-body-tertiary rounded-start-5 rounded-end-0 rounded-top-0 rounded-bottom-0" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                    <div class="offcanvas-header ps-4 pe-4 mt-2">
                                        <h1 class="offcanvas-title def-side-menu-header ps-1" id="offcanvasNavbarLabel">Menu</h1>
                                        <button type="button" class="btn-close def-btn-modify" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <ul class="navbar-nav justify-content-end flex-grow-1 ps-3 gap-4">
                                            <li class="nav-item">
                                                <a class="nav-link def-link1 fs-3" href="#"><i class="bi bi-cart-fill def-link-btn fs-3"></i> Delivery Ordes</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link def-link1 fs-3" href="#"><i class="bi bi-car-front-fill def-link-btn fs-3"></i> Dispatch</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link def-link1 fs-3" href="#"><i class="bi bi-car-front-fill def-link-btn fs-3"></i> Dispatcher</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link def-link1 fs-3" href="#"><i class="bi bi-gear-fill def-link-btn fs-3"></i> Settings</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link def-link1 fs-3" href="#"><i class="bi bi-box-fill def-link-btn fs-3"></i> Stores</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link def-link1 fs-3" href="#"><i class="bi bi-x-circle-fill def-link-btn fs-3"></i> Sign Out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <!-- main menu offcanvas -->
                    </div>
                </div>
            </div>
            <!-- main header -->
            <!-- panel parent area -->
            <div class="col-12 p-0 m-0">
                <div class="row p-0 m-0">
                    <!-- main side bar -->
                    <div class="col-2 border-end p-0 m-0 d-none d-md-none d-lg-block">
                        <div class="row pt-2 ps-2">
                            <div class="col-12">
                                <div class="row ps-2">
                                    <div class="col-12 col-md-12 col-lg-4 pt-2 pb-3 d-flex flex-row justify-content-center justify-content-md-center justify-content-lg-start">
                                        <img src="resources/profile.jpeg" class="profile-img p-1 border shadow-sm" alt="profile-image" />
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-8 text-center text-md-center text-lg-start d-flex flex-column justify-content-center">
                                        <span class="def-side-menu-header">Diluka Pawan</span>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <ol class="list-group overflow-x-hidden overflow-y-scroll position-relative scroll-modify">
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-top border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-file-post-fill"></i> Onboarding</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">14</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-speedometer"></i> Dashboard</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">14</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-pencil-square"></i> Orders</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">256</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-pencil-square"></i> Customers</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">14</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-pencil-square"></i> Custome Domain</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">0</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-pencil-square"></i> Surcharge Settings</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">55</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-pencil-square"></i> Global Settings</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">34</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-pencil-square"></i> Billing</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">17</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-pencil-square"></i> Promotions</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">0</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-pencil-square"></i> Store Management</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">0</span>
                                </li>
                                <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><i class="bi bi-pencil-square"></i> Reporting</div>
                                    </div>
                                    <span class="badge def-badge rounded-pill">0</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- main side bar -->
                    <!-- main content -->
                    <div class="col-12 col-md-12 col-lg-10 p-3">
                        <div class="row">
                            <!-- dashboard header -->
                            <div class="col-12 d-flex flex-row justify-content-between">
                                <div class="d-flex flex-row">
                                    <!-- sidebar offcanvas -->
                                    <nav class="navbar">
                                        <div class="container-fluid">
                                            <button class="navbar-toggler d-block d-md-block d-lg-none def-btn-modify" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="offcanvas offcanvas-end bg-body-tertiary rounded-start-5 rounded-end-0 rounded-top-0 rounded-bottom-0" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbarLabel">
                                                <div class="offcanvas-header ps-4 pe-4 mt-2">
                                                    <h1 class="offcanvas-title def-side-menu-header ps-1" id="offcanvasNavbarLabel">Actions</h1>
                                                    <button type="button" class="btn-close def-btn-modify" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body">
                                                    <ol class="list-group overflow-x-hidden overflow-y-scroll position-relative scroll-modify">
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-top border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-file-post-fill"></i> Onboarding</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">14</span>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-speedometer"></i> Dashboard</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">14</span>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-pencil-square"></i> Orders</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">256</span>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-pencil-square"></i> Customers</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">14</span>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-pencil-square"></i> Custome Domain</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">0</span>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-pencil-square"></i> Surcharge Settings</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">55</span>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-pencil-square"></i> Global Settings</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">34</span>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-pencil-square"></i> Billing</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">17</span>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-pencil-square"></i> Promotions</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">0</span>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-pencil-square"></i> Store Management</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">0</span>
                                                        </li>
                                                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start border-0 border-bottom pt-3 pb-3">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold"><i class="bi bi-pencil-square"></i> Reporting</div>
                                                            </div>
                                                            <span class="badge def-badge rounded-pill">0</span>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                    <!-- sidebar offcanvas -->
                                    <div class="pt-3 pt-md-3 pt-lg-0">
                                        <h1 class="def-side-menu-header">Dashboard</h1>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-end pe-2">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="def-link1">Home</a></li>
                                            <li class="breadcrumb-item active def-link1" aria-current="page"><i class="bi bi-speedometer def-link1"></i> Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <!-- dashboard header -->
                            <!-- summary card section -->
                            <div class="col-12">
                                <div class="row pt-3 pb-3 ps-2 pe-2">
                                    <!-- summary card -->
                                    <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-4 mt-lg-0">
                                        <div class="col-12 border rounded shadow-sm p-3">
                                            <div class="row ps-2">
                                                <div class="col-12 col-md-12 col-lg-8 text-center text-md-center text-lg-start d-flex flex-column justify-content-center order-1 order-md-1 order-lg-0">
                                                    <h4 class="def-side-menu-header">Rs.86,802.60</h4>
                                                    <h5>Sales</h5>
                                                </div>
                                                <div class="col-12 col-md-12 col-lg-4 pt-2 pb-3 d-flex flex-row justify-content-center justify-content-md-center justify-content-lg-start align-items-center order-0 order-md-0 order-lg-1">
                                                    <img src="resources/i3.svg" class="img-fluid p-1 border shadow-sm rounded" style="width:50px; height:50px;" alt="profile-image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- summary card -->
                                    <!-- summary card -->
                                    <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-4 mt-lg-0">
                                        <div class="col-12 border rounded shadow-sm p-3">
                                            <div class="row ps-2">
                                                <div class="col-12 col-md-12 col-lg-8 text-center text-md-center text-lg-start d-flex flex-column justify-content-center order-1 order-md-1 order-lg-0">
                                                    <h4 class="def-side-menu-header">383</h4>
                                                    <h5>Deliverd</h5>
                                                </div>
                                                <div class="col-12 col-md-12 col-lg-4 pt-2 pb-3 d-flex flex-row justify-content-center justify-content-md-center justify-content-lg-start align-items-center order-0 order-md-0 order-lg-1">
                                                    <img src="resources/i2.svg" class="img-fluid p-1 border shadow-sm rounded" style="width:50px; height:50px;" alt="profile-image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- summary card -->
                                    <!-- summary card -->
                                    <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-4 mt-lg-0">
                                        <div class="col-12 border rounded shadow-sm p-3">
                                            <div class="row ps-2">
                                                <div class="col-12 col-md-12 col-lg-8 text-center text-md-center text-lg-start d-flex flex-column justify-content-center order-1 order-md-1 order-lg-0">
                                                    <h4 class="def-side-menu-header">1067</h4>
                                                    <h5>No Orders</h5>
                                                </div>
                                                <div class="col-12 col-md-12 col-lg-4 pt-2 pb-3 d-flex flex-row justify-content-center justify-content-md-center justify-content-lg-start align-items-center order-0 order-md-0 order-lg-1">
                                                    <img src="resources/i5.svg" class="img-fluid p-1 border shadow-sm rounded" style="width:50px; height:50px;" alt="profile-image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- summary card -->
                                    <!-- summary card -->
                                    <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-4 mt-lg-0">
                                        <div class="col-12 border rounded shadow-sm p-3">
                                            <div class="row ps-2">
                                                <div class="col-12 col-md-12 col-lg-8 text-center text-md-center text-lg-start d-flex flex-column justify-content-center order-1 order-md-1 order-lg-0">
                                                    <h4 class="def-side-menu-header">502</h4>
                                                    <h5>No Customers</h5>
                                                </div>
                                                <div class="col-12 col-md-12 col-lg-4 pt-2 pb-3 d-flex flex-row justify-content-center justify-content-md-center justify-content-lg-start align-items-center order-0 order-md-0 order-lg-1">
                                                    <img src="resources/i6.svg" class="img-fluid p-1 border shadow-sm rounded" style="width:50px; height:50px;" alt="profile-image" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- summary card -->
                                </div>
                            </div>
                            <!-- summary card section -->
                            <!-- other summary section -->
                            <div class="col-12 mt-2">
                                <div class="row ps-2 pe-2">
                                    <!-- sumamry card -->
                                    <div class="col-12 col-md-6 col-lg-6 mt-4">
                                        <div class="col-12 border rounded shadow-sm p-4">
                                            <div class="row">
                                                <div class="col-12 border-bottom">
                                                    <h3 class="def-side-menu-header">All Orders</h3>
                                                </div>
                                                <div class="col-12 pt-3">
                                                    <h2>1067</h2>
                                                    <span>New Orders</span>
                                                </div>
                                                <div class="col-12 pt-3">
                                                    <h2>86,802.60</h2>
                                                    <span>Orders Price</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sumamry card -->
                                    <!-- sumamry card -->
                                    <div class="col-12 col-md-6 col-lg-6 mt-4">
                                        <div class="col-12 border rounded shadow-sm p-4">
                                            <div class="row">
                                                <div class="col-12 border-bottom">
                                                    <h3 class="def-side-menu-header">User Details</h3>
                                                </div>
                                                <div class="col-6 pt-3">
                                                    <h2>502</h2>
                                                    <span>Total Users</span>
                                                </div>
                                                <div class="col-6 pt-3">
                                                    <h2>3</h2>
                                                    <span>Deactive Users</span>
                                                </div>
                                                <div class="col-12 pt-3">
                                                    <h2>499</h2>
                                                    <span>Active Users</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sumamry card -->
                                    <!-- sumamry card -->
                                    <div class="col-12 col-md-6 col-lg-6 mt-4">
                                        <div class="col-12 border rounded shadow-sm p-4">
                                            <div class="row">
                                                <div class="col-12 border-bottom">
                                                    <h3 class="def-side-menu-header">Store Details</h3>
                                                </div>
                                                <div class="col-6 pt-3">
                                                    <h2>169</h2>
                                                    <span>Total Stores</span>
                                                </div>
                                                <div class="col-6 pt-3">
                                                    <h2>111</h2>
                                                    <span>Deactive Stores</span>
                                                </div>
                                                <div class="col-12 pt-3">
                                                    <h2>58</h2>
                                                    <span>Active Stores</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sumamry card -->
                                    <!-- sumamry card -->
                                    <div class="col-12 col-md-6 col-lg-6 mt-4">
                                        <div class="col-12 border rounded shadow-sm p-4">
                                            <div class="row">
                                                <div class="col-12 border-bottom">
                                                    <h3 class="def-side-menu-header">Driver Details</h3>
                                                </div>
                                                <div class="col-6 pt-3">
                                                    <h2>293</h2>
                                                    <span>Total Drivers</span>
                                                </div>
                                                <div class="col-6 pt-3">
                                                    <h2>129</h2>
                                                    <span>Deactive Drivers</span>
                                                </div>
                                                <div class="col-12 pt-3">
                                                    <h2>164</h2>
                                                    <span>Active Drivers</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sumamry card -->
                                </div>
                            </div>
                            <!-- other summary section -->
                        </div>
                    </div>
                    <!-- main content -->
                </div>
            </div>
            <!-- panel parent area -->
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="adminDashBoard.js"></script>
</body>

</html>