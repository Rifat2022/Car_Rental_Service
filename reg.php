<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>


 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/login.css">

</head>
<body>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="post" name="regform" onsubmit="return validateform()"  class="register-form" id="register-form" action="createacc.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="uname" id="name" placeholder="Your Name" onkeypress="return isChar(event)" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="uemail" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                            </div>
                            <div class="form-group">
                                <input  type="checkbox" name="lifecheck" id="agree-term" class="lifecheck"/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>

                    </div>

                    <div class="signup-image">

                        <figure><img src="img/signin.svg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>




    </div>


<script>
        function isChar(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return true;
            }
            return false;
        }

        function validateform() {


            var name = document.regform.uname.value;
            var email = document.regform.uemail.value;
            var password = document.regform.pass.value;
            var re_password = document.regform.re_pass.value;
            var lfckv = document.getElementsByClassName("lifecheck");



            if (name == null || name == "") {
                alert("name can't be blank");
                return false;
            } else if (email == null || email == "") {
                alert("email can't be blank");
                return false;
            } else if (password == null || password == "") {
                alert("password can't be blank");
                return false;
            }
			else if (password.length<5) {
                alert("password can't be less than 5 character");
                return false;
            }
			else if (/^[a-zA-Z0-9- ]*$/.test(password) == true) {
                alert("password must contain special character");
                return false;
            }

			else if (password == password.toUpperCase() || password == character.toLowerCase() ) {
                alert("password must contain one upper case and one lower case character");
                return false;
            }
			else if (re_password == null || re_password == "") {
                alert("repeat password can't be blank");
                return false;
            }
			else if (password != re_password) {
                alert("password didn't matched");
                return false;
            }
			else if (false === lfckv[0].checked) {
				alert('the checkbox is not checked');
				return false;
			}

        }
    </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <script src="js/main.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
<script type="text/javascript">
    $(function(){


</script>
</body>
</html>
