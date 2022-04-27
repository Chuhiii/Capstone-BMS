<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section class="vh-100" id="loginPage">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-6">
            <div class="card" style="border-radius: 1rem;">
                <div class="card-body p-4 p-lg-5 text-black">

                    <form method="POST" action="php/userLog.php" class="align-items-center text-start" >
                    <div class="d-flex align-items-center mb-3 pb-1 text-center">
                        <span class="h1 fw-bold mb-0">User</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in to your account</h5>

                    <div class="form-outline mb-4">
                        <label class="form-label">Email address</label>
                        <input type="email"
                                id="email"
                                name="email"
                                class="form-control form-control-lg" required/>
                    </div>

                    <div class="form-outline mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" 
                                id="userPass"
                                name="userPass"
                                pattern=".{8, 15}"
                                class="form-control form-control-lg mb-1" required/>
                        <div class="form-checkbox">
                            <input type="checkbox" 
                                    class="form-check-input" 
                                    onclick="showPassword()">
                            <i class="fas fa-envelope prefix grey-text pb-3">Show Password</i>
                        </div>
                    </div>

                    <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block login" type="submit" name="loginUser" onclick="checkPasswordReqs()">Login</button>
                    </div>

                    <!-- Modal -->
                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a type="button" data-bs-toggle="modal" data-bs-target="#modalSubscriptionForm"
                        style="color: #393f81;">Register here</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 fw-bold h1">Sign up</h4>
                <button type="button" class="close " data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="php/userSignup.php" method="POST">
            <div class="modal-body mx-3 row">
                <div class="md-form mb-2 col-12">
                    <input type="text" id="lname" name="lname" class="form-control validate" placeholder="Last name">
                </div>

                <div class="md-form mb-2 col-12">
                    <input type="text" id="fname" name="fname" class="form-control validate" placeholder="First name">
                </div>

                <div class="md-form mb-2 col-12">
                    <input type="text" id="mname" name="mname" class="form-control validate" placeholder="Middle Name">
                </div>

                <div class="md-form mb-2">
                    <input type="text" id="address" name="address" class="form-control validate" placeholder="Address">
                </div>

                <div class="md-form mb-2">
                    <input type="tel" id="contact_no" name="contact_no" class="form-control validate" placeholder="Contact No.">
                </div>
                
                <div class="md-form mb-3 mt-1 col-6">
                    <i class="fas fa-envelope prefix grey-text">Birthday</i>
                    <input type="date" id="bday" name="bday" class="form-control validate">
                </div>

                <div class="md-form mb-3 mt-1 col-6">
                    <i class="fas fa-envelope prefix grey-text pb-3">Sex</i>
                    <div class="row">
                        <div class="col-12 d-flex mt-1">
                            <input type="radio" id="male" class="gender" value="male" name="sex">
                            <label for="form5Male">Male</label>
                            <input type="radio" id="female" class="gender" value="female" name="sex">
                            <label for="form7Female">Female</label>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="md-form mb-2">
                    <input type="email" id="emailSign" name="emailSign"class="form-control validate" placeholder="Email">
                </div>

                <div class="md-form mb-2">
                    <input type="text" id="uname" name="uname" class="form-control validate" placeholder="Username">
                </div>

                <div class="md-form mb-2">
                    <input type="password" pattern=".{8, 15}" id="passwordSign" name="passwordSign" class="form-control validate" placeholder="Password">
                </div>

                <div class="md-form mb-2">
                    <input type="password" pattern=".{8, 15}" id="passwordSignReType" name="passwordSignReType" class="form-control validate" placeholder="Re-type Password">
                </div>

                <div class="form-checkbox">
                <input type="checkbox" class="form-check-input" onclick="showPasswordSignup()">
                <i class="fas fa-envelope prefix grey-text pb-3">Show Password</i>
            </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-dark btn-lg btn-block login" type="submit" name="signupUser">Sign in</button>
            </div>
            </form>
        </div>                      
        </div>
        </div>

    <script>
        function showPassword() {
            var adminPass = document.getElementById("userPass");
            if (adminPass.type === "password") {
                adminPass.type = "text";
            } else {
                adminPass.type = "password";
            }
        }

        function showPasswordSignup() {
            var passwordSign = document.getElementById("passwordSign");
            var passwordSignReType = document.getElementById("passwordSignReType");
            if (passwordSign.type === "password" && passwordSignReType.type === "password") {
                passwordSign.type = "text";
                passwordSignReType.type = "text";
            } else {
                passwordSign.type = "password";
                passwordSignReType.type = "password";
            }
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous"></script>
</body>
</html>