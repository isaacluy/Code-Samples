<?php
  $currentPage = "index";
  require 'header.php';
?>




      
      <div id="content" class="row">
        <div id="opening-soon" class="col-md-8 col-md-offset-2">
          <img src="img/opening_soon2.png" class="img-responsive"/>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="col-md-6">
            <div id="carrousel" class="carousel slide">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/Home01A.jpg" class="img-responsive"/>
                </div>
                <div class="item">
                  <img src="img/Home02A.jpg" class="img-responsive"/>
                </div>
                <div class="item">
                  <img src="img/Home03A.jpg" class="img-responsive"/>
                </div>
                <div class="item">
                  <img src="img/Home04A.jpg" class="img-responsive"/>
                </div>
              </div>
              <div id="stepper">
                <ol class="list-unstyled carousel-indicators">
                  <li data-target="#carrousel" data-slide-to="0" class="active"><p id="one">1</p></li>
                  <li data-target="#carrousel" data-slide-to="1"><p id="two">2</p></li>
                  <li data-target="#carrousel" data-slide-to="2"><p id="three">3</p></li>
                  <li data-target="#carrousel" data-slide-to="3"><p id="four">4</p></li>
                </ol>
              </div>
            </div>
            <div class="col-md-5 hidden-xs hidden-sm">
              <h2 class="title">About Us!</h2>
            </div>
            <div class="col-md-7 hidden-xs hidden-sm chalkbox">
              <h1>THE SOCA KITCHEN &amp; PUB</h1>
              <p>The Soca Kitchen and Pub has travelled all the way from the sugar cane fields (SOCA) and it has put down its roots in trendy Hintonburg. Soca is simply a place where good food, good drinks and good people come together to have fun, taste &amp; share our ever-changing seasonal menu based on locally sourced ingredients when possible.</p>
            </div>
          </div>
          <div class="col-md-6 hidden-xs hidden-sm">
            <div class="col-md-6 mb20">
              <h2 class="title lar">Location and Reserve</h2>
            </div>
            <div class="col-md-6 chalkbox mb20">
              <h2>OUR LOCATION!</h2>
              <p>We are located at <a href="https://goo.gl/maps/c23QS" target="_blank">93 Holland Avenue, Ottawa</a></p>
              <p>Driving here? No problem we have free parking</p>
              <p><a href="contact.php">Call us now to reserve a table!</a></p>

            </div>
            <div id="instagram-img" class="col-md-7">
              <iframe src="http://snapwidget.com/sl/?u=c29jYXB1YnxpbnwzMDB8M3wzfHxub3w1fG5vbmV8b25TdGFydHx5ZXN8bm8=&ve=161114" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:294px;"></iframe>
              <img id="animals" src="img/home_animals.png" class="img-responsive"/>
            </div>
            <div class="col-md-5 p0">
              <h2 class="title wwu">Work with Us!</h2>
              <div class="chalkbox">
                <h2>BECOME PART OF OUR TEAM</h2>
                <p>Think you're up for the challenge?</p>
                <p><a href="work_with_us.php">Apply here!</a></p>
              </div>
            </div>
          </div>
        </div>
        <div id="submenu" class="col-xs-10 col-xs-offset-1 hidden-md hidden-lg">
          <div class="row">
            <div class="col-xs-4">
              <a href="contact.php"><img src="img/about_us.png" class="img-responsive" alt="About Us"/></a>
            </div>
            <div class="col-xs-4">
              <a href="work_with_us.php"><img src="img/work_with_us.png" class="img-responsive" alt="Work with us"/></a>
            </div>
            <div class="col-xs-4">
              <a href="location.php"><img src="img/location_reserve.png" class="img-responsive" alt="Location and Reserve"/></a>
            </div>
          </div>
        </div>
      </div>

      <div id="content-bg" class="row hidden-xs hidden-sm">
        <div class="col-md-10 col-md-offset-1">
          <img src="img/bg_home.png" class="img-responsive"/>
        </div>
      </div>




<?php 
  require 'footer.php';
?>