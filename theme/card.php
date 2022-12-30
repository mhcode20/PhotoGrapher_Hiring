<div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./upload/<?php echo $row['img']; ?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><a href="pg_profile.php?email=<?php echo $row['email']?>"><?php echo $row['name']; ?></a></h5>
              <p class="card-text">Address:<?php echo $row['address']; ?></p>
              <p>Phone Number:<?php echo $row['phone']; ?></p>
              <p>Email:<?php echo $row['email']; ?></p>
              <p><?php echo $row['type']; ?></p>
              <div class="btn">
              <a href="payment.php?price=<?php echo $row['price']."&name=".$row['name']."&email=".$row['email']; ?>"><button type="button">Confirm</button></a>
              </div>
              <p class="card-text"><small class="text-muted">Starting at: <?php echo $row['price']; ?></small></p>
            </div>
          </div>
        </div>
      </div>