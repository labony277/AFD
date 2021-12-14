<?php include 'header.php'; ?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600);	

html {
  border-top: 5px solid #fff;
  background: #58DDAF;
  color: #2a2a2a;
}

html, body {
  margin: 0;
  padding: 0;
  font-family: 'Open Sans';
}

h1 {
  color: black;
  
  font-weight: 300;
  margin-left: 40px;
}

#slider {
  position: relative;
  overflow: hidden;
  margin: 20px auto 0 auto;
  border-radius: 4px;
  margin-right: 60px;
}

#slider ul {
  position: relative;
  margin: 0;
  padding: 0;
  height: 200px;
  list-style: none;
}

#slider ul li {
  position: relative;
  display: block;
  float: left;
  margin: 0;
  padding: 0;
  width: 500px;
  height: 300px;
  background: #ccc;
  text-align: center;
  line-height: 300px;
}

a.control_prev, a.control_next {
  position: absolute;
  top: 40%;
  z-index: 999;
  display: block;
  padding: 4% 3%;
  width: auto;
  height: auto;
  background: #2a2a2a;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  font-size: 18px;
  opacity: 0.8;
  cursor: pointer;
}

a.control_prev:hover, a.control_next:hover {
  opacity: 1;
  -webkit-transition: all 0.2s ease;
}

a.control_prev {
  border-radius: 0 2px 2px 0;
}

a.control_next {
  right: 0;
  border-radius: 2px 0 0 2px;
}

.slider_option {
  position: relative;
  margin: 10px auto;
  width: 160px;
  font-size: 18px;
}

</style>
<section>
    <h1>Incredibly Basic Slider</h1>
    <div id="slider">
      <a href="#" class="control_next">></a>
      <a href="#" class="control_prev"><</a>
      <ul>
        <li> <img  src="assets/img/school/navy/bna/1.jpg" alt="First slide"></li>
        <li style="background: #aaa;">SLIDE 2</li>
        <li>SLIDE 3</li>
        <li style="background: #aaa;">SLIDE 4</li>
      </ul>  
    </div>
    
    <!-- <div class="slider_option">
      <input type="checkbox" id="checkbox">
      <label for="checkbox">Autoplay Slider</label>
    </div>  -->
    
</section>
<br>


<?php include 'footer.php'; ?>
