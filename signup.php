<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="main">
        <form class="form" action="db.php" method="post">
            <p class="title">Information Management system</p>
            <p class="message">SIGN UP</p>
            <?php
            session_start();

            if (isset($_GET['error']) && $_GET['error'] == 'incorrect_password') {
                echo '<p class="error-message">Incorrect password. Please try again.</p>';
            }

            if (isset($_SESSION['signup_success']) && $_SESSION['signup_success'] == true) {
                echo '<p class="message">Record created successfully!</p>';
                unset($_SESSION['signup_success']);
            }
            ?>
            <div class="flex">
                <label>
                    <input required="" placeholder="" type="text" class="input" name="firstname">
                    <span>Firstname</span>
                </label>
                <label>
                    <input required="" placeholder="" type="text" class="input" name="lastname">
                    <span>Lastname</span>
                </label>
            </div>
            <label>
                <input class="input" type="email" placeholder="" required="" name="email">
                <span>Email</span>
            </label>
            <label>
                <input class="input" type="password" placeholder="" required="" name="password">
                <span>Password</span>
            </label>
            <button type="submit" class="submit">Submit</button>
            <p class="signin">Already have an account? <a href="signinn.php">Sign in</a></p>
        </form>
    </div>
</body>

</html>