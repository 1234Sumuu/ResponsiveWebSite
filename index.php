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
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lobster&display=swap" rel="stylesheet">
    
  
    <title>Document</title>
</head>
<body>
<?php include 'menu.php'; ?>
    <h1>Welcome to The Book Store</h1>



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/cas-1.png" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/ca-2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/c3-book.png" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

    <section class ="my-5">
        <div class = "py-5">
            <h1 class = "text-center">About Us</h1>
        </div>
        <div>
        <div class = "row">
            <div class = "col-lg-6 col-lg-6 col-12">
                <img src="image/about.png" alt="" class = "img-fluid aboutimage">
            </div>
            <div class = "col-lg-6 col-lg-6 col-12">
                <h1 class = "display-4">This is online BOOK STORE</h1>
                <p class ="py-5" class ="btn btn-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus incidunt exercitationem eius sint fugiat assumenda quo, atque officiis mollitia enim reprehenderit odio labore voluptas quia harum beatae aspernatur doloribus earum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolore ut est quo accusantium quis quibusdam cumque? Aliquam nemo iure perferendis facere quas saepe, architecto ipsam error voluptatum repellendus qui!

                </p>
                <a href="about.php"> See More</a>
            </div>
            </div>
        </div>

    </section>

    <section class ="my-5">
        <div class = "my-5">
        <h2 class ="text-center">Our services</h2>
        </div class = "container-fluid">
            <div class = "row">
                <div class =" col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top" src="image/service-1.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Shareing Books</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero recusandae soluta eos beatae ad temporibus molestiae quo alias minima provident vel, saepe delectus aperiam natus minus pariatur. Tempore, dolor similique.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum odit doloremque alias ullam eos repellat deleniti, cum earum a hic sunt voluptate labore deserunt expedita reiciendis ab culpa? Odit, laborum?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quo beatae incidunt vero quis quaerat quisquam quae! Earum odio, dolorum cum nesciunt error voluptatibus? Nostrum nulla ipsa vero quis sunt.
                    </p>
                    <a href="#" class="btn btn-primary">Take Service</a>
                </div>
                </div>
                </div>

                <div class =" col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top" src="image/service-2.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Online reading Books</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero recusandae soluta eos beatae ad temporibus molestiae quo alias minima provident vel, saepe delectus aperiam natus minus pariatur. Tempore, dolor similique.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum odit doloremque alias ullam eos repellat deleniti, cum earum a hic sunt voluptate labore deserunt expedita reiciendis ab culpa? Odit, laborum?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quo beatae incidunt vero quis quaerat quisquam quae! Earum odio, dolorum cum nesciunt error voluptatibus? Nostrum nulla ipsa vero quis sunt.
                    </p>
                    <a href="#" class="btn btn-primary">Read Book</a>
                </div>
                </div>
                </div>

                <div class =" col-lg-4 col-md-4 col-12">
                <div class="card">
                <img class="card-img-top" src="image/service-3.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Sell Books</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero recusandae soluta eos beatae ad temporibus molestiae quo alias minima provident vel, saepe delectus aperiam natus minus pariatur. Tempore, dolor similique.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum odit doloremque alias ullam eos repellat deleniti, cum earum a hic sunt voluptate labore deserunt expedita reiciendis ab culpa? Odit, laborum?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quo beatae incidunt vero quis quaerat quisquam quae! Earum odio, dolorum cum nesciunt error voluptatibus? Nostrum nulla ipsa vero quis sunt.
                    </p>
                    <a href="#" class="btn btn-primary">Take Service</a>
                </div>
                </div>
                </div>
            </div>
        
    </section>

    <section class ="my-5">
        <div class = "py-5">
        <h2 class ="text-center">Visit Library</h2>
        </div>

        <div class ="container-fluid">
            <div class = "row">
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-1.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-2.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-3.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-4.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-5.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-6.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-7.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-3.png" alt="" class= "image-fluid pb-4">
            </div>
            <div class = "col-lg-4 col-md-4 col-12">
                <img src="image/nb-9.png" alt="" class= "image-fluid pb-4">
            </div>
        </div>
    </div>
    </section>

    <section class ="my-5">
        <div class = "py-5">
        <h2 class ="text-center">Your Opinion</h2>
        </div>
        <div class= "w-50 m-auto">
            <form action="userinfo.php" method ="post"></form>
            <div class ="form-group" >
                <label for="">User Name</label>
                <input type="text" name = "user" autocomplete ="off" class ="form-control">
            </div>
            <div class ="form-group" >
                <label for="">Email</label>
                <input type="text" name = "email" autocomplete ="off" class ="form-control">
            </div>
            <div class ="form-group" >
                <label for="">Contact Number</label>
                <input type="text" name = "mobile" autocomplete ="off" class ="form-control">
            </div>
            <div class ="form-group" >
                <label for="">Comment</label>
                <textarea class="form-control" name= "comments" id="" cols="30" rows="10"></textarea>
            </div>
            <button type ="submit" class ="btn btn-primary" >Submit

            </button>
</div>
        </div>
    </section>

    <footer>
        <p class ="p-3 text-center">@BOOKSHOP.COM</p>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>