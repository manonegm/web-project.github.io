<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="wep project.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="car3.png">
    <link rel="stylesheet" href="user.css">
</head>
<body>
    </header>
   <div class="background"></div> 
<div class="container">
    <div class="content delay">
       <div class="text-sci">
       <h2> Log in or Sign Up </h2>  
<p> <b><big><span class="A">  Here you can log in to your existing account 
    or create a new one!</span></big></b> </p>
<p><b><big>Creating an account will help you keep track of your past visits and 
    orders and minimize the time spent on typing your data</big></b> </p>
<div class="social-icons">
<a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a>
<a href="https://www.facebook.com" target="_blank"><i class='bx bxl-facebook' ></i></a>
<a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram' ></i></a>
<a href="https://twitter.com/i/flow/login" target="_blank"><i class='bx bxl-twitter' ></i></a>
</div>
    </div>
        </div>
    <div class="logreg-box">
        <div class="form-box login">
            <form action="login.php" method="POST">
               <h2>Sign In </h2> 
               <div class="input-box">
                  <span class="icon"><i class='bx bxs-envelope' ></i> </span>
              <input type="email" name="email" required>
              <label >Email</label>
              </div> 
              <div class="input-box">
                  <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
              <input type="password" name="pass" required>
              <label >password</label>
              </div>
              <div class="remember-forgot">
                  <LAbel> <input type="checkbox">Remember me</LAbel>
                  <a href="#">Forgot password</a>
              </div> 
              <button type="submit" class="btn">Sign in</button>
              <div class="login-register"> 
                  <p>Don't have an account? <a
                       href="#" class="register-link">Sign up</a></p>
              </div>
            </form>     
                  </div>
                  <div class="form-box register">
                      <form action="insert.php" method="POST">
                         <h2>Sign Up </h2> 
                         <div class="input-box">
                          <span class="icon"><i class='bx bxs-user'></i> </span>
                      <input type="text" name="user" required > 
                      <label >Name</label>
                      </div> 
                         <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope' ></i> </span>
                        <input type="email"  name="email" required>
                        <label >Email</label>
                        </div> 
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="pass" required>
                        <label >password</label>
                        </div>
                        <div class="input-box">
                          <span class="icon"><i class='bx bxs-phone' ></i></span>
                      <input type="number" name="phone" required>
                      <label >Phone Number</label>
                      </div>
                      <div class="input-box">
                          <span class="icon"><i class='bx bxs-car' ></i></span>
                      <input type="model" name="model" required>
                      <label >Car Model</label>
                      </div>
                        <div class="remember-forgot">
                            <LAbel> <input type="checkbox">I agree to the terms & conditions</LAbel>
                            
                        </div> 
                        <button  class="btn">Sign Up</button>
                        <div class="login-register"> 
                            <p>Already have an account? <a
                                 href="#" class="login-link">Sign in</a></p>
                        </div>
                      </form>     
                            </div>
              </div>
          </div>
<script src="user.js"> </script>
<script src="wep project.js"></script>
</body>
</html>
