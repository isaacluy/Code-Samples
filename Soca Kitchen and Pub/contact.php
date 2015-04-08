<?php
  $currentPage = "contact";
  require 'header.php';
?>




      
      <div id="content" class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <h2 id="title">Contact Us</h2>
          </div>
          <div id="content-inner" class="row">
            <div class="col-sm-6">
              <p class="h1">GET IN TOUCH</p>
              <div class="OTButton"><script type="text/javascript" src="https://secure.opentable.com/ism/link.aspx?rid=159400&restref=159400&bgimage=https://secure.opentable.com/img/frontDoor/ot_btn_red.png"></script><noscript id="OT_noscript"><a href="http://www.opentable.com/the-soca-kitchen-and-pub-reservations-ottawa?rtype=ism&restref=159400" >Reserve Now On OpenTable.com</a></noscript></div>
              <a class="h3" href="tel:6136959190">p. 613 695 9190</a>
              <a class="h3" href="mail:info@socapub.com">e. info@socapub.com</a>
              <a class="h3" href="https://goo.gl/maps/c23QS" target="_blank">a. 93 Holland Ave., Ottawa</a>
              <p class="contact-text">Any questions, concerns, suggestions, complaints or anything at all, just write to us!!!</p>
              <p class="h1">FOLLOW US</p>
              <ul id="contact-sm" class="list-inline">
                <li class="col-xs-2 col-md-3 fb"><a href="https://www.facebook.com/socapub">facebook</a></li>
                <li class="col-xs-2 col-md-3 tw"><a href="https://twitter.com/Socapub">twitter</a></li>
                <li class="col-xs-2 col-md-3 ins"><a href="http://instagram.com/socapub">instagram</a></li>
              </ul>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
              <div id="headphones"></div>
              <!-- <img src="img/contact_headphones.png" class="img-responsive" style="margin:auto;"/> -->
              <?php

                //GET FORM POST VARIABLES
                if(isset($_POST["fname"])) $fname = $_POST["fname"];
                if(isset($_POST["email"])) $email = $_POST["email"];
                if(isset($_POST["message"])) $message = $_POST["message"];

                if ( strlen($fname) > 0 && strlen($email) > 0 && strlen($message) > 0 ) {

                  $body = "\n\n\n\nNombre: ".$fname;
                  $body .= "\n\nEmail: ".$email;
                  $body .= "\n\nMensaje:\n".$message;
      
                  $body = wordwrap($body, 70);
      
                  if( !mail("info@socapub.com", "Contact - Socapub", $body)) {
                    echo "<p class='h3 text-center'>Your message could not be sent.</p><p class='h3 text-center'>Please try again later.</p>";
                  } else {
                    echo "<p class='h3 text-center'>Thanks for contacting us!</p><p class='h3 text-center'>We'll get back to you soon.</p>";
                  }
                } else {
              ?>
              <form role="form" id="contactForm" action="contact.php" method="post" accept-charset="utf-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="fname" id="fname" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="5" name="message" id="message" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>
                </div>
              </form>
              <?php
                }
              ?>
            </div>
            <div id="bottom-tag" class="col-xs-12">
              <div class="col-xs-5 whiteline"></div>
              <div class="col-xs-2">
                  <img src="img/contact_mailbox.png" class="img-responsive"/>
              </div>
              <div class="col-xs-5 whiteline"></div>
            </div>
          </div>
        </div>
      </div>

      <div id="content-bg" class="row hidden-xs hidden-sm">
        <div class="col-md-10 col-md-offset-1">
          <img src="img/bg_contact.png" class="img-responsive"/>
        </div>
      </div>






<?php 
  require 'footer.php';
?>