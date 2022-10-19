<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a href="login.php" class="btn btn-danger m-1"> <?php session_start(); echo $_SESSION['name'];?></a>
            <a href="index.php" class="btn btn-danger m-1">Logout</a>
          </div>
        </div>
      </nav>
    </div>





   


    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12  d-flex flex-wrap ">

                <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/741_operator_in/07/02/2022/81abe053200c37736e75e090d32a5bcc.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/327_operator_in/07/02/2022/244bfd0645de5e7015460321203eb1f8.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>




                  <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/741_operator_in/07/02/2022/81abe053200c37736e75e090d32a5bcc.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12  d-flex flex-wrap ">

                <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/741_operator_in/07/02/2022/81abe053200c37736e75e090d32a5bcc.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/327_operator_in/07/02/2022/244bfd0645de5e7015460321203eb1f8.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000&ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>




                  <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/741_operator_in/07/02/2022/81abe053200c37736e75e090d32a5bcc.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12  d-flex flex-wrap ">

                <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/741_operator_in/07/02/2022/81abe053200c37736e75e090d32a5bcc.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/327_operator_in/07/02/2022/244bfd0645de5e7015460321203eb1f8.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>




                  <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/741_operator_in/07/02/2022/81abe053200c37736e75e090d32a5bcc.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12  d-flex flex-wrap ">

                <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/741_operator_in/07/02/2022/81abe053200c37736e75e090d32a5bcc.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/327_operator_in/07/02/2022/244bfd0645de5e7015460321203eb1f8.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>




                  <div class='col-md-3 m-5'>
                    <div class='dress-card'>
                      <div class='dress-card-head'>
                        <img class='dress-card-img-top' src='https://i02.appmifile.com/741_operator_in/07/02/2022/81abe053200c37736e75e090d32a5bcc.jpg?width=398&height=320' alt=''>
                        <div class='surprise-bubble'><span class='dress-card-heart'>
                       
                        </div>
                      </div>
                      <div class='dress-card-body'>
                        <h4 class='dress-card-title'>MI 10i</h4>
                        <p class='dress-card-para text-truncate'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, delectus!</p>
                        <p class='dress-card-para'><span class='dress-card-price'><i class='fa-sharp fa-solid fa-indian-rupee-sign'></i>&ensp; 45000 &ensp;
                        
                        </span><span class='dress-card-crossed'>18000</span><span class='dress-card-off'>&ensp;(10)%</span></p>
                        <div class='row'>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner bag-button'>Add to Bag <i class='fa-solid fa-cart-shopping'></i></div></a></div>
                          <div class='col-md-6 card-button'><a href='#'><div class='card-button-inner wish-button'>View more</div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>











 

    <div class="container-fluid footer mt-3">

        <h5 class="text-center">
          Arnab Singha
        </h5>
          
    </div>


    </body>
</html>