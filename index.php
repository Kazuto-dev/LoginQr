<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport"content="width=device-width,initial-scale=1.0">
     <title>Test</title>
     <link rel="stylesheet"href="loginstyle.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body>
     <div class="container">
          <div class="left">
          <form action="login.php" method="POST" class="form">
               <h2>Sign In</h2>

                <input type="number" name="studentId" class="box" placeholder="Student Number" required="">

                <input type="password"name="password"class="box" placeholder="Password" required="">

                <button class="button" type="submit" value="post">Log In</button>
          </form>
     </div>


     <div class="right">

          <h1>quizIT</h1>

          <div class="btn">
               <a href="signup.php" class="color">Sign Up</a>
          </div>

     </div>
</div>
</body>
</html>