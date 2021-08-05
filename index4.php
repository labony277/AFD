<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>ARMED FORCES DIVISION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 100%;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        text-align: center;
    }

    .styled-table thead tr {
        background-color: #9c0529;
        color: #ffffff;
        text-align: center;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #9c0529;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

    .parallax2 {
        /* The image used */
        /*background-image: url("img/BH0mxZ.jpg");*/
        
    
        /* Full height */
        height: 10%;
    
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        /*position: relative;*/
    }
    
    .parallax {
            width: 100%;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #024C23;
        }
    .bg_resizer{
        position: relative;
        z-index: 1;
        box-shadow: 5px 6px 12px 2px;
        background: white;
    }
</style>
<body>

<!-- <div class="page_loader"></div> -->


<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="index.php">
                <img src="img/logo.png" alt="logo">
            </a>

            <p style="margin-top: 17px"><span style="color: black">ARMED FORCES DIVISION </span> <br> <span
                        style="    font-size: 18px;font-weight: bold;color: red;">TRAINING INSTITUTIONS</span></p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Home
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">


                            <li><a class="dropdown-item" href="index.php">Home 1</a></li>
                            <li><a class="dropdown-item" href="index1.php">Home 2</a></li>
                            <li><a class="dropdown-item" href="index2.php">Home 3</a></li>
                            <!-- <li><a class="dropdown-item" href="index3.php">Home 4</a></li> -->


                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="about_us.php">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Training Institutions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal" style="text-decoration: none;">BANGLADESH
                                    ARMY</a></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal" style="text-decoration: none;"> BANGLADESH
                                    NAVY</a></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal" style="text-decoration: none;">TRI SERVICE
                                    INSTITUTION</a></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal" style="text-decoration: none;"> BANGLADESH AIR
                                    FORCE</a></li>

                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height item-bg active">
                <img class="d-block w-100 h-100" src="img/banner/03b.png" alt="banner">
                <div class="carousel-caption cc2 banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h3>A great place for learning</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="img/banner/10b.png" alt="banner">
                <div class="carousel-caption cc2 banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h3>A great place for learning</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="img/banner/03b.png" alt="banner">
                <div class="carousel-caption cc2 banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h3>A great place for learning</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
   
     
</div>
<!-- banner end -->
<!-- Modal -->
<div class="modal fade modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class=" container-fluid">
            <div class="container ">
                <div class="row">
                
                   <div class="col-md-12">
                   <table class="styled-table">
                           <thead >
                              
                          
                             <tr>
                              
                               <th>List of Institute</th>
                               
                              
                              
                             </tr>
                           </thead>
                           <tbody>
           
                           <tr>
                               
                               <td>ARTILLERY CENTER AND SCHOOL (AC & S)</td>
                              
                               
                                </tr>
                                <tr>
                               
                               <td>SCHOOL OF INFANTRY AND TACTICS (SI&T)</td>
                               
                               
                                </tr>
           
                                <tr>
                               
                               <td>BANGLADESH MILITARY ACADEMY (BMA)</td>
                               
                              
                                </tr>
           
                                <tr>
                               
                               <td>ARMOURED CORPS CENTRE AND SCHOOL (ACC & S)</td>
                              
                              
                                </tr>
           
                                <tr>
                               
                               <td>SIGNAL TRAINING CENTRE AND SCHOOL(STC&S)</td>
                              
                               
                                </tr>
           
                                
           
           
                                </tbody>
                         </table>
                          <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="grid-view-2.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="grid-view-3.html">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="grid-view-3.html"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Page navigation end-->
                   </div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->

<div class="js-parallax parallax"
     data-img="img/imgbin_web-development-website-web-design-png.png" data-parallax="scroll">


    <!-- Testimonial 4 start -->
    <div class="testimonial-4 content-area-5 bg_resizer">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>PRINCIPAL STAFF OFFICER MASSAGE</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 wow fadeInUp delay-04s">
                    <div class="row testimonial-info">
                        <div class="col-lg-4 col-md-6 col-pad none-992">
                            <div class="photo">
                                <img src="img/14.jpg" alt="testimonial" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10 col-pad ">
                            <div class="detail">
                                <p>Lieutenant General Waker-Uz-Zaman, SGP, psc assumed
                                    the duties of Principal Staff Officer of Armed Forces Division (a
                                    ministry level Joint Forces Headquarters under Prime Minister’s
                                    Office) on 30 November 2020. An alumnus of Bangladesh Military
                                    Academy, the General was commissioned in the Corps of Infantry on
                                    December 1985.Having an illustrious and colourful career of more
                                    than three and half decades, Lieutenant General Waker brings with
                                    him an enormous amount of experience of holding key command, staff
                                    and instructional appointments.In his distinguished military career, Lieutenant
                                    General Waker Commanded an Infantry Battalion, an Independent
                                    Infantry Brigade and an Infantry Division.</p>


                                <p> His key staff appointments include staff officer at an Infantry Brigade, School of Infantry and Tactics and Army
                                    Headquarters. He was a
                                    distinguished instructor at ‘School of Infantry and Tactics’,
                                    ‘Non-commissioned Officers’ Academy’ and Bangladesh Institute of
                                    Peace Support Operations Training’. Prior to joining as Principal
                                    Staff Officer of Armed Forces Division, Lieutenant General Waker
                                    was working as Military Secretary in Army Headquarters.
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 4 end -->

<!-- Our team 2 start -->
<div class="js-parallax parallax" data-img="img/imgbin_web-development-website-web-design-png.png" data-parallax="scroll">
        <div class="our-team-2 content-area bg_resizer">
            <div class="container-fluid parallax2">
                <!-- Main title -->
                <div class="main-title">

                    <h1>TRAINING INSTITUTION UNDER ARMED FORCES DIVISION</h1>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                        <div class="team-1">
                            <div class="team-photo">
                                <a href="school_list.php">
                                    <img src="img/avatar/1n.jpg" alt="agent-2" class="img-fluid">
                                </a>

                            </div>
                            <div class="team-details">
                                <h5><a href="school_list.php">TRI SERVICE INSTITUTION</a></h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                        <div class="team-1">
                            <div class="team-photo">
                                <a href="school_list.php">
                                    <img src="img/avatar/2n.jpg" alt="agent-2" class="img-fluid">
                                </a>

                            </div>
                            <div class="team-details">
                                <h5><a href="school_list.php">BANGLADESH ARMY</a></h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                        <div class="team-1">
                            <div class="team-photo">
                                <a href="school_list.php">
                                    <img src="img/avatar/3n.jpg" alt="agent-2" class="img-fluid">
                                </a>

                            </div>
                            <div class="team-details">
                                <h5><a href="school_list.php">BANGLADESH NAVY</a></h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                        <div class="team-1">
                            <div class="team-photo">
                                <a href="school_list.php">
                                    <img src="img/avatar/4n.jpg" alt="agent-2" class="img-fluid">
                                </a>

                            </div>
                            <div class="team-details">
                                <h5><a href="school_list.php">BANGLADESH AIR FORCE</a></h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Our team 2 end -->


<!-- Featured Properties start -->
<div class="js-parallax parallax" data-img="img/imgbin_web-development-website-web-design-png.png" data-parallax="scroll">
<div class="featured-properties content-area-9 bg-light bg_resizer">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">

            <h1>ACTIVITIES</h1>
        </div>
        <div class="slick-slider-area">
            <div class="row wow fadeInUp delay-04s slick-carousel"
                 data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="single-property.html" class="property-img">

                                <img class="d-block w-100" src="img/properties/2n.jpg" alt="properties">
                            </a>
                        </div>


                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="single-property.html" class="property-img">

                                <img class="d-block w-100" src="img/properties/3n.jpg" alt="properties">
                            </a>
                        </div>


                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="single-property.html" class="property-img">

                                <img class="d-block w-100" src="img/properties/4n.jpg" alt="properties">
                            </a>
                        </div>


                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="single-property.html" class="property-img">

                                <img class="d-block w-100" src="img/properties/5n.jpg" alt="properties">
                            </a>
                        </div>


                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="single-property.html" class="property-img">

                                <img class="d-block w-100" src="img/properties/6n.jpg" alt="properties">
                            </a>
                        </div>


                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="single-property.html" class="property-img">

                                <img class="d-block w-100" src="img/properties/8n.jpg" alt="properties">
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>

    </div>
</div>
</div>
<!-- Featured Properties end -->







<!-- Modal -->
<div class="modal fade modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: red">Close</span>
                </button>
            </div>
            <div class=" container-fluid">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <table class="styled-table">
                                <thead>


                                <tr>

                                    <th>List of Institute</th>


                                </tr>
                                </thead>
                                <tbody>

                                <tr>

                                    <td><a href="ac_and_s_details.php">ARTILLERY CENTER AND SCHOOL (AC & S)</a></td>


                                </tr>
                                <tr>

                                    <td><a href="sit_details.php">SCHOOL OF INFANTRY AND TACTICS (SI&T)</a></td>


                                </tr>

                                <tr>

                                    <td><a href="bma_details.php">BANGLADESH MILITARY ACADEMY (BMA)</a></td>


                                </tr>

                                <tr>

                                    <td><a href="ac_and_s_details.php">ARTILLERY CENTER AND SCHOOL (AC & S)</a></td>


                                </tr>
                                <tr>

                                    <td><a href="sit_details.php">SCHOOL OF INFANTRY AND TACTICS (SI&T)</a></td>


                                </tr>

                                <tr>

                                    <td><a href="bma_details.php">BANGLADESH MILITARY ACADEMY (BMA)</a></td>


                                </tr>
                                <tr>

                                    <td><a href="ac_and_s_details.php">ARTILLERY CENTER AND SCHOOL (AC & S)</a></td>


                                </tr>
                                <tr>

                                    <td><a href="sit_details.php">SCHOOL OF INFANTRY AND TACTICS (SI&T)</a></td>


                                </tr>

                                <tr>

                                    <td><a href="bma_details.php">BANGLADESH MILITARY ACADEMY (BMA)</a></td>


                                </tr>
                                <tr>

                                    <td><a href="ac_and_s_details.php">ARTILLERY CENTER AND SCHOOL (AC & S)</a></td>


                                </tr>
                                <tr>

                                    <td><a href="sit_details.php">SCHOOL OF INFANTRY AND TACTICS (SI&T)</a></td>


                                </tr>

                                <tr>

                                    <td><a href="bma_details.php">BANGLADESH MILITARY ACADEMY (BMA)</a></td>


                                </tr>


                                </tbody>
                            </table>
                            <!-- Page navigation start -->
                            <div class="pagination-box hidden-mb-45 text-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Page navigation end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end modal -->

<!-- <div class="js-parallax parallax" data-img="img/ggggg.jpg" data-parallax="scroll"> -->
<div class="js-parallax parallax" data-img="img/imgbin_web-development-website-web-design-png.png" data-parallax="scroll">
<footer class="footer container" style="position: relative;
    z-index: 1;
    box-shadow: 5px 6px 12px 2px;
    background: #f40c43;">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item">
                    <a href="index.php"><img class="img-fluid" src="img/logo.png" alt="" style="max-width: 27%;"></a>
                    <ul class="contact-info">
                        <li>
                            ARMED FORCES DIVISION
                            TRAINING INSTITUTIONS
                        </li>
                        <li>
                            <a href="mailto:sales@hotelempire.com">info@afdtraining.gov.bd</a>
                        </li>
                        <li>
                            <a href="tel:+55-417-634-7071">+880 176 902 3820</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Importent Link</h4>
                    <ul class="links">
                        <li>
                            <a href="https://www.army.mil.bd/" target="blank">Bangladesh Army</a>
                        </li>
                        <li>
                            <a href="https://www.navy.mil.bd/" target="blank">Bangladesh Navy</a>
                        </li>
                        <li>
                            <a href="https://baf.mil.bd/website/index.php" target="blank">Bangladesh Air Force</a>
                        </li>
                        <li>
                            <a href="https://afd.gov.bd/" target="blank">Armed Forces Division</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact</h4>
                    <ul class="links">
                        <p>Training Directorate</p>
                        <li>
                            <a>+88-02-9013166,</a>
                        </li>
                        <li>
                            <a>+88-02-9010049 Ext: 3820</a>
                        </li>
                        <li>
                            <a>+880 176 902 3820</a>
                        </li>
                        <li>
                            <a>tdir@afdtraining.gov.bd</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>MAP</h4>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d467196.91164975817!2d90.385996!3d23.819457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74cd48ec4d1%3A0x69e5b057295dad8e!2sBangladesh%20Army%20Headquarter!5e0!3m2!1sen!2sus!4v1622490857117!5m2!1sen!2sus"
                            width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- Footer end -->

<!-- Sub footer start -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <p class="copy">COPYRIGHT@2021 <a href="#">ARMED FORCES
                        DIVISION.</a>ALL RIGHT RESERVED </p>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end -->

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-submenu.js"></script>
<script src="js/rangeslider.js"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.scrollUp.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/leaflet.js"></script>
<script src="js/leaflet-providers.js"></script>
<script src="js/leaflet.markercluster.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.filterizr.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/maps.js"></script>
<script src="js/app.js"></script>
<script src="js/shifty.js"></script>

<script>
    new Shifty('.js-parallax');
</script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-89110077-3', 'auto');
    ga('send', 'pageview');
</script>

</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/real-house-html/HTML/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 May 2021 14:41:51 GMT -->
</html>

