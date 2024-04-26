<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <style>
        *{
            
        }
        .nav-link{
            font-size: 15px;
        }
        .nav-link:hover:not(button a){
            text-decoration: underline;
            text-decoration-thickness: 5px;
            /* transform: scale(1); */

        }
        .btn{
            padding: 2px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary nav-pills ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BerwaShop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mr-auto" id="navbarNav">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link ml-1" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Contact</a>
              </li>
              </ul>
              
              <ul class="navbar-nav " style="margin-left: 725px;">
                <li class="nav-item">
                  <button style="" class="btn btn-outline-secondary btn-sm"><a class="nav-link" href="#">Login</a></button>
                </li>
                <li class="nav-item">
                    <button style="margin-left: 10px;" class="btn btn-outline-secondary btn-sm"><a class="nav-link" href="#">SignUp</a></button>
                  </li>
              </ul>
              
                
            </ul>
          </div>
        </div>
      </nav>
          <!-- uiffffffffffffhdufhydiufhydfiudhfiudfhid -->
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item">
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
              </div>
              <div class="carousel-item active">
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
              </div>
              <div class="carousel-item">
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
              </div>
            </div>
          </div>
</body>
</html>