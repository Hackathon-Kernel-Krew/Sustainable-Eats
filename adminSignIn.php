<!DOCTYPE html>
<html>

<head>
    <title>Admin SignIn - Local Produce Market Place</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="main-background">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h2 class="def-header2">Local Produce Market Place</h2>
                <span class="def-header1">Admin Sign In</span>
            </div>
            <div class="col-12 mt-4">
                <div class="col-10 col-md-10 col-lg-6 offset-1 offset-md-1 offset-lg-3 def-card1 p-5">
                    <div class="row">
                        <!-- signin section -->
                        <div class="col-12" id="signin-section">
                            <div class="row">
                                <div class="inputBox" onkeypress="type();">
                                    <input type="text" required="required" id="email" />
                                    <span id="spanemail">Email</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-5" onkeypress="type();">
                                    <input type="password" class="password" required="required" id="password1">
                                    <span id="spanpassword">Password</span>
                                    <div id="password-hide-btn1" onclick="shiftwPasswordHide('1');">
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>
                                    <i class="i"></i>
                                </div>

                                <div class="link mt-3">
                                    <a href="#" class="forgot-pass" onclick="adminValidation();">Forgot password</a>
                                </div>

                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="adminSignIn();">SignIn</a>
                                </div>
                            </div>
                        </div>
                        <!-- signin section -->
                        <!-- verification section -->
                        <div class="col-12 d-none" id="signup-section">
                            <div class="row">
                                <div class="inputBox" onkeypress="type();">
                                    <input type="text" required="required" id="verification-code" />
                                    <span id="verification1">Verification Code</span>
                                    <i class="i"></i>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="inputBox mt-5" onkeypress="type();">
                                            <input type="password" class="password" required="required" id="password2">
                                            <span id="spanpassword2">Password</span>
                                            <div id="password-hide-btn2" onclick="shiftwPasswordHide('2');">
                                                <i class='bx bx-hide eye-icon'></i>
                                            </div>
                                            <i class="i"></i>
                                        </div>
                                        <div class="inputBox mt-5" onkeypress="type();">
                                            <input type="password" class="password" required="required" id="password3">
                                            <span id="spanpassword3">Confirm Password</span>
                                            <div id="password-hide-btn3" onclick="shiftwPasswordHide('3');">
                                                <i class='bx bx-hide eye-icon'></i>
                                            </div>
                                            <i class="i"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="adminPasswordChange();">Change Password</a>
                                </div>
                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="switchFrame();">Cancle</a>
                                </div>
                            </div>
                        </div>
                        <!-- verification section -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>