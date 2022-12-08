<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.E.T.S</title>
    <style>
    .welcome-text {
        color: white;
        position: relative;
        top: 0.5rem;
        right: 3rem;
        font-size: 17px;
        font-weight: 700;
    }

    .welcome-link {
        text-decoration: none;
        color: #fbbe28;
        font-size: 17px;
    }

    .welcome-link:hover {
        color: #fbbe28;
        text-decoration: underline;
    }

    .logoutbtn {
        width: 100px;
        position: relative;
        right: 7rem;
        padding: 2px 15px;
        border-radius: 70px;
        outline: none;
        background: #fbbe28;
        border: 1px solid white;
        font-size: 1rem;
        font-weight: 600;
        color: #e8f9fd;
        position: relative;
        z-index: 2;
        filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        transition: .3s ease-in-out;
    }

    .logoutbtn:hover {
        color: #fbbe28;
        background: #ff1e00;
        scale: 1.1;
        font-weight: 800;
    }
    </style>
    <link rel="stylesheet" href="./css/style-about.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
</head>

<body>

    <!-- ORIGINAL NAVBAR -->
    <!-- NAV BAR -->
    <nav class="container-fluid sticky-top">
        <!-- LOGO -->
        <a href="index.php">
            <img src="./images/newlogo.png" class="logo" alt="P.E.T.S logo">
        </a>
        <!------------ FOR BACK END ------------>
        <!-- Page navigation link -->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php" class="active">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="forums.php">Forums</a></li>
        </ul>

        <!------------ FOR BACK END ------------>
        <!-- Search Function (OPTIONAL) -->
        <form action="submit" method="get" class="search-bar">
            <button><i class="bi bi-search"></i></button>
            <input type="text" class="search-area" placeholder=" Search" />
            <button><i class="bi bi-mic-fill"></i></button>
        </form>


        <!------------ FOR BACK END ------------>
        <!-- BUTTON (LOGIN)  -->
        <?php
            if(!empty($_SESSION["first_name"])){
                echo
                '
                    <p class="welcome-text"> Welcome <a href="profile.php" class="welcome-link">'.$_SESSION['first_name'].'</a></p>
                
                    <form action="logout.php" method="POST">
                        <button class="logoutbtn" type="submit">Logout</button>
                    </form>
                ';
            } else {
                echo 
                '<a href="login.php">
                    <button class="loginbtn">
                        Login
                    </button>
                </a>';
            }
        ?>
    </nav>

    <!-- Main -->
    <div class="about-container">
        <h1>About us</h1>
        <div class="color-overlay"></div>
    </div>

    <div class="separator">
        <img src="./images/deviders.png" alt="">
    </div>


    <!-- 2nd section -->

    <section id="we-care">
        <div class="container mt-5">
            <div class="row mt-5">

                <div class="col-md-6 center abouttxt-div">
                    <img src="./images/team.jpg" class="cat-img reveal boxdesign parallax mt-4" alt="">
                </div>

                <div class="col-md-6 mt-5 details">

                    <h1 class=" title">We are a volunteer-based <br><b>organization.</b></h1> <br>
                    <p class="par">Our main work is to educate and disseminate information concerning animal welfare,
                        animal care, animal control, and other animal-related concerns. <br>

                        PETS campaigns actively against animal cruelty and pet neglect, including activities like
                        dogfights, horsefights, and wild animals being used for entertainment.
                    </p> <br>

                </div>
            </div>
        </div>
    </section>


    <!-- 3rd Section -->

    <section id="we-need">
        <div class="container mt-5">
            <div class="row mt-5">

                <div class="col-md-5 mt-5 ms-5">

                    <h1 class="title">PETS <br><b>Volunteer</b></h1> <br>
                    <p class="par">PETS (PETS Emergency Tracking site) is a temporary shelter for dogs, cats and
                        As a PAWS Volunteer, you will get assigned a variety of tasks.
                        Every little task, from dog walking to kennel cleaning, makes a huge impact in the lives of the
                        animals at the shelter. There are over 300 animals that need care, and only a handful of
                        caretakers. Office staff attend to dozens of visitors and phone calls, so volunteers that help
                        out are truly appreciated. Other tasks you can help with include assisting in events and doing
                        ocular inspections for prospective adopters.
                    </p> <br>

                </div>

                <div class="col-md-5 card-holder reveal">

                    <img src="./images/teamhands.jpg" class="boxdesign hands" alt="">

                </div>
            </div>
        </div>
    </section>


    <!-- 4th section -->

    <section id="we-care">
        <div class="container mt-5">
            <div class="row mt-5">

                <div class="col-md-6 center">
                    <iframe class="reveal"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30883.258019134566!2d121.044095315625!3d14.63280880000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b784329550fd%3A0x55bbd6106c1c6ffb!2sPAWS%20Animal%20Rehabilitation%20Center!5e0!3m2!1sen!2sph!4v1669663093584!5m2!1sen!2sph"
                        width="550" height="500" style="border-radius: 10px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-6 mt-5 details">

                    <h1 class=" title">How you can<br><b>help</b></h1> <br>
                    <p class="par">OThe shelter and all our programs and campaigns are funded solely by donations. You
                        can donate any amount via bank deposit or Paypal transfer.

                        Bank of the Philippine Islands (Swift no. BOPIPHMM)
                        Acct Name: The Philippine Animal Welfare Society, Inc.
                        USD Acct No. 3944-0021-61
                        PHP Acct No. 3943-0086-11
                        <br><br>
                        Philippine National Bank (Swift no. PNBM PHMM)
                        Acct Name: The Philippine Animal Welfare Society, Inc.
                        Acct No. 1888-70015305
                        <br><br>
                        BDO Savings
                        Acct Name : The Philippine Animal Welfare Society, Inc.
                        Acct No : 0036-4007-0350
                        <br><br>
                        Checks should be issued to Pet Emergency Tracking Site (PETS)
                    </p> <br>

                </div>
            </div>
        </div>
    </section>








    <!-- Upper Footer -->
    <footer class="footer-upper">
        <div class="container ">
            <div class="row footerrow text-center">

                <div class="col-md-4">
                    <a href="#">
                        <img src="./images/newlogo.png" class="footerimg" alt="">
                    </a>
                </div>

                <div class="col-md-6 row footer-content">

                    <div class="col-md-3 text-start">
                        <h6>Mobile app</h6>
                        <a href=" #">Features</a> <br>
                        <a href="#">Live share</a> <br>
                        <a href="#">Video record</a> <br>
                    </div>

                    <div class="col-md-3 text-start">
                        <h6>Community</h6>
                        <a href=" #">Featured</a> <br>
                        <a href="#">The portal</a> <br>
                        <a href="#">Live events</a> <br>
                    </div>

                    <div class="col-md-3 text-start">
                        <h6>Company</h6>
                        <a href="#">About us</a> <br>
                        <a href="contact.php">Contact us</a> <br>
                        <a href="#">History</a> <br>
                    </div>

                </div>

                <div class="col-md-2 footerbutton">

                    <!------------ FOR BACK END ------------>
                    <!-- BUTTON (REGISTER)  -->
                    <div>
                        <a href="registration.php">
                            <button class="register">
                                Register
                            </button>
                        </a>
                    </div>

                    <!------------ FOR BACK END ------------>
                    <!-- BUTTON (LOGIN)  -->
                    <div>
                        <a href="login.php">
                            <button class="loginbtn2">
                                Log in
                            </button>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </footer>


    <!-- Lower footer -->
    <footer class="footer-lower">
        <div class="container">
            <div class="text-center">
                <div class="breakline row">

                    <div class="row socialm">

                        <div class="col-md-4 copyright">
                            <p>&copy; All rights reserved </p>
                        </div>

                        <div class="col-md-4 follow">
                            <p>Follow us:</p>
                        </div>

                        <div class="col-md-4 sicon">
                            <a href="#"><img src="./images/socialicon1.png" alt="Facebook logo"></a>
                            <a href="#"><img src="./images/socialicon2.png" alt="Instagram logo"></a>
                            <a href="#"><img src="./images/socialicon3.png" alt="Linkedin logo"></a>
                            <a href="#"><img src="./images/socialicon4.png" alt="Tiktok log"></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </footer>






    <script type="text/javascript">
    window.addEventListener('scroll', reveal);

    function reveal() {
        const reveals = document.querySelectorAll('.reveal');

        for (let i = 0; i < reveals.length; i++) {

            const windowheight = window.innerHeight;
            const revealtop = reveals[i].getBoundingClientRect().top;
            const revealpoint = 100;

            if (revealtop < windowheight - revealpoint) {
                reveals[i].classList.add('current');
            } else {
                reveals[i].classList.remove('current');
            }
        }
    }
    </script>



</body>

</html>