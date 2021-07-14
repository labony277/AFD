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
</style>
<body>
<div class="page_loader"></div>


<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="index.php">
                <img src="img/logo.png" alt="logo">
            </a>

            <p style="margin-top: 17px"><span style="color: black">ARMED FORCES DIVISION </span> <br> <span style="    font-size: 18px;font-weight: bold;color: red;">TRAINING INSTITUTIONS</span></p>
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
                            <li><a class="dropdown-item" href="index2.php">Home 4</a></li>


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