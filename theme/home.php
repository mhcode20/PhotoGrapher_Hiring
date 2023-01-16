<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo King</title>
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="theme/style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <header class="raihan p-5">
		<div>
        <nav class="navbar navbar-expand-sm mb-5">
            <div class="container-fluid" >
              <!-- <a class="navbar-brand" href="#opu">Sign in</a> -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse ml-auto" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                  
                  <li class="nav-item" id="opu">
                  <?php
if(isset($_SESSION['email']) || isset($_SESSION['pg'])){
  echo '<a class="nav-link" href="photographers_list.php">Photo Graphers</a>';
}
else {
                    echo '<a class="nav-link" href="./signin.php">Sign in</a>';
}
?>
                   
                  </li>
                  <li class="nav-item" id="opu">
                  <?php
                  if(isset($_SESSION['email'])){
                    echo '<a class="nav-link" href="u_profile.php">Profile</a>';
                  }
                  else if(isset($_SESSION['pg'])){
                    echo '<a class="nav-link" href="pg_profile.php?email='.$_SESSION['pg'].'">Profile</a>';
                  }
                  else {
                    echo '<a class="nav-link" href="./signup_users.php">Create Account</a>';
                  }
                  ?>
                  </li>
                  <li class="nav-item" id="opu">
                    <?php 
                    if(isset($_SESSION['email']) || isset($_SESSION['pg'])){
                     
                    }
                    else {
                      echo '<a class="nav-link" href="./signup_photographers.php">Become A Photographer</a>';
                    }
                    ?>
                    
                  </li>
                  
                  <li class="nav-item"id="opu">
<?php
if(isset($_SESSION['email']) || isset($_SESSION['pg'])){
  echo '<a class="nav-link"href="./db/logout.php">Log Out</a>';
}
?>

                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
        
         <div class="text-center pt-3"     style="background: rgb(255 255 255 / 52%);padding:20px 0;">
             <h1 class="babor py-3">Hire The Right Photographer Today!</h1>
             <li class="nav-item" id="opu">
              <a class="nav-link" id="hire" href="
              <?php
              if(isset($_SESSION['email'])){
                echo 'photographers_list.php';
              }
              else {
                echo 'signin.php';
              }
              ?>
              ">Hire A Photographer</a>
             </li>
             <div>
                 <a href="signup_photographers.php"><p class="my-2">Want to become a Photographer? </p></a>
             </div>
         </div>
        </div>
    </header>
    
     
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./theme/image/wedding1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./theme/image/wedding3.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./theme/image/food5.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <section>
      <div class="card-group mt-5">
        <div class="card">
          <img src="./theme/image/rafi.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Wedding Photographer</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="./theme/image/opurbo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Fashion Photographer</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 min ago</small>
          </div>
        </div>
        <div class="card">
          <img src="./theme/image/raihan.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Model Photographer</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </section>
    <section>
      <h1> *Photographer Types</h1>
      <div>
      <ul>* Wedding Photographer</ul>
      </div>
      <div>
      <ul> *Fashion Photographer</ul>
    </div>
    <div>
      <ul>  *Photographer of Models</ul>
      </div>
      <div>
        <ul> *Photographer of Food</ul>
        </div>
        <div>
          <ul> * Photographer for Special</ul>
          </div>

    </section>
    <section id="About Us">
<div>
      <h1>About Us</h1>
      <p> 
        Get the best Results for Commercial Photographer Bangladesh. Find what you are looking for! 99% Match on Commercial Photographer London. Find Here - Free, Private and Secure. Always Facts. Privacy Friendly. Results & Answers. Unlimited Access. The Best Resources.
      </p>
</div>

    <section id="Service">
      <div>
        <h1> Service</h1>
        <p>
          High-quality photography is critical in capturing and engaging the attention of your online audience. Professionally shot, recent photos of your team and location help you build trust online. A library of high-resolution images including event photography, lifestyle photography and corporate photography empowers both your digital marketing strategy and your website’s visual storytelling. Of course, you probably already know that top-quality product photography is a big factor in boosting ecommerce conversions (making shoppers 3x more likely to purchase). But did you know that your tweets will get 155% more retweets (and 55% more leads) more with relevant imagery? It’s true.
        </p>
    </section>
  
    <footer>
      <div class="babor2 bg-black">
        <div class="row g-2">
          <div class="col-lg-4 col-md-6 col-12">
<ul class="list-unstyled">
  <h4 class="text-light">Useful Links</h4>
  <li><a href="./Hire A Photographer.html">Hire A Photographer</a></li>
  <li><a href="#">FAQ</a></li>
  <li><a href="#">Terms and Conditions</a></li>
  <li><a href="#">Become A Photographer</a></li>
</ul>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <ul>
              <h4 class="text-light">Contact</h4>
              <li><a href="#">Raihan</a></li>
              <li><a href="#"> Dhaka</a></li>
              <li><a href="#">01757373552</a></li>
              <li><a href="#">raihanuddin2714@gmail.com</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <ul>
              <h4 class="text-light">Connect</h4>
              <li><a href="https://www.facebook.com/Raihan2714">Facebook</a></li>
              <li><a href="https://youtu.be/Xhul-dwevQg">YouTube</a></li>
              <li><a href="#">Whatsup</a></li>
              <li><a href="#">Instagram</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>