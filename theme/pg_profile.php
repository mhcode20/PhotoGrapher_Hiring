<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <title>Profile</title>
</head>
<body>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="upload/<?php echo $row['img'];?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $row['name'];?></h5>
            <p class="text-muted mb-1">
              <?php $inum = round($rating['avg']);
              $i = 0;
              while($i<$inum){
              ?>
              <img src="theme/image/star.svg" class="" style="width: 30px;" alt="" srcset="">
              <?php $i++; } ?>
            </p>
            <p class="text-muted mb-1"><?php echo $row['type'];?></p>
            
            <p class="text-muted mb-4"><?php echo $row['address'];?></p>
            
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <b class="text-warning">CV</b>
                <p class="mb-0"><a href="<?php echo $row['cv'];?>">Download</a></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <iframe width="560" height="315" src="<?php echo $row['vr'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['name'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['email'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['phone'];?></p>
              </div>
            </div>
            
            
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['address'];?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="row">
              <?php 
                $e = $row['email'];
                $dres = $db->query("SELECT * FROM `demoimg` WHERE pg='$e'");
                while($imgl = $dres->fetch_assoc())
                {
              ?>
              <div class="col-sm-4">
                <a href="#" >
                  <img src="upload/<?php echo $imgl['img']; ?>" class="img-thumbnail">
                </a>
              </div>
              <?php } ?>
              
              
            </div>
            <?php
            if (!isset($_SESSION['pg'])) {


              ?>
            <div class="row mt-4">
              <div class="m-4">
                <form action="#" method="get">
                  <label>Rate this photographer acording to his performance:</label><br>
                  <input type="radio" name="rate" value="1"><label for="">&nbsp; Very Bad</label><br>
                  <input type="radio" name="rate" value="2"><label for="">&nbsp; Bad</label><br>
                  <input type="radio" name="rate" value="3"><label for="">&nbsp; Good</label><br>
                  <input type="radio" name="rate" value="4"><label for="">&nbsp; Very Good</label><br>
                  <input type="radio" name="rate" value="5"><label for="">&nbsp; Awesome</label><br>
                  <input type="hidden" name="email" value="<?php echo $_GET['email'];?>">
                  <input type="submit" style="margin-left: 100px;" value="Submit" name="submit"/>
                </form>
              </div>
            </div>
            <?php } ?>
          </div>
            


        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>