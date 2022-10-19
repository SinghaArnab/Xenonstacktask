<?php
$con=mysqli_connect("localhost", "root", "", "db");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

if(isset($_POST['send']))
  {
    $fname=$_POST['fullname'];
    $email=$_POST['email'];
    $massage=$_POST['massage'];
    
    $query=mysqli_query($con, "INSERT INTO `massage`(`name`, `email`, `massage`)   VALUES('$fname', '$email', '$massage' )");
    if ($query) {
                }
        else
          {
     
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
<div class="nav_bar">
 
 <nav class="navbar navbar-expand-lg navbar-light ">
     <div class="container-fluid ">
       <a class="navbar-brand" href="index.html"><b class="fs-3">Xenon</b></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-light fs-5">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="index.php">Home</a>
           </li>
           
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="product.php">Products</a>
           </li>
           
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="contact.php">Contact us</a>
           </li>
           

         </ul>
         <a href="login.html" class="btn btn-danger m-1">Login</a>
         <a href="signup.html"  class="btn btn-primary m-1">Signup</a>
       </div>
     </div>
   </nav>
 </div>
    <div class="contactform">
        <form class="register-form" method="POST" id="" name="login" action="">
            <h2>Send Massage</h2>
            <div class="inputext">
                <input type="text" name="fullname" required="required">
                <span>full Name</span>
            </div>
            <div class="inputext">
                <input type="text" name="email" required="required">
                <span>Email</span>
            </div>
            <div class="inputext">
                <textarea required="required" name="massage"></textarea>
                <span>write Your Massage</span>
            </div>
            <div class="inputext">
                <input type="submit" name="send"  value="Send" required="required"> 
            </div>
        </form>
    </div>
</body>
</html>