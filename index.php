<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lux shop</title>
      <!---boostrap Css link--->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!---Font awsome link-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
       integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="ans.css">
    </head>
<body>
        <!---Nav bar-->
        <div class="container-fluid p-0">
           <!--First chiled-->
          <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <img src="images/logo.png" alt="Logo" class="logo" style="width: 3%; height:3%;">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Total Price:</a>
            </li>
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
        </nav>
        </div>

        <!----Secound chiled----->
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Welcome guest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
      </nav>

        <!---Thired Chiled----->
        <div class="bg-light">
           <h3 class="text-center">Lux Shop</h3>
           <p class="text-center">Welcome to My new Online Store</p>
        </div>

        <!---Forth chiled-->
        <div class="row">
            <div class="col-md-10">
                  <!------product------>
                  <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card">
                          <img src="./images/shoe.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Sport Shoe</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                          <img src="./images/Belt.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Lether Belt</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                          <img src="./images/watch.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Luxery Watch</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                          </div>
                        </div>
                    </div>
                      <!--secound row-->
                     <div class="col-md-4 mb-2">
                        <div class="card">
                          <img src="./images/perfume.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Luxery Watch</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="card">
                          <img src="./images/tea.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Luxery Watch</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                          </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="card">
                          <img src="./images/milkpowder.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Luxery Watch</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                          </div>
                        </div>
                    </div>
                  </div>
            </div>

            <div class="col-md-2 bg-secondary p-0">
                <!---side nav--->
               <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Brand1</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light">Brand1</a>
                </li>
               </ul>

               <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link text-light">categories1</a>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link text-light">categories1</a>
                </li>
               </ul>
            </div>
        </div>





      <!----last chiled---footer-->
      <div class="bg-info p-3 text-center">
        <p>All right recieved @ Designed by Anaas-2025</p>
      </div>
      



  <!----Boostrap js link-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>