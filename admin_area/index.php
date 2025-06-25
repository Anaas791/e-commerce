<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
        <!---boostrap Css link--->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="../ans.css">
</head>
<body>
        <!------navbar------>
    <div class="container-fluid p-0">
        <!----First chiled---->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <nav class="container-fluid">
                <img src="../images/logo.png" alt="logo" style="height: 6%; width:6%;">
                <nav class="navbar navbar-expand-lg">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome guest</a>
                    </li>
                  </ul>
                </nav>
            </nav>
        </nav>

         <!---Ssecound chiled--->
         <div class="navbar-light">
            <h3 class="text-center p-3">Manage Details</h3>
         </div>

         <!----Thired chiled--->
         <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/shoe.jpg" alt="tea" class="adminimage" style="width: 100px; object-fit:contain;"></a>
                    <p class="text-light text-center">Admin name</p>
                </div>
                <div class="button text-center m-3">
                    <button><a href="" class="nav-link text-light bg-info my-1">Inser Product</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View product</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Barnds</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All payment</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
         </div>
    </div>


    <!----last chiled---footer-->
      <div class="bg-info p-3 text-center" style="position:absolute; bottom:0%;" >
        <p>All right recieved @ Designed by Anaas-2025</p>
      </div>



     <!----Boostrap js link-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>