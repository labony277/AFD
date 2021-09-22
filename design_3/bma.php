<?php include 'header.php'; ?>
<style>
    .panel {
        border-width: 0 0 1px 0;
        border-style: solid;
        border-color: #fff;
        background: none;
        box-shadow: none;
    }

    .panel:last-child {
        border-bottom: none;
    }

    .panel-group > .panel:first-child .panel-heading {
        border-radius: 4px 4px 0 0;
    }

    .panel-group .panel {
        border-radius: 0;
    }

    .panel-group .panel + .panel {
        margin-top: 0;
    }

    .panel-heading {
        background-color: #009688;
        border-radius: 0;
        border: none;
        color: #fff;
        padding: 0;
    }

    .panel-title a {
        display: block;
        color: #fff;
        padding: 15px;
        position: relative;
        font-size: 16px;
        font-weight: 400;
    }

    .panel-body {
        background: #fff;
    }

    .panel:last-child .panel-body {
        border-radius: 0 0 4px 4px;
    }

    .panel:last-child .panel-heading {
        border-radius: 0 0 4px 4px;
        transition: border-radius 0.3s linear 0.2s;
    }

    .panel:last-child .panel-heading.active {
        border-radius: 0;
        transition: border-radius linear 0s;
    }

    /* #bs-collapse icon scale option */

    .panel-heading a:before {
        content: '\e146';
        position: absolute;
        font-family: 'Material Icons';
        right: 5px;
        top: 10px;
        font-size: 24px;
        transition: all 0.5s;
        transform: scale(1);
    }

    .panel-heading.active a:before {
        content: ' ';
        transition: all 0.5s;
        transform: scale(0);
    }

    #bs-collapse .panel-heading a:after {
        content: ' ';
        font-size: 24px;
        position: absolute;
        font-family: 'Material Icons';
        right: 5px;
        top: 10px;
        transform: scale(0);
        transition: all 0.5s;
    }

    #bs-collapse .panel-heading.active a:after {
        content: '\e909';
        transform: scale(1);
        transition: all 0.5s;
    }

    /* #accordion rotate icon option */

    #accordion .panel-heading a:before {
        content: '\e316';
        font-size: 24px;
        position: absolute;
        font-family: 'Material Icons';
        right: 5px;
        top: 10px;
        transform: rotate(180deg);
        transition: all 0.5s;
    }

    #accordion .panel-heading.active a:before {
        transform: rotate(0deg);
        transition: all 0.5s;
    }
</style>

<div class="page-title-area">
    <div class="page-title-content">
        <div class="row justify-content-center">
            <div class="col-1">
                <div class="logo" style="text-align: center">
                    <img src="assets/img/school/bma/logo-removebg-preview.png" alt="logo" style="max-width: 160px">
                </div>
            </div>
            <div class="col-10">
                <h2 class="details_header">Bangladesh Military Academy (BMA)</h2>
            </div>
        </div>

    </div>
</div>


<section class="services-details-area ptb-100 jarallax" data-jarallax='{"speed": 0.2}'>
    <div class="container" style="box-shadow: 5px 6px 12px 2px;text-align: justify">
        <div class="row">
            <div class="col-md-7 col-lg-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 500px">
                            <img class="d-block w-100" src="assets/img/school/bma/2.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item" style="height: 500px">
                            <img class="d-block w-100" src="assets/img/school/bma/4.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item" style="height: 500px">
                            <img class="d-block w-100" src="assets/img/school/bma/5.jpeg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 col-lg-12">

                    <div class="border mb-4 desc_box">
                        <h6 class="px-4 py-2 bg-light mb-0 header_back">DESCRIPTION</h6>
                        <div class="p-4 border-top">
                            <p class="mt-2 lead ">Bangladesh Military Academy (BMA) started its glorious Journey in 1974 at Cumilla Cantonment with the motto
                                "EVER HIGH IS MY
                                HEAD’, Later, it was shifted to its present location in the south easter hily area of the country named Bhatiary, Chattogram in
                                1976, The academy has achieved “National Standard” in testimony to its outstanding contribution for the motherland in 1979.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-8">
                    <div class="border mb-4">
                        <h6 class="px-4 py-2 bg-light mb-0 header_back">OBJECTIVE</h6>
                        <div class="p-4 border-top desc_box">
                            <span class="lead fw-6">The missions of the School are:</span>
                            <ul class="list-unstyled mt-3">
                                <li class="d-sm-flex align-items-center border-bottom pb-3
                    mb-3">
                                    <p class="mr-4 lead ">1. To inspire each cadet to be leader of character imbibed with the values of religion, military
                                        tradition and dedication to a lifetime of service to the nation.</p>
                                </li>
                                <li class="d-sm-flex align-items-center border-bottom pb-3
                    mb-3">
                                    <p class="mr-4 lead ">2. To train each cadet as a competent Infantry Platoon Commander committed to professionalism.</p>
                                </li>
                                <li class="d-sm-flex align-items-center border-bottom pb-3
                    mb-3">
                                    <p class="mr-4 lead ">3. To educate each cadet as a knowledgeable university graduate with inspiration to enhance academic
                                        proficiency.</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="border mb-4">
                        <h6 class="px-4 py-2 bg-light mb-0 header_back">AIM</h6>
                        <div class="p-4 border-top desc_box">
                            <span class="lead fw-6">To prepare officer cadets/Trainee officers for grant
                                of commission as officers in Bangladesh Army.</span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12">
                    <div class="tab products-details-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs active">
                                    <li class="current"><a href="#">
                                            Gallery
                                        </a></li>
                                    <li class=""><a href="#">
                                            Video
                                        </a></li>
                                    <li class=""><a href="#">
                                            Map
                                        </a></li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content desc_box">
                                    <div class="tabs_item" style="display: block;">
                                        <div class="tv-show-slides owl-carousel owl-theme">
                                            <div class="single-tv-show">
                                                <img src="assets/img/school/bma/3.jpeg" alt="image">
                                                <a href="assets/img/school/bma/3.jpeg" class="popup-youtube"></a>
                                            </div>
                                            <div class="single-tv-show">
                                                <img src="assets/img/school/bma/4.jpeg" alt="image">
                                                <a href="assets/img/school/bma/4.jpeg" class="popup-youtube"></a>
                                            </div>

                                            <div class="single-tv-show">
                                                <img src="assets/img/school/bma/7.jpeg" alt="image">
                                                <a href="assets/img/school/bma/7.jpeg" class="popup-youtube"></a>
                                            </div>
                                        </div>

                                        <div class="tv-show-slides owl-carousel owl-theme">
                                            <div class="single-tv-show">
                                                <img src="assets/img/school/bma/5.jpeg" alt="image">
                                                <a href="assets/img/school/bma/5.jpeg" class="popup-youtube"></a>
                                            </div>
                                            <div class="single-tv-show">
                                                <img src="assets/img/school/bma/2.jpeg" alt="image">
                                                <a href="assets/img/school/bma/2.jpeg" class="popup-youtube"></a>
                                            </div>

                                            <div class="single-tv-show">
                                                <img src="assets/img/school/bma/3.jpeg" alt="image">
                                                <a href="assets/img/school/bma/3.jpeg" class="popup-youtube"></a>
                                            </div>
                                        </div>
                                        <div class="tv-show-slides owl-carousel owl-theme">
                                            <div class="single-tv-show">
                                                <img src="assets/img/school/bma/2.jpeg" alt="image">
                                                <a href="assets/img/school/bma/2.jpeg" class="popup-youtube"></a>
                                            </div>
                                            <div class="single-tv-show">
                                                <img src="assets/img/school/bma/4.jpeg" alt="image">
                                                <a href="assets/img/school/bma/4.jpeg" class="popup-youtube"></a>
                                            </div>
                                            <div class="single-tv-show">
                                                <img src="assets/img/school/bma/7.jpeg" alt="image">
                                                <a href="assets/img/school/bma/7.jpeg" class="popup-youtube"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs_item" style="display: none;">
                                        <video width="100%" height="240" controls="">
                                            <source src="img/properties/bma/bma_video.mp4" type="video/mp4">
                                            <source src="movie.ogg" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="tabs_item" style="display: none;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5215.800004864782!2d91.75318877559856!3d22.42422445560544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd754c83a4c09%3A0x5a643c5a4c3037ba!2sBangladesh%20Military%20Academy!5e0!3m2!1sen!2sbd!4v1632202754569!5m2!1sen!2sbd"
                                                width="100%" height="215" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid">
    <section class="bg_resizer">
    <div class="col-lg-12 bg-light">
        <h6 class="text-dark px-4 py-2 bg-light mb-0 header_back">COURSE DESCRIPTION</h6>
        <div class="p-4 border-top">


            <div class="accordion" id="accordion">
                <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                   aria-controls="collapseOne">
                                    Collapsible item #1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table style="width:100%">
                                    <tr>
                                        <th>Name of
                                            Courses
                                        </th>
                                        <th>Aim</th>
                                        <th>Medium</th>
                                        <th>Applicable
                                            Rank
                                        </th>
                                        <th>Duration</th>
                                        <th>Course
                                            Conducted
                                            in a year
                                        </th>

                                    </tr>
                                    <tr>
                                        <td>Officers’ Gunnery Staff
                                            Course (Air Defence)
                                        </td>


                                        <td>To train selected officers to be qualified as
                                            Instructor Gunnery, staff officers of various
                                            Headquarters and Commanding Officer of field / medium
                                            regiment
                                            or Officer Commanding of locating battery
                                        </td>

                                        <td>English</td>


                                        <td>English
                                            Captain/Major
                                        </td>


                                        <td>40 Week
                                            (280 day/10 Months)
                                        </td>


                                        <td>01</td>


                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end of panel -->

                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                   aria-controls="collapseTwo">
                                    Collapsible item #2
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <table border="1" style="width:100%">
                                    <tr>
                                        <th>Name of
                                            Courses
                                        </th>
                                        <th>Aim</th>
                                        <th>Medium</th>
                                        <th>Applicable
                                            Rank
                                        </th>
                                        <th>Duration</th>
                                        <th>Course
                                            Conducted
                                            in a year
                                        </th>

                                    </tr>
                                    <tr>
                                        <td>Officers’ Gunnery Staff
                                            Course (Air Defence)
                                        </td>


                                        <td>To train selected officers to be qualified as
                                            Instructor Gunnery, staff officers of various
                                            Headquarters and Commanding Officer of field / medium
                                            regiment
                                            or Officer Commanding of locating battery
                                        </td>

                                        <td>English</td>


                                        <td>English
                                            Captain/Major
                                        </td>


                                        <td>40 Week
                                            (280 day/10 Months)
                                        </td>


                                        <td>01</td>


                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end of panel -->

                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                   aria-controls="collapseThree">
                                    Collapsible item #3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <table border="1" style="width:100%">
                                    <tr>
                                        <th>Name of
                                            Courses
                                        </th>
                                        <th>Aim</th>
                                        <th>Medium</th>
                                        <th>Applicable
                                            Rank
                                        </th>
                                        <th>Duration</th>
                                        <th>Course
                                            Conducted
                                            in a year
                                        </th>

                                    </tr>
                                    <tr>
                                        <td>Officers’ Gunnery Staff
                                            Course (Air Defence)
                                        </td>


                                        <td>To train selected officers to be qualified as
                                            Instructor Gunnery, staff officers of various
                                            Headquarters and Commanding Officer of field / medium
                                            regiment
                                            or Officer Commanding of locating battery
                                        </td>

                                        <td>English</td>


                                        <td>English
                                            Captain/Major
                                        </td>


                                        <td>40 Week
                                            (280 day/10 Months)
                                        </td>


                                        <td>01</td>


                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end of panel -->

                    <div class="panel">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                   aria-controls="collapseFour">
                                    Collapsible item #4
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <table style="width:100%">
                                    <tr>
                                        <th>Name of
                                            Courses
                                        </th>
                                        <th>Aim</th>
                                        <th>Medium</th>
                                        <th>Applicable
                                            Rank
                                        </th>
                                        <th>Duration</th>
                                        <th>Course
                                            Conducted
                                            in a year
                                        </th>

                                    </tr>
                                    <tr>
                                        <td>Officers’ Gunnery Staff
                                            Course (Air Defence)
                                        </td>


                                        <td>To train selected officers to be qualified as
                                            Instructor Gunnery, staff officers of various
                                            Headquarters and Commanding Officer of field / medium
                                            regiment
                                            or Officer Commanding of locating battery
                                        </td>

                                        <td>English</td>


                                        <td>English
                                            Captain/Major
                                        </td>


                                        <td>40 Week
                                            (280 day/10 Months)
                                        </td>


                                        <td>01</td>


                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end of panel -->

                </div>
            </div>


        </div>
    </div>

</section>
</div>



<?php include 'footer.php'; ?>

<script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        dots: false,
        // margin:10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })


    $(document).ready(function () {
        $('.collapse.in').prev('.panel-heading').addClass('active');
        $('#accordion, #bs-collapse')
            .on('show.bs.collapse', function (a) {
                $(a.target).prev('.panel-heading').addClass('active');
            })
            .on('hide.bs.collapse', function (a) {
                $(a.target).prev('.panel-heading').removeClass('active');
            });
    });
</script>