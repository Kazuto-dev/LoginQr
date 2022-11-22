<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport"content="width=device-width,initial-scale=1.0">
     <title>quizIT</title>
     <link rel="stylesheet"href="signup.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body>
     <div class="container">
          <div class="left">
           <form action="registration.php" method="POST" class="form">
               <h2>Create an Account</h2>

                <input type="name" name="name" class="box" placeholder="Whole Name" required="">

                <input type="email" name="email" class="box" placeholder="School Email" required="">

                <input type="number" name="studentId" class="box" placeholder="Student Number" required="">

                <input type="course" name="course" class="box" placeholder="Course" required="">

                <input type="password"name="password"class="box" placeholder="Password" required="">

                <button type="submit" class="button" value="post">GO</button>
          </form>
     </div>


     <div class="right">
          <h1>quizIT</h1>
          <h2>Already have an account?</h2>

          <div class="btn">
               <a href="index.php" class="color">Sign In</a>
          </div>

     </div>
</div>
</body>
</html>