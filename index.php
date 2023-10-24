<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <title>Employee Management System</title>
        <style>
            .skill_one {
                width: 350px;
                height: 240px;
                border-radius: 20px;
                background: #e0e0e0;
                box-shadow: 20px 20px 60px #bebebe,
                -20px -20px 60px #ffffff;
                margin: 10px;
                max-width: 1024px;
                display: grid;
                margin-left: var(--mb-2);
                margin-right: var(--mb-2);
                }
                .skill_two {
                    width: 350px;
                    height: 240px;
                    border-radius: 20px;
                    background: #e0e0e0;
                    box-shadow: 20px 20px 60px #bebebe,
                    -20px -20px 60px #ffffff;
                    margin: 10px;
                    max-width: 1024px;
                    display: grid;
                    margin-left: var(--mb-2);
                    margin-right: var(--mb-2);
                    }
                .skill_tree{
                    width: 350px;
                    height: 240px;
                    border-radius: 20px;
                    background: #e0e0e0;
                    box-shadow: 20px 20px 60px #bebebe,
                    -20px -20px 60px #ffffff;
                    margin: 10px;
                    max-width: 1024px;
                    display: grid;
                    margin-left: var(--mb-2);
                    margin-right: var(--mb-2);
                    }
            .img{
                width: 70px;
                height: 70px;
              }
        </style>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Employee Management System</a>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title" style="font-size: 15px;"><br> <span class="home__title-color" style="font-size: 40px;">Employee Management System</span><br >
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore minima <br>
                        amet vel dolor fuga minus, neque animi sunt magni assumenda  <br>
                        dicta ex iure illo rationeasperiores. Quis, vitae. Dolores, obcaecati?</h1>

                    <a href="signinn.php" class="button">Register</a>
                    <a href="admin_signin.php" class="button">Admin</a>

                </div>
                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <image class="home__blob-img"  href="assets/img/favicon - Copy.png"/>
                        </g>
                    </svg>
                </div>
            </section>

        <script src="assets/js/main.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </body>
</html>
