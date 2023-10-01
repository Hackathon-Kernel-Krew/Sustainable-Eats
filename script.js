function shiftwPasswordHide(id) {
    var password = document.getElementById("password" + id);

    if (password.type == "password") {
        document.getElementById("password-hide-btn" + id).innerHTML = '<i class="bx bx-show eye-icon"></i>';
        password.type = "text";
    } else if (password.type == "text") {
        document.getElementById("password-hide-btn" + id).innerHTML = '<i class="bx bx-hide eye-icon"></i>';
        password.type = "password";    
    }
}



// function shiftwPasswordHide() {
//     var password = document.getElementById("password");

//     if (password.type == "password") {
//         document.getElementById("password-hide-btn").innerHTML = '<i class="bi bi-eye-fill fs-5 def-icon-color1 my-auto"></i>';
//         password.type = "text";
//     } else if (password.type == "text") {
//         document.getElementById("password-hide-btn").innerHTML = '<i class="bi bi-eye-slash-fill fs-5 def-icon-color1 my-auto"></i>';
//         password.type = "password";
//     }
// }

function switchFrame() {
    document.getElementById("signin-section").classList.toggle("d-none");
    document.getElementById("signup-section").classList.toggle("d-none");
}

function switchFrame2() {
    document.getElementById("signin-section").classList.toggle("d-none");
    document.getElementById("verification-section").classList.toggle("d-none");
}

function farmerSignIn() {

    var farmerNIC = document.getElementById("farmerNIC");
    var farmerPassword = document.getElementById("password1");

    var f = new FormData();
    f.append("n", farmerNIC.value);
    f.append("p", farmerPassword.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                alert("Success..");
                window.location = "farmerDashboard.php";
            } else if (t == "Please Enter Your NIC Number!") {
                document.getElementById("s_nic1").style = "color: red;";
                document.getElementById("s_nic1").innerHTML = t;
            } else if (t == "Invalid NIC Number") {
                document.getElementById("s_nic1").style = "color: red;";
                document.getElementById("s_nic1").innerHTML = t;
            } else if (t == "Please Enter Your Password") {
                document.getElementById("s_password1").style = "color: red;";
                document.getElementById("s_password1").innerHTML = t;
            } else if (t == "Invalid Password") {
                document.getElementById("s_password1").style = "color: red;";
                document.getElementById("s_password1").innerHTML = t;
            }
        }
    }

    r.open("POST", "farmerSignInProcess.php", true);
    r.send(f);

}

function farmerSignUp() {

    var nic = document.getElementById("farmerSignupNIC");
    var mobile = document.getElementById("farmerSignupMobile");
    var fname = document.getElementById("farmerSignupFname");
    var lname = document.getElementById("farmerSignupLname");
    var email = document.getElementById("farmerSignupEmail");
    var p1 = document.getElementById("password2");
    var p2 = document.getElementById("password3");

    // alert(p1.value);
    // 

    var form = new FormData();

    form.append("nic", nic.value);
    form.append("mobile", mobile.value);
    form.append("fname", fname.value);
    form.append("lname", lname.value);
    form.append("email", email.value);
    form.append("p1", p1.value);
    form.append("p2", p2.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {
                switchFrame();


            } else if (t == "Please Enter Your NIC Number") {
                document.getElementById("s_nic").style = "color: red;";
                document.getElementById("s_nic").innerHTML = t;
            } else if (t == "Invalid NIC Number") {
                document.getElementById("s_nic").style = "color: red;";
                document.getElementById("s_nic").innerHTML = t;
            } else if (t == "Please Enter Your Mobile Number!") {
                document.getElementById("s_mobile").style = "color: red;";
                document.getElementById("s_mobile").innerHTML = t;
            } else if (t == "Mobile Number Must Contain 10 Characters") {
                document.getElementById("s_mobile").style = "color: red;";
                document.getElementById("s_mobile").innerHTML = t;
            } else if (t == "Invalid Mobile Number!") {
                document.getElementById("s_mobile").style = "color: red;";
                document.getElementById("s_mobile").innerHTML = t;
            } else if (t == "Please Enter Your First Name!") {
                document.getElementById("s_fname").style = "color: red;";
                document.getElementById("s_fname").innerHTML = t;
            } else if (t == "First Name Must Have LESS THAN 50 characters!") {
                document.getElementById("s_fname").style = "color: red;";
                document.getElementById("s_fname").innerHTML = t;
            } else if (t == "Please Enter Your Last Name!") {
                document.getElementById("s_lname").style = "color: red;";
                document.getElementById("s_lname").innerHTML = t;
            } else if (t == "Last Name Must Have LESS THAN 50 characters!") {
                document.getElementById("s_lname").style = "color: red;";
                document.getElementById("s_lname").innerHTML = t;
            } else if (t == "Please Enter Your Email !!!") {
                document.getElementById("s_email").style = "color: red;";
                document.getElementById("s_email").innerHTML = t;
            } else if (t == "Email Must Have Less Than 100 Characters") {
                document.getElementById("s_email").style = "color: red;";
                document.getElementById("s_email").innerHTML = t;
            } else if (t == "Invalid Email !!!") {
                document.getElementById("s_email").style = "color: red;";
                document.getElementById("s_email").innerHTML = t;
            } else if (t == "Please Enter Your Password !!!") {
                document.getElementById("s_password").style = "color: red;";
                document.getElementById("s_password").innerHTML = t;
            } else if (t == "Password Must Be Between 8 - 16 Characters") {
                document.getElementById("s_password").style = "color: red;";
                document.getElementById("s_password").innerHTML = t;
            } else if (t == "Please Verify Your Password !!!") {
                document.getElementById("s_repassword").style = "color: red;";
                document.getElementById("s_repassword").innerHTML = t;
            } else if (t == "Password Verification Must Be Between 8 - 16 Characters") {
                document.getElementById("s_repassword").style = "color: red;";
                document.getElementById("s_repassword").innerHTML = t;
            } else if (t == "Password Verfication Failed") {
                document.getElementById("s_repassword").style = "color: red;";
                document.getElementById("s_repassword").innerHTML = t;
                document.getElementById("s_password").style = "color: red;";
                document.getElementById("s_password").innerHTML = t;
            } else if (t == "User with the same NIC or Mobile already exists") {
                document.getElementById("s_nic").style = "color: red;";
                document.getElementById("s_nic").innerHTML = t;
                document.getElementById("s_mobile").style = "color: red;";
                document.getElementById("s_mobile").innerHTML = t;
            }
        }

    };

    r.open("POST", "farmerSignUpProcess.php", true);
    r.send(form);

}


function type() {
    if (document.getElementById("verification1").textContent == "PLease enter verification code") {
        document.getElementById("verification1").style = "color: #8f8f8f;";
        document.getElementById("verification1").innerHTML = "Verification Code";
    } else if (document.getElementById("verification1").textContent == "Verification code must have 6 characters") {
        document.getElementById("verification1").style = "color: #8f8f8f;";
        document.getElementById("verification1").innerHTML = "Verification Code";
    } else if (document.getElementById("spanpassword4").textContent == "PLease enter new password") {
        document.getElementById("spanpassword4").style = "color: #8f8f8f;";
        document.getElementById("spanpassword4").innerHTML = "Password";
    } else if (document.getElementById("spanpassword4").textContent == "Password must have 8-16 characters") {
        document.getElementById("spanpassword4").style = "color: #8f8f8f;";
        document.getElementById("spanpassword4").innerHTML = "Password";
    } else if (document.getElementById("spanpassword5").textContent == "Please enter confirm password") {
        document.getElementById("spanpassword5").style = "color: #8f8f8f;";
        document.getElementById("spanpassword5").innerHTML = "Password";
    } else if (document.getElementById("spanpassword5").textContent == "Passwords Does Not Match") {
        document.getElementById("spanpassword5").style = "color: #8f8f8f;";
        document.getElementById("spanpassword5").innerHTML = "Password";
    } else if (document.getElementById("s_nic1").textContent == "Please Enter Your NIC Number!") {
        document.getElementById("s_nic1").style = "color: #8f8f8f;";
        document.getElementById("s_nic1").innerHTML = "NIC";
    } else if (document.getElementById("s_nic1").textContent == "Invalid NIC Number") {
        document.getElementById("s_nic1").style = "color: #8f8f8f;";
        document.getElementById("s_nic1").innerHTML = "NIC";
    } else if (document.getElementById("s_password1").textContent == "Please Enter Your Password") {
        document.getElementById("s_password1").style = "color: #8f8f8f;";
        document.getElementById("s_password1").innerHTML = "Password";
    } else if (document.getElementById("s_password1").textContent == "Invalid Password") {
        document.getElementById("s_password1").style = "color: #8f8f8f;";
        document.getElementById("s_password1").innerHTML = "Password";
    } else if (document.getElementById("s_nic").textContent == "Please Enter Your NIC Number") {
        document.getElementById("s_nic").style = "color: #8f8f8f;";
        document.getElementById("s_nic").innerHTML = "NIC";
    } else if (document.getElementById("s_nic").textContent == "Invalid NIC Number") {
        document.getElementById("s_nic").style = "color: #8f8f8f;";
        document.getElementById("s_nic").innerHTML = "NIC";
    } else if (document.getElementById("s_mobile").textContent == "Please Enter Your Mobile Number!") {
        document.getElementById("s_mobile").style = "color: #8f8f8f;";
        document.getElementById("s_mobile").innerHTML = "Mobile";
    } else if (document.getElementById("s_mobile").textContent == "Mobile Number Must Contain 10 Characters") {
        document.getElementById("s_mobile").style = "color: #8f8f8f;";
        document.getElementById("s_mobile").innerHTML = "Mobile";
    } else if (document.getElementById("s_mobile").textContent == "Invalid Mobile Number!") {
        document.getElementById("s_mobile").style = "color: #8f8f8f;";
        document.getElementById("s_mobile").innerHTML = "Mobile";
    } else if (document.getElementById("s_fname").textContent == "Please Enter Your First Name!") {
        document.getElementById("s_fname").style = "color: #8f8f8f;";
        document.getElementById("s_fname").innerHTML = "First Name";
    } else if (document.getElementById("s_fname").textContent == "First Name Must Have LESS THAN 50 characters!") {
        document.getElementById("s_fname").style = "color: #8f8f8f;";
        document.getElementById("s_fname").innerHTML = "First Name";
    } else if (document.getElementById("s_lname").textContent == "Please Enter Your Last Name!") {
        document.getElementById("s_lname").style = "color: #8f8f8f;";
        document.getElementById("s_lname").innerHTML = "Last Name";
    } else if (document.getElementById("s_lname").textContent == "Last Name Must Have LESS THAN 50 characters!") {
        document.getElementById("s_lname").style = "color: #8f8f8f;";
        document.getElementById("s_lname").innerHTML = "Last Name";
    } else if (document.getElementById("s_email").textContent == "Please Enter Your Email !!!") {
        document.getElementById("s_email").style = "color: #8f8f8f;";
        document.getElementById("s_email").innerHTML = "Email";
    } else if (document.getElementById("s_email").textContent == "Email Must Have Less Than 100 Characters") {
        document.getElementById("s_email").style = "color: #8f8f8f;";
        document.getElementById("s_email").innerHTML = "Email";
    } else if (document.getElementById("s_email").textContent == "Invalid Email !!!") {
        document.getElementById("s_email").style = "color: #8f8f8f;";
        document.getElementById("s_email").innerHTML = "Email";
    } else if (document.getElementById("s_password").textContent == "Please Enter Your Password !!!") {
        document.getElementById("s_password").style = "color: #8f8f8f;";
        document.getElementById("s_password").innerHTML = "Password";
    } else if (document.getElementById("s_password").textContent == "Password Must Be Between 8 - 16 Characters") {
        document.getElementById("s_password").style = "color: #8f8f8f;";
        document.getElementById("s_password").innerHTML = "Password";
    } else if (document.getElementById("s_repassword").textContent == "Please Verify Your Password !!!") {
        document.getElementById("s_repassword").style = "color: #8f8f8f;";
        document.getElementById("s_repassword").innerHTML = "Verify Password";
    } else if (document.getElementById("s_repassword").textContent == "Password Verification Must Be Between 8 - 16 Characters") {
        document.getElementById("s_repassword").style = "color: #8f8f8f;";
        document.getElementById("s_repassword").innerHTML = "Verify Password";
    } else if (document.getElementById("s_repassword").textContent == "Password Verfication Failed") {
        document.getElementById("s_repassword").style = "color: #8f8f8f;";
        document.getElementById("s_repassword").innerHTML = "Verify Password";
        document.getElementById("s_password").style = "color: #8f8f8f;";
        document.getElementById("s_password").innerHTML = "Password";
    }
}

function farmerValidation() {

    var nic = document.getElementById("farmerNIC");

    var form = new FormData();
    form.append("nic", nic.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var text = request.responseText;
            if (text == "Success") {
                switchFrame2();
            } else {
                alert(text);
            }
        }
    }

    request.open("POST", "farmerValidationProcess.php", true);
    request.send(form);

}

function farmerPasswordChange() {

    var verificationCode = document.getElementById("verification-code");
    var password1 = document.getElementById("password4");
    var password2 = document.getElementById("password5");
    var nic = document.getElementById("farmerNIC");

    if (password1.value != password2.value) {
        password2.value = "";
        document.getElementById("s_nic1").style = "color: red;";
        document.getElementById("s_nic1").innerHTML = "Passwords Does Not Match";
    } else {
        var form = new FormData();
        form.append("code", verificationCode.value);
        form.append("password1", password1.value);
        form.append("password2", password2.value);
        form.append("nic", nic.value);

        var request = new XMLHttpRequest();

        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200) {
                var text = request.responseText;
                if (text == "success") {
                    switchFrame();

                } else if (text == "PLease enter verification code") {
                    document.getElementById("verification1").style = "color: red;";
                    document.getElementById("verification1").innerHTML = text;
                } else if (text == "Verification code must have 6 characters") {
                    document.getElementById("verification1").style = "color: red;";
                    document.getElementById("verification1").innerHTML = text;
                } else if (text == "PLease enter new password") {
                    document.getElementById("spanpassword4").style = "color: red;";
                    document.getElementById("spanpassword4").innerHTML = text;
                } else if (text == "Password must have 8-16 characters") {
                    document.getElementById("spanpassword4").style = "color: red;";
                    document.getElementById("spanpassword4").innerHTML = text;
                    document.getElementById("spanpassword5").style = "color: red;";
                    document.getElementById("spanpassword5").innerHTML = text;
                } else if (text == "Please enter confirm password") {
                    document.getElementById("spanpassword5").style = "color: red;";
                    document.getElementById("spanpassword5").innerHTML = text;
                } else if (text == "Passwords not matching") {
                    document.getElementById("spanpassword4").style = "color: red;";
                    document.getElementById("spanpassword4").innerHTML = text;
                    document.getElementById("spanpassword5").style = "color: red;";
                    document.getElementById("spanpassword5").innerHTML = text;
                }
            }
        }

        request.open("POST", "farmerPasswordChangeProcess.php", true);
        request.send(form);
    }

}