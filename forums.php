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
    <link rel="stylesheet" href="./css/style-forum.css">
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
            <img src="./images/newlogo.png" class="logo" alt="P.E.T.S logo">
        </a>
        <!------------ FOR BACK END ------------>
        <!-- Page navigation link -->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="forums.php" class="active">Forums</a></li>
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


    <section>
        <div class="container">
            <div class="subforum">
                <div class="subforum-title">
                    <h1>General Information</h1>
                    <span class="create-post">
                        <button type="button" class="createpostbtn" id="createpostbtn" data-bs-toggle="modal"
                            data-bs-target="#createpostModal">Create Post</button>
                    </span>
                </div>
                <?php $data = mysqli_fetch_array($result1); ?>
                <?php
                    while($row = mysqli_fetch_array($result3)){?>
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center">
                        <img src="
                                <?php 
                                if($row['profile_image'] == ""){
                                echo "./images/defaultPFP.jpg"; 
                                } else {
                                    echo "./profile-image/".$row['profile_image'];
                                }?>" style='height: 100%; width: 100%; object-fit: contain; border-radius: 50%;'>
                    </div>
                    <div class="subforum-description subforum-column">
                        <h4><?php echo $row['post_title'] ?></h4>
                        <p><?php echo $row['post_message'] ?></p>
                        <p><?php if($row['post_address'] == "" && $row['post_city'] == "" && $row['post_zip_code'] == ""){
                                    echo 'Please Add Location';
                                } else {echo 'Last Seen At: '.$row['post_address'].' '.$row['post_city'].', '.$row['post_zip_code'];}
                                ?></p>
                    </div>
                    <div class="subforum-stats subforum-column center">
                        <span>24 Posts | 12 Topics</span>
                    </div>
                    <div class="subforum-info subforum-column">
                        <b><a href="">Last post</a></b> by <a href=""><?php echo $row['first_name'] ?></a>
                        <br>on <small><?php echo $row['date_created'] ?></small>
                        <form action="delete.php" method="POST">
                            <input type="submit" value="Delete" name="delete"
                                onclick="return confirm('Do you want to delete?')" />
                            <input type="hidden" name="id" value="<?php echo $row["post_id"] ?>" />
                        </form>
                    </div>
                </div>
                <?php } ?>

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


    <!-- Edit Modal -->
    <div class="modal fade" id="createpostModal" tabindex="-1" aria-labelledby="createpostModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">Create Post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="createPost.php" method="post">
                        <div class="form-group">
                            <label for="post_title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="post_title" name="post_title" ?>
                        </div>
                        <div class="form-group mt-1">
                            <label for="post_message" class="form-label">Message</label>
                            <textarea cols="30" rows="10" class="form-control" id="post_message"
                                name="post_message"></textarea>
                        </div>
                        <div class="form-group mt-1">
                            <fieldset>
                                <legend>Last Seen:</legend>
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="<?php echo $data['address']?>">
                                <label for="city" class="form-label" value="<?php $data['city']?>">City</label>
                                <input type="text" class="form-control" id="city" name="city"
                                    value="<?php echo $data['city']?>">
                                <label for="region" class="form-label">Region/State</label>
                                <input type="text" class="form-control" id="region" name="region"
                                    value="<?php echo $data['region']?>">
                                <label for="zipcode" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="zipcode" name="zipcode"
                                    value="<?php echo $data['zip_code']?>">
                            </fieldset>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" value="Create Post" name="createPost" class="btn btn-primary">
                </div>
            </div>
            </form>
        </div>
    </div>
</body>