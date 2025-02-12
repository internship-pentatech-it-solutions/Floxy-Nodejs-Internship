<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Responsive Registration Form | CodingLab</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <div class="content">
        <form action="signup_handler.php" method="post">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" placeholder="Enter your name" required name="fullName"/>
            </div>
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" placeholder="Enter your username" required name="userName" />
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" placeholder="Enter your email" required name="email" />
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" placeholder="Enter your number" required name="phoneNumber" />
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="text" placeholder="Enter your password" required name="password"/>
            </div>
            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="text" placeholder="Confirm your password" required name="confirmPassword"/>
            </div>
          </div>

          <div class="button">
            <input type="submit" value="Register" />
          </div>

          <p>Dont have an account? <a href="./login.html">Signup</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
