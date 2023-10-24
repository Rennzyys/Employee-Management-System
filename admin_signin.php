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
               <form class="form" action="register_admin.php" method="post" >
                    <p class="title">Employee Management system</p>
                    <p class="message">Admin</p>

                    <?php
                    if (isset($_GET['success']) && $_GET['success'] == 1) {
                         echo '<p class="success-message">Record created successfully!</p>';
                    }
                    ?>
                    <label>
                         <input class="input" type="email" id="email" placeholder="" required="" name="email">
                         <span>Email</span>
                    </label>
                    <label>
                         <input class="input" type="password" id="password" placeholder="" required="" name="password" required>
                         <span>Password</span>
                    </label>
                    <label>
                         <input class="input" type="password" id="is_admin" placeholder="" required="" name="is_admin" required>
                         <span>Confirm Password</span>
                    </label>
               <button type="submit" class="submit">Submit</button>
          </form>
     </div>
</body>
</html>