
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="theme/signin.css">
    <title>signin</title>

</head>
<body>
    
  <div class="wrapper">
    <div class="title">Login Form</div>
    <form action="#" method="POST">
      <div class="field">
        <input type="email" name="email">
        <label>Email Address</label>
      </div>
      <div class="field">
        <input type="password" name="pass">
        <label>Password <?php if(isset($password)){ echo $password;}?></label>
      </div>
      <div class="content">
        <div class="checkbox">
            <input type="checkbox" id="remember-me" name="rem">
          <label for="remember-me">Remember me</label>
        </div>
        <div class="pass-link"><a href="#">Forgot password?</a></div>
      </div>
      <div class="field">
        <input type="submit" value="Login" name="login">
      </div>
      <div class="signup-link">Not a member? <a href="signup_users.php">SignUp now</a></div>
      <div class="signup-link">Are you a Photographer? <a href="signIn_pg.php">SignIn Here</a></div>
      
    </form>
  </div>
</body>
</html>