<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start(); // Start the session if it is not already active
}
if(isset($_POST['login'])){
  $name = $_POST['u-name'];
  $pw = $_POST['pwd'];
  if(!empty($name) && !empty($pw)){
    $_SESSION['u-name'] = $name;
    $_SESSION['pwd'] = $pw;
    header('Location: users.php');
    exit();
  }     
}
if(isset($_POST['Submit'])){
  $email = $_POST['uemail'];
  $pw = $_POST['upassword'];
  $fullName = $_POST['fullname'];
  $uName = $_POST['uname'];
  if(!empty($email) && !empty($pw)){
    $_SESSION['uemail'] = $email;
    $_SESSION['upassword'] = $pw;
    $_SESSION['fullname'] = $fullName;
    $_SESSION['uname'] = $uName;
    header('Location: users.php');
    exit();
  }     
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    unset($_SESSION['u-email']);
    unset($_SESSION['pwd']);
    unset($_SESSION['u-name']);

    session_destroy(); // Destroy the session
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News Admin | Login/Register</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form  action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="u-name" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="pwd" />
              </div>
              <div>
                <button class="btn btn-default submit" name="login">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-newspaper-o"></i></i> News Admin</h1>
                  <p>©2016 All Rights Reserved. News Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form  action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Fullname" required=""name="fullname"/>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" required=""name="uname"/>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required=""name="uemail"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required=""name="upassword"/>
              </div>
              <div>
                <button class="btn btn-default submit"name="Submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br/>
                <div>
                  <h1><i class="fa fa-newspaper-o"></i></i> News Admin</h1>
                  <p>©2016 All Rights Reserved. News Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
