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
    <link rel="stylesheet" href="./css/style.css">
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
        <a href="#">
            <!-- <img src="./images/newlogo.png" class="logo" alt="P.E.T.S logo"> -->
        </a>
        <!------------ FOR BACK END ------------>
        <!-- Page navigation link -->
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
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

    <!-- MAIN -->
    <div class="main">

        <div class="maintext">
            <h1>Helping <b>YOU</b> </br>find your <b>PETS</b> </h1>
            <h5>Finding our beloved pets has never <br> been this easy</h5>
            <br>
            <a href="login.php">
                <button class="mainbtn" style="<?php 
                if(!empty($_SESSION["email"])){
                        echo 'display: none;';
                    } else {
                        echo '';
                    }?>">
                    Log in
                </button>
            </a>
        </div>

        <div class="mainimg">
            <img src=" ./images/HeroIMG1.png" alt="">
        </div>

    </div>

    <div class="separator">
        <img src="./images/deviders.png" alt="">
    </div>



    <!-- How can we find (2nd SECTION) -->

    <section id="services">

        <div class="container text-center">

            <h1 class="bold">How can we find your pets?</h1>
            <p class="ms-5 me-5 par2">We are not a government agency that picks up strays. Due to very limited space
                at
                the
                shelter, <br>
                admission
                is strictly reserved for animals involved in cruelty cases pending in court.
            </p> <br>

            <div class="row text-center offer reveal">

                <div class="col-lg-3 services mx-4 py-4 px-3">
                    <img src="./images/carddog1.png" class="services-img" alt="">
                    <h4 class="bold">Social media <br> announcement</h4>
                    <p class="par2">To post your lost pet in the PAWS Facebook page, kindly email their photo to
                        pets.com
                        with the subject line LOST PET.</p>
                </div>

                <div class="col-lg-3 services mx-4 py-3 px-3">
                    <img src="./images/carddog2.png" class="services-img" alt="">
                    <h4 class="bold">Community <br> search</h4>
                    <p class="par2">Check your city pound immediately. If your pet was loose on the streets, he/she
                        may
                        have been
                        picked up by authorized catchers.</p>
                </div>

                <div class="col-lg-3 services mx-4 py-4 px-3">
                    <img src="./images/carddog3.png" class="services-img" alt="">
                    <h4 class="bold">Fostering <br> found pets</h4>
                    <p class="par2">People are encouraged to foster the lost pet or find someone to foster it, in
                        order
                        to
                        give the
                        owner a chance to make contact.</p>
                </div>

            </div>
        </div>
    </section>



    <!-- We care (3rd SECTION) -->

    <section id="we-care">
        <div class="container mt-5">
            <div class="row mt-5">

                <div class="col-md-6 center">
                    <img src="./images/puzzycat2.png" class="cat-img reveal" alt="">
                </div>

                <div class="col-md-6 mt-5">

                    <h1 class="title">We care your pet <br><b>As you care</b></h1> <br>
                    <p class="par">PETS is a credible nationwide non-profit organization, composed of a network
                        of
                        committed,
                        compassionate and trustworthy individuals and institutions that initiates and leads in the
                        promotion of animal welfare, and the protection of all animals. PETS envisions a nation that
                        respects animals, practices responsible pet ownership, and protects wildlife.
                    </p> <br>


                    <!------------ FOR BACK END ------------>
                    <!-- BUTTON (LOGIN)  -->
                    <a href="#">
                        <button class="big-btn" style="<?php if(!empty($_SESSION["email"])){
                            echo 'display: none;';
                        } else {
                            echo '';
                        }?>">
                            Log in
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </section>



    <!-- We-need (4th SECTION) -->

    <section id="we-need">
        <div class="container mt-5">
            <div class="row mt-5">

                <div class="col-md-5 mt-5 ms-5">

                    <h1 class="title">We need you to <br><b>Find us</b></h1> <br>
                    <p class="par">PETS (PETS Emergency Tracking site) is a temporary shelter for dogs, cats and
                        other
                        animals
                        rescued from cruelty or neglect with the goal of rehabilitating and placing them in loving
                        homes.
                    </p> <br>


                    <!------------ FOR BACK END ------------>
                    <!-- BUTTON (LOGIN)  -->
                    <a href="#">
                        <button class="big-btn" style="<?php if(!empty($_SESSION["email"])){
                            echo 'display: none;';
                        } else {
                            echo '';
                        }?>">
                            Register
                        </button>
                    </a>

                </div>

                <div class="col-md-5 card-holder reveal">

                    <div class="card card-icon">
                        <img src="./images/caticon.png" alt="">
                        <h1>246</h1>
                        <h4>Pet Found</h4>
                    </div>

                    <div class="card card-icon">
                        <img src="./images/pawicon.png" alt="">
                        <h1>150</h1>
                        <h4>Pet Rescue</h4>
                    </div>

                    <div class="card card-icon dogicon">
                        <img src="./images/dogicon.png" alt="">
                        <h1>321</h1>
                        <h4>Pet Lost</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials (5th SECTION) -->

    <section id="testimonials">
        <div class="container">

            <div class="text-center testitext">
                <h1 class="bold">Testimonials from pet lovers</h1>
                <p class="ms-5 me-5 par2 para">
                    "Sometimes The Best Medicine is Unconditional Love From Your Pet"
                </p>
            </div>

            <div class="testi reveal">

                <div class="col-md-3">
                    <img src="./images/petlover.png" alt="">
                </div>

                <div class="col-md-7">
                    <h4 class="bold">Jhon Walker</h4>
                    <p class="fordogs">Owner of 4 dogs</p>
                    <p> "Dogs have a way of fingdingg the people who need them and filling and emptiness we didn't
                        ever
                        know we had, dog is the most faithful of animals and would be much esteemed were it not so
                        common. Our Lord God has made his greatest gift the commonest"
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Our Team (6th SECTION) -->

    <section id="our-team">
        <div class="container">

            <div class="text-center">

                <h1 class="bold">Our Team</h1>
                <p class="ms-5 me-5 par2 para">
                    Our main work is to educate and disseminate information concerning animal welfare, <br> animal
                    care,
                    animal control, and other animal-related concerns.
                </p> <br>

            </div>

            <div class="text-center team row reveal">

                <div class="col-md-4">

                    <img src="./images/webdev1.png" alt="">
                    <div class="nametags">

                        <div class="text-center">
                            <h5 class="bold">Dave Pua</h5>
                            <p>Full-Stack Developer</p>
                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <img src="./images/webdev2.png" alt="">
                    <div class="nametags">

                        <div class="text-center">
                            <h5 class="bold">Ferjade Fortuito</h5>
                            <p>Full-Stack Developer</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <img src="./images/webdev3.png" alt="">
                    <div class="nametags">

                        <div class="text-center">
                            <h5 class="bold">Bryan Blanco</h5>
                            <p>Full-Stack Developer</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Pets  (7th SECTION) -->

    <section id="whypets">

        <img src="./images/Ellipse1.png" class="divider" alt="">

        <div class="container">

            <div class="text-center why reveal">

                <h1 class="bold">Why go with PETS? </h1> <br>
                <p class="ms-5 me-5 par2 para">
                    Because we know that even the best technology is only as <br> good as the people behind it. 24/7
                    tech
                    support.
                </p> <br>


                <!------------ FOR BACK END ------------>
                <!-- BUTTON (LOGIN)  -->
                <a href="contact.php">
                    <button class="whybtn">
                        Contact Us
                    </button>
                </a>

            </div>

        </div>
        <img src="./images/footerpet.png" class="dpets" alt="">
    </section>


    <!-- Footer (8th SECTION) -->
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
                                Login
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