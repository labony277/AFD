<?php include 'header.php'; ?>
<?php include 'banner.php'; ?>

<!-- Search Section start -->
<div class="search-section new-search search-area bg-grea animated fadeInDown ">
    <div class="container">
        <div class="search-section-area">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Keyword">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-type">
                                        <option>Property Type</option>
                                        <option>Apartment</option>
                                        <option>Family House</option>
                                        <option>Modern Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>Location</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="range-slider">
                                    <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bathrooms">
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="Year">
                                        <option>Year Built</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <button class="search-button">Search</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Amenities</h5>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        Free Parking
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        Air Condition
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">
                                        Places to seat
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">
                                        Swimming Pool
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox5" type="checkbox">
                                    <label for="checkbox5">
                                        Laundry Room
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">
                                        Window Covering
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">
                                        Central Heating
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">
                                        Alarm
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox9" type="checkbox">
                                    <label for="checkbox9">
                                        TV Cable
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox10" type="checkbox">
                                    <label for="checkbox10">
                                        WiFi
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox11" type="checkbox">
                                    <label for="checkbox11">
                                        Dryer
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox12" type="checkbox">
                                    <label for="checkbox12">
                                        Refrigerator
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Section end -->
<!-- Testimonial 4 start -->
<div class="testimonial-4 content-area-5 bg-grea-3">
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

                            <p> His key staff appointments include staff officer at an Infantry Brigade, School of Infantry and Tactics and Army Headquarters. He was a
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
<!-- Testimonial 4 end -->

<!-- Our team 2 start -->
<div class="our-team-2 content-area">
    <div class="container">
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
<!-- Our team 2 end -->


<!-- Featured Properties start -->
<div class="featured-properties content-area-9 bg-light">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">

            <h1>ACTIVITIES</h1>
        </div>
        <div class="slick-slider-area">
            <div class="row wow fadeInUp delay-04s slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
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
        <!-- <div class="text-center">
            <a href="grid-view.html" class="btn btn-outline-2">Browse More Properties</a>
        </div> -->
    </div>
</div>
<!-- Featured Properties end -->



<?php include 'footer.php'; ?>