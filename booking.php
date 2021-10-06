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
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $number_of_guest = $_POST['number_of_guest'];
    $catogary = $_POST['catogary'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    
    $sql = "INSERT INTO booking(name,email,phone_number,number_of_guest,catagory,check_in,check_out)VALUES('$name','$email','$phone_number','$number_of_guest','$catogary','$check_in','$check_out')";

    if (mysqli_query($conn, $sql)) {
        $success= 'booking rejistration successfully';
    } else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
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

        
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https:/
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
                    <h3>Booking Us</h3>
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="booking.php">Booking Us</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Get Contact Area =================-->
        <section class="get_contact_area">
            <div class="container">
                <div class="row get_contact_inner">
                    <div class="col-md-12">
                        <div class="left_ex_title">
                            <h2>get in <span>touch</span></h2>
                        </div>
                        <form class="contact_us_form row m0" action="" method="post" id="" novalidate="novalidate">
                            
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
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="number" name="phone number" placeholder="phone number">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="number" name="number of guest" placeholder="number of guest">
                            </div>
                            <div class="form-group col-md-12">
                                <select class="form-control"name="catogary">
                                    <option hidden>catagory</option>
                                <option>Delux</option>
                                <option>normal</option>
                                <option>Luxary</option>
                                <option>Suppirial</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="date" class="form-control" id="number" name="check in" placeholder="Check in">
                            </div>
                             <div class="form-group col-md-12">
                                 <input type="date" class="form-control" id="number" name="check out" placeholder="check out">
                            </div>
                            
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control " name="submit">submit now</button>
                            </div>
                        </form>
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
        
        
        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

   
</html>
