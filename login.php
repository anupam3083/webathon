<?php
session_start();
include("config.php");
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
  
  height: 100vh;
}
#login .container #login-row #login-column .login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 0.5px solid #9C9C9C;
  background-image: none;
  background: #46464699;
  color: #fff;
  
}
#login .container #login-row #login-column .login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column .login-box #login-form #register-link {
  margin-top: -85px;
}
</style>
</head>
<body background="ASHISH.jpg">
  <div id="login">
    <h3 class="text-center text-white pt-5">Adim Login form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="login-box col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center">LOGIN HERE</h3>
                        <div class="form-group">
                            <label for="username" class="">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
  
  $user=$_POST['username'];
  $password=$_POST['password'];
  $sel="select *from admin where username='$user' and password='$password'";
  $res=mysqli_query($conn,$sel);
  $rc=mysqli_num_rows($res);
  if($rc==1)
  {
    $_SESSION['username']=$user;
      echo "<script>alert('login in succesfully');</script>";

    echo "<script>location.href='homepage.php'</script>";
  }
  else
  {
      echo "<script>alert('invalid login');</script>";

    echo "<script>location.href='login.php'</script>";
  }
 }   
?>

