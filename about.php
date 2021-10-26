<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lobster&display=swap" rel="stylesheet"> -->
    
  
    <title>Document</title>
</head>
<body>
 <?php
  #include 'menu.php'; 
  ?> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">E-Book Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Settings</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 

<div class="jumbotron">
  <h1>About Book</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, eum adipisci quo autem facilis sint assumenda, quas tenetur eos delectus quos dolore possimus porro reprehenderit temporibus cum ex! Ipsum, facere. 
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum placeat natus nisi incidunt aliquid quaerat, quidem, omnis distinctio iste iure possimus voluptatibus molestiae consequuntur dignissimos, libero nulla voluptas dolores soluta!
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam expedita qui, animi dignissimos nihil eligendi perferendis tenetur recusandae consectetur doloribus, est iste laborum modi. Sit soluta eum cupiditate reprehenderit corporis.

  </p>
</div>

<section id="about" class="mt-5">
          <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0"></div>
          <h2>About Us</h2>
         <div class="row row-cols-1 row-cols-md-3 g-4">
           <div class="col">
             <div class="card about-card h-100 shadow">
               <img src="image/c-book.png" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">Our Mission</h5>
                 <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ex hic qui a distinctio consequuntur unde quia adipisci laboriosam numquam rem officiis, voluptatem non minima exercitationem, possimus harum consequatur quis.</p>
               </div>
             </div>
           </div>
          </div>
        </section>

    <footer>
        <p class ="p-3 text-center">@BOOKSHOPAbout.COM</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>