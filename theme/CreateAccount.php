<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="theme/CreateAccount.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <form method="post">
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      

          <label for="Name"><b>Fullname</b></label>
          <input type="text" placeholder="Enter the name" name="name" id="name" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>

          <label for="Phone"><b>Phone Number</b></label>
          <input type="text" placeholder="Enter Phone Number" name="phone" id="phone" required>
      
          <label for="pass"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pass" id="psw" required>
      
          <label for="repass"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="repass" id="psw-repeat" required>
          <hr>
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" name="Submit" class="registerbtn">Register</button>
        </div>
      
        <div class="container signin">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
</form>
</body>
</html>