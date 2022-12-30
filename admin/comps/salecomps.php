<?php 


?>

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
              <!--<img src="images/sunglasses.jpg" alt="">-->
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
               <!--<img src="images/jeans.jpg" alt="">-->
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
      </div>