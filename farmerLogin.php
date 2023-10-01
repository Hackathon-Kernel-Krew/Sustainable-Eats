<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Farmer Login - Local Produce Market Place </title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="semantic.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" href="resources/farmerIcon.png" />
</head>


<body class="workspace">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h2 class="def-header2">Local Produce Market Place</h2>
                <span class="def-header1">Farmer Sign In</span>
            </div>
            <div class="col-12 mt-4">
                <div class="col-10 col-md-10 col-lg-6 offset-1 offset-md-1 offset-lg-3 def-card1 p-5">
                    <div class="row">
                        <!-- signin section -->
                        <div class="col-12" id="signin-section">
                            <div class="row">


                            <div class="inputBox" onkeypress="type();">
                                    <input type="text" required="required" id="farmerNIC">
                                    <span id="s_nic1">NIC</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-5" onkeypress="type();">
                                    <input type="password" class="password" required="required" id="password1">
                                    <span id="s_password1">Password</span>
                                    <div id="password-hide-btn1" onclick="shiftwPasswordHide('1');">
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>
                                    <i class="i"></i>
                                </div>
                                <div class="link mt-3">
                                    <a href="#" class="forgot-pass" onclick="farmerValidation();">Forgot password</a>
                                    <div class="checkbox">
                                        <input type="checkbox" id="rememberme">
                                        <label>Remember me</label>
                                    </div>
                                </div>

                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="farmerSignIn();">Sign In</a>
                                </div>
                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="switchFrame();">Switch to Sign Up</a>
                                </div>
                                <div class="col-12 mt-50 text-center mb-1">
                                    <div class="mt-4">
                                        <a href="#" class="fs-4">SignIn as a Customer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- signin section -->
                        <!-- signup section -->
                        <div class="col-12 d-none" id="signup-section">
                            <div class="row">
                                <div class="inputBox2 " onkeypress="type();">
                                    <input type="text" required="required" id="farmerSignupNIC">
                                    <span id="s_nic">NIC</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox2" onkeypress="type();">
                                    <input type="text" required="required" id="farmerSignupMobile">
                                    <span id="s_mobile">Mobile</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-4" onkeypress="type();">
                                    <input type="text" required="required" id="farmerSignupFname">
                                    <span id="s_fname">First Name</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-4" onkeypress="type();">
                                    <input type="text" required="required" id="farmerSignupLname">
                                    <span id="s_lname">Last Name</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-4" onkeypress="type();">
                                    <input type="text" required="required" id="farmerSignupEmail">
                                    <span id="s_email">Email</span>
                                    <i class="i"></i>
                                </div>

                                <div class="inputBox mt-5" onkeypress="type();">
                                    <input type="password" class="password" required="required" id="password2">
                                    <span id="s_password">Password</span>
                                    <div id="password-hide-btn2" onclick="shiftwPasswordHide('2');">
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-5" onkeypress="type();">
                                    <input type="password" class="password" required="required" id="password3">
                                    <span id="s_repassword">Verify Password</span>
                                    <div id="password-hide-btn3" onclick="shiftwPasswordHide('3');">
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>
                                    <i class="i"></i>
                                </div>

                                <div class="field button-field mt-4">
                                    <a style="color: #fff;" class="button1" onclick="farmerSignUp();" >Sign Up</a>
                                </div>
                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="switchFrame();">Switch to Sign In</a>
                                </div>
                            </div>
                        </div>
                        <!-- signup section -->
                        <!-- verification section -->
                        <div class="col-12 d-none" id="verification-section">
                            <div class="row">
                                <div class="inputBox" onkeypress="type();">
                                    <input type="text" required="required" id="verification-code" />
                                    <span id="verification1">Verification Code</span>
                                    <i class="i"></i>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="inputBox mt-5" onkeypress="type();">
                                            <input type="password" class="password" required="required" id="password4">
                                            <span id="spanpassword4">Password</span>
                                            <div id="password-hide-btn4" onclick="shiftwPasswordHide('4');">
                                                <i class='bx bx-hide eye-icon'></i>
                                            </div>
                                            <i class="i"></i>
                                        </div>
                                        <div class="inputBox mt-5" onkeypress="type();">
                                            <input type="password" class="password" required="required" id="password5">
                                            <span id="spanpassword5">Confirm Password</span>
                                            <div id="password-hide-btn5" onclick="shiftwPasswordHide('5');">
                                                <i class='bx bx-hide eye-icon'></i>
                                            </div>
                                            <i class="i"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="farmerPasswordChange();">Change Password</a>
                                </div>
                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="switchFrame2();">Cancle</a>
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