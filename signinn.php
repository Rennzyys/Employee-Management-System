<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>signin</title>
     <link rel="stylesheet" href="./css/style.css">
</head>

<body>
     <div class="main">
          <form class="form" action="register.php" method="post">
               <p class="title">Employee Management system</p>
               <p class="message">SIGN IN</p>

               <?php
               if (isset($_GET['error']) && $_GET['error'] == 'incorrect_password') {
                    echo '<p class="error-message">Incorrect password. Please try again.</p>';
               }
               ?>
               <label>
                    <input class="input" type="email" id="email" placeholder="" required="" name="email">
                    <span>Email</span>
               </label>
               <label>
                    <input class="input" type="password" id="password" placeholder="" required="" name="password">
                    <span>Password</span>
               </label>
               <button type="submit" class="submit">Log in</button>
               <p class="signin">Register Here <a href="signup.php">Sign up</a> </p>
          </form>
     </div>
</body>

</html>