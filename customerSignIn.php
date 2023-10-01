<!DOCTYPE html>
<html>

<head>
    <title>Admin SignIn - Local Produce Market Place</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="main-background">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <h2 class="def-header2">Local Produce Market Place</h2>
                <span class="def-header1">Customer Sign In</span>
            </div>
            <div class="col-12 mt-4">
                <div class="col-10 col-md-10 col-lg-4 offset-1 offset-md-1 offset-lg-4 def-card1 p-5">
                    <div class="row">
                        <!-- signin section -->
                        <div class="col-12" id="signin-section">
                            <div class="row">
                                <div class="inputBox" onclick="type();">
                                    <input type="text" required="required" id="email">
                                    <span id="cu_email">Email</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-5" onclick="type();">
                                    <input type="password" class="password" required="required" id="password1">
                                    <span id="cu_password">password</span>
                                    <div id="password-hide-btn1" onclick="shiftwPasswordHide('1');">
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>
                                    <i class="i"></i>
                                </div>

                                <div class="link mt-3">
                                    <a href="#" class="forgot-pass" onclick="forgotPassword();">Forgot password</a>
                                    <div class="checkbox">
                                        <input type="checkbox" id="rememberme">
                                        <label>Remember me</label>
                                    </div>
                                </div>

                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="customerlogin();">Login</a>
                                </div>
                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="switchFrame();">Switch to Sign Up</a>
                                </div>

                                <!-- <div class="form-link">
                                    <span>Don't have an account? <a href="#" class="links signup-link">Signup</a></span>
                                </div> -->
                            </div>
                        </div>
                        <!-- signin section -->
                        <!-- signup section -->
                        <div class="col-12 d-none" id="signup-section">
                            <div class="row">
                                <div class="inputBox" onkeypress="type();">
                                    <input type="number" required="required" id="mobile">
                                    <span id="s_mobile">Mobile</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-4" onkeypress="type();">
                                    <input type="text" required="required" id="fname">
                                    <span id="s_fname">First Name</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-4" onkeypress="type();">
                                    <input type="text" required="required" id="lname">
                                    <span id="s_lname">Last Name</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-4" onkeypress="type();">
                                    <input type="text" required="required" id="email">
                                    <span id="s_email">Email</span>
                                    <i class="i"></i>
                                </div>

                                <div class="inputBox mt-4" onkeypress="type();">
                                    <input type="password" class="password" required="required" id="password2">
                                    <span id="s_password">password</span>
                                    <div id="password-hide-btn2" onclick="shiftwPasswordHide('2');">
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-4" onkeypress="type();">
                                    <input type="password" class="password" required="required" id="password3">
                                    <span id="s_repassword">Re password</span>
                                    <div id="password-hide-btn3" onclick="shiftwPasswordHide('3');">
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>
                                    <i class="i"></i>
                                </div>

                                <div class="field button-field mt-4">
                                    <a style="color: #fff;" class="button1" onclick="customerSignUn();">Sign Up</a>
                                </div>
                                <div class="field button-field mt-2">
                                    <a style="color: #fff;" class="button1" onclick="switchFrame();">Switch to Sign In</a>
                                </div>
                            </div>
                        </div>
                        <!-- signup section -->
                        <!-- password reset -->
                        <div class="col-12 d-none" id="forgot-section">
                            <div class="row">

                                <div class="inputBox mt-4" onclick="type1();">
                                    <input type="text" required="required" id="Verification">
                                    <span id="s_Verification">Verification Code</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-4" onclick="type1();">
                                    <input type="text" required="required" id="v_ename">
                                    <span id="s_v_email">Email</span>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-4" onclick="type1();">
                                    <input type="password" class="password" required="required" id="password4">
                                    <span id="s_n_password">New Password</span>
                                    <div id="password-hide-btn4" onclick="shiftwPasswordHide('4');">
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>
                                    <i class="i"></i>
                                </div>
                                <div class="inputBox mt-4" onclick="type1();">
                                    <input type="password" class="password" required="required" id="password5">
                                    <span id="s_n_repassword">new Re Password</span>
                                    <div id="password-hide-btn5" onclick="shiftwPasswordHide('5');">
                                        <i class='bx bx-hide eye-icon'></i>
                                    </div>
                                    <i class="i"></i>
                                </div>

                                <div class="field button-field mt-4">
                                    <a style="color: #fff;" class="button1" onclick="customerPasswordChange();">Change Password</a>
                                </div>
                                <div class="field button-field mt-4">
                                    <a style="color: #fff;" class="button1" onclick="switchFrame1();">Change Password</a>
                                </div>
                            </div>
                        </div>
                        <!-- password reset -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>