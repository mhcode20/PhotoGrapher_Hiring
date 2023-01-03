<?php
include('../db/db.php');
session_start();
if(!isset($_SESSION['admin'])){
  header('location: login.php');
}
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="Admin_penal.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">PhotoKing</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Add User</span>
          </a>
        </li>
        
        
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        
        
        
      </ul>
  </div>
  
  
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number"><?php
            $res = $db->query("SELECT * FROM `order`");
            echo mysqli_num_rows($res);
            ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Customer</div>
            <div class="number"><?php
            $res = $db->query("SELECT * FROM `users`");
            $up = mysqli_num_rows($res);
            echo mysqli_num_rows($res);
            ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Photo Grapher</div>
            <div class="number"><?php
            $res = $db->query("SELECT * FROM `photographers`");
            $up += mysqli_num_rows($res);
            echo mysqli_num_rows($res);
            ?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total User</div>
            <div class="number"><?php echo $up;?></div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>


      
      
      
      <!--
        <div class="sales-boxes">
        
        <div class="recent-sales box">
      <div class="title">Recent Sales</div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">PhotoGrapher</th>
                <th scope="col">User</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $res = $db->query("SELECT * FROM `order` order by id DESC;");
              $i=1;
              while($row = $res->fetch_assoc())
              {
              ?>
              <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $row['photographer']; ?></td>
                <td><?php echo $row['user']; ?></td>
                <td class="<?php
                if($row['status']=='paid')
                {
                  echo 'bg-success';
                }
                else {
                  echo 'bg-danger';
                }
                ?>"><?php echo $row['status']; ?></td>
              </tr>
              <?php $i=$i+1;} ?>
              
            </tbody>
          </table>

        </div>
          
        
        <div class="top-sales box">
          <div class="title">Photo Graphers</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              
              <span class="product font-weight-bold ">Name</span>
            </a>
            <span class="price font-weight-bold">Orders</span>
          </li>
          <?php
            $res = $db->query("select * from `photographers`");
            while ($row = $res->fetch_assoc()) {
              ?>
          <li>
            
            <a href="#">
               
              <span class="product"><?php echo $row['name'];?></span>
            </a>
            <span class="price"><?php
            $temp = $db->query("select * from `order` where photographer='" . $row['email'] . "'");
            echo mysqli_num_rows($temp);
            ?></span>
          </li>
          <?php } ?>
          </ul>
        </div>
      </div>-->
          <?php include('comps/salecomps.php');?>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

