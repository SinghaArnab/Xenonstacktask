<?php
$con=mysqli_connect("localhost", "root", "", "db");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=($_POST['password']);
    $query="SELECT * from reg where  email='$email' && password='$password' ";
	  $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    $Name=$row[1];
    $total=mysqli_num_rows($result);
    if($total > 0){
		session_start();

		$_SESSION['email'] = $Email;
		$_SESSION['name'] = $Name;
     header('location:welcome.php');
    }
    else{
    
    }
  }

  if(isset($_POST['submit']))
  {
    $fname=$_POST['name'];
    $mobno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=($_POST['password']);
	$reppassword=($_POST['repeatpassword']);

    $ret=mysqli_query($con, "select Email from reg where Email='$email' ");
    $result=mysqli_fetch_array($ret);
    if($result>0){

    }
    else{
    $query=mysqli_query($con, "INSERT INTO `reg`(`name`, `email`, `mobilenumber`, `password`, `repeatpassword`) VALUES('$fname', '$email', '$mobno', '$password','$reppassword' )");
    if ($query) {
    
  }
  else
    {
     
    }
}
}
  ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Modern Flat Design Login Form Example</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="login-page" >
  <div class="form">
    <form class="register-form" method="POST" id="" name="login" action="">
    <input class="form-control" placeholder="Full Name" name="name" type="text" required="true">
    <input class="form-control" placeholder="E-mail" name="email" type="email" required="true">
    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" maxlength="10" pattern="[0-9]{10}" required="true">
    <input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
    <input type="password" class="form-control" id="repeatpassword" name="repeatpassword" placeholder="Repeat Password" required="true">
      <button type="submit" value="submit" name="submit" class="btn btn-primary btn-lg">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="" method="POST" id="" name="signup">
      <input class="input100" name="email" type="email"placeholder="Email">
      <input class="input100" type="password" name="password" placeholder="Password">
      <button value="login" name="login">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
