<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/log.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body background="./tractor.jpeg">
   <form action="<?php echo site_url('UserController/insert');?>" method="POST">
  
  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      
      <button onclick="window.location.href='splogin';" class="submit " type="button">Sign In</button>
      <p class="forgot-pass"onclick="window.location.href='spassrecover';" class="submit " type="button">Forgot Password ?</p>

      
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and continue the ahead journey with AgriMinds!!!!</p>
          
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn" onclick="window.location.href='signupsp';" class="submit " type="button">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <a href='http://localhost:8080/signup'>
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text">
        </label>
        <label>
          <span>Email</span>
          <input type="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password">
        </label>
        
        <button type="button" class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>
<script type="text/javascript" src="js/log.js"></script>
</body>
</html>