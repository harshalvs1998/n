<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="../n.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Zen+Loop&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        .alert-success {
            z-index: 1;
            background: #D4EDDA;
            font-size: 18px;
            padding: 20px 40px;
            min-width: 420px;
            position: fixed;
            right: 0;
            top: 10px;
            border-left: 8px solid #3AD66E;
            border-radius: 4px;
        }
        
        .alert-error {
            z-index: 1;
            background: #FFF3CD;
            font-size: 18px;
            padding: 20px 40px;
            min-width: 420px;
            position: fixed;
            right: 0;
            top: 10px;
            border-left: 8px solid #FFA502;
            border-radius: 4px;
        }
    </style>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact</title>
</head>

<body>
    <!---NAV BAR HARSHALVS-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html"><img src="../imges/nlogo1.jpeg" alt="jai MLHAR" style="height: 5rem;">
                <h4 style="font-size:large;color: rgb(243, 130, 89);font-family: 'Zen Tokyo Zoo', cursive; font-weight: bolder;">JAI MALAHAR TRANSPORT</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <h4 class="navbar-toggler-icon"></h4>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav m-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active " aria-current="page" href="../index.html">HOME</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="../about.html">ABOUT US</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="../service.html">SERVICES</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  " href="../gallery.html">GALLERY</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="contact.html">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    </div>
    <form class="contact" action="" method="post">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">contact us</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="wrapper">
                            <div class="row no-gutters mb-5">
                                <div class="col-md-7">
                                    <div class="contact-wrap w-100 p-md-5 p-4">
                                        <h3 class="mb-4">Contact Us</h3>
                                        <?php echo $alert; ?>
                                        <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="name">Full Name</label>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="email">Email Address</label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="label" for="subject">Phone Number</label>
                                                        <input type="number" class="form-control" name="phone" id="Phone" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="label" for="#">Message</label>
                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" maxlength="100"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Send" class="btn btn-primary" name="submit">
                                                        <div class="submitting"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex align-items-stretch">
                                    <div id="map" style="border: 1px solid black;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3772.0865111121834!2d73.03717126490027!3d19.015909187122364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1soffice%20no%20105%20raheja%20arcade%20belapur!5e0!3m2!1sen!2sin!4v1630778721817!5m2!1sen!2sin"
                                            width="544" height="560" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Address:</span> OFFICE NO-105,RAHEJA ARCADE,<br>PLOT NO-61,SECTOR-11 <br>CBD BELAPUR, NAVI MUMBAI-400614</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Phone:</span> <a href="#" style="color: black;"> +91 8652862888 <br> +91 9702939777 <br> TEL-022-27572888</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a href="mailto:jaymalhartransport3@gmail.com" style="color: black !important;">jaymalhartransport3@gmail.com <br>jaimalhartransport3@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Website</span> <a href="../index.html">Jai Malhar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <div class="container5">
            <h5 class="con5h5">Contact us</h5>
            <h2 class="con5h2">JAI MALAHAR TRANSPORT</h2>
            <h4 class="con5h4">OFFICE NO-105, RAHEJA ARCADE, PLOT NO-61, SECTOR-11, CBD BELAPUR, NAVI MUMBAI-400614</h4>
            <h4 class="con5h4">TEL - 022-27572888</h4>
        </div>
        <!---footer-->
        <footer>
            <div class="content">
                <div class="left box">
                    <div class="upper">
                        <div class="topic">About us</div>
                        <p>We draw strength from our highly experienced professionals’ associates from Transport Services Industry, and boasts of its wide and diverse experience of more years in the Transport Services Industry. </p>
                    </div>
                    <div class="lower">
                        <div class="topic">Contact us</div>
                        <div class="phone">
                            <a href="#" style="color: white;text-decoration: none;"><i class="fas fa-phone-volume"></i>022-27572888</a>
                        </div>
                        <div class="email">
                            <a href="mailto:jaimalhartransport3@gmail.com" style="color: white;text-decoration: none;"><i class="fas fa-envelope"></i>jaimalhartransport3@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="middle box">
                    <div class="topic">Why Us?</div>
                    <div><a style="color: white;text-decoration: none;"> Timeliness in delivery</a></div>
                    <div><a style="color: white;text-decoration: none;">Qualitative outsourcing</a></div>
                    <div><a style="color: white;text-decoration: none;">Ethical business practices</a></div>
                    <div><a style="color: white;text-decoration: none;">Complete logistic solutions</a></div>
                    <div><a style="color: white;text-decoration: none;">Strong business associations</a></div>
                    <div><a style="color: white;text-decoration: none;">Experienced team of professionals</a></div>
                </div>
                <div class="right box">

                    <form class="contact" action="sendemail.php" method="post">
                        <input type="text" name="email" placeholder="Enter email address" required>
                        <input type="submit" name="submit" value="Send">
                        <div class="media-icons">
                            <a href="https://www.google.co.in/?client=safari&channel=mac_bm" style="color: white;text-decoration: none;"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" style="color: white;text-decoration: none;"><i class="fab fa-instagram"></i></a>
                            <a href="#" style="color: white;text-decoration: none;"><i class="fab fa-twitter"></i></a>
                            <a href="#" style="color: white;text-decoration: none;"><i class="fab fa-youtube"></i></a>
                            <a href="#" style="color: white;text-decoration: none;"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="bottom">
                <p>Copyright © 2020 <a href="#" style="color: white;text-decoration: none;">Jai Malahar Transport </a> All rights reserved</p>
            </div>
        </footer>
        <!-- JavaScript Bundle with Popper -->
        <script type="text/javascript">
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/jquery.min.js"></script>


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="js/google-map.js"></script>
        <script src="js/main.js"></script>
</body>

</html>