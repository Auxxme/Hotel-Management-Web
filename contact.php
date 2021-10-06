<?php

error_reporting(E_DEPRECATED);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thilini_hotel";


//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
    die("connection failed" . mysqli_connect_errno());
}


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $country = $_POST['country'];
    $adress = $_POST['adress'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(name,country,adress,email,contact_number,message)VALUES('$name','$country','$adress','$email','$contact_number','$message')";

    if (mysqli_query($conn, $sql)) {
        $success= 'contact rejistration successfully';
    } else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
       
        <title>HillTown Resort</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php
        include './header.php';
        ?> 


        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Contact Us</h3>
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="contact-us.html">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Get Contact Area =================-->
        <section class="get_contact_area">
            <div class="container">
                <div class="row get_contact_inner">
                    <div class="col-md-6">
                        <div class="left_ex_title">
                            <h2>get in <span>touch</span></h2>
                        </div>
                        <form class="contact_us_form row m0" action="" method="post"novalidate="novalidate">
                            
                            <?php
                            if($success){
                                ?>
                            <p class="alert alert-success"><?php echo $success; ?></p>
                                
                            <?php
                            }
                            ?>
                            
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            
                            <div class="form-group col-md-12">
                                
                                <select class="form-control"name="country" id="name"  placeholder="country">
                                    <option hidden>country</option>
                                <option>Sri Lanka</option>
                                <option>England</option>
                                <option>Australia</option>
                                <option>canada</option>
                                <option>India</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="adress" placeholder="adress">
                            </div>

                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="number" name="contact number" placeholder="contact number">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="message" id="message" rows="2" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" name="submit" class="btn submit_btn form-control">submit now</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="right_contact_info">
                            <div class="contact_info_title">
                                <h3>Contact info</h3>
                                <p>Have any Queries? Let us know. We will clear it for you at the best.</p>
                            </div>
                            <div class="contact_info_list">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Office</h4>
                                        <p>Hill Town Resort, 215/B Mallin Street, <br />Colombo,Sri Lanka</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Email</h4>
                                        <a href="#">info@hilltown.contact.com</a>
                                        <a href="#">support@hilltown.com</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Phone</h4>
                                        <a href="#">011 5486 412</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get Contact Area =================-->

        <!--================Map Area =================-->
        <section class="contact_map_area">
            <div class="container">
                <div id="mapBox2" class="mapBox2 row m0" 
                     data-lat="40.701083" 
                     data-lon="-74.1522848" 
                     data-zoom="12" 
                     data-marker="img/map-marker.png" 
                     data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                     data-mlat="40.701083"
                     data-mlon="-74.1522848">
                </div>
            </div>
        </section>
        <!--================End Map Area =================-->


        <?php
        include './footer.php';
        ?>


        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Thank you</h2>
                        <p class="modal-subtitle">Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Sorry !</h2>
                        <p class="modal-subtitle"> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->






        <!--================End Footer Area =================-->

        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>

        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>

        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>

        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>

        <script src="js/theme.js"></script>
    </body>


</html>
