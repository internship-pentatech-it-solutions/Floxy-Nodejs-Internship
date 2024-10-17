<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Responsive Registration Form | CodingLab</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
     .input-box {
        width: 100%!important;
      }
     .container {
        max-width: 500px;
      }
     .user-details {
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="title">Login</div>
      <div class="content">
        <form action="login_handler.php" method="post">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" name="username" placeholder="Enter your username" required />
            </div>

            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" name="password" placeholder="Enter your password" required />
            </div>
          </div>

          <div class="button">
            <input type="submit" value="Login" />
          </div>
          <p>Don't have an account? <a href="./signup.html">Sign up</a></p>
        </form>
      </div>
    </div>
  </body>
</html>