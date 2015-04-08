<?php
  $currentPage = "work_with_us";
  require 'header.php';
?>




      
      <div id="content" class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <h2 id="title">Work with Us</h2>
          </div>
          <div id="content-inner" class="row">
            <div class="col-sm-6">
              <p class="h1">SEND US YOUR CV!</p>
              <div>
              <p>Think you are up for the challenge? Apply here!</p>
              <p>The Soca family is looking for hardworking people, with great spirit who love this industry as much as we do, to join us and help us make our family bigger!</p>
              <p>We are currently hiring for all positions:</p>
              <ul>
                <li>FOH</li>
                <li>BOH</li>
              </ul>
              </div>
            </div>
            <div class="col-sm-5 col-sm-offset-1">
              <div id="paper"></div>
              <?php

                $body = "";
                $message = "";
                $headers = "";

                //GET FORM POST VARIABLES
                if(isset($_POST["fname"])) $fname = $_POST["fname"];
                if(isset($_POST["email"])) $email = $_POST["email"];
                if(isset($_POST["position"])) $position = $_POST["position"];

                if(strlen($position) <= 0) $position = "General Application";

                if ( strlen($fname) > 0 && strlen($email) > 0) {
                  $body = "\n\n\n\nNombre: ".$fname;
                  $body .= "\n\nEmail: ".$email;
                  $body .= "\n\nPosition:\n".$position;
      
                  $body = wordwrap($body, 70);

                  $flag1 = mail("jobs@socapub.com", $fname." - ".$position." - Info", $body);

                  /* GET File Variables */ 
                  $tmpName = $_FILES['cv']['tmp_name']; 
                  $fileType = $_FILES['cv']['type']; 
                  $fileName = $_FILES['cv']['name'];
  
                  /* Start of headers */ 
                  $headers = "From: ".$fname;

                  if (file($tmpName)) {
                    // echo "<h1>check!</h1>";
                    /* Reading file ('rb' = read binary)  */
                    $file = fopen($tmpName,'rb'); 
                    $data = fread($file,filesize($tmpName)); 
                    fclose($file);
                    // echo "<h1>check 2!</h1>";
 
                    /* a boundary string */
                    $randomVal = md5(time()); 
                    $mimeBoundary = "==Multipart_Boundary_x{$randomVal}x"; 
 
                    /* Header for File Attachment */
                    $headers .= "\nMIME-Version: 1.0\n"; 
                    $headers .= "Content-Type: multipart/mixed;\n" ;
                    $headers .= " boundary=\"{$mimeBoundary}\"";
                    // echo "<h1>check 3!</h1>";
 
                    /* Multipart Boundary above message */
                    $message = "This is a multi-part message in MIME format.\n\n" . 
                    "--{$mimeBoundary}\n" . 
                    "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . 
                    "Content-Transfer-Encoding: 7bit\n\n" . 
                    $message . "\n\n"; 
 
                    /* Encoding file data */
                    $data = chunk_split(base64_encode($data)); 
 
                    /* Adding attchment-file to message*/
                    $message .= "--{$mimeBoundary}\n" . 
                    "Content-Type: {$fileType};\n" . 
                    " name=\"{$fileName}\"\n" . 
                    "Content-Transfer-Encoding: base64\n\n" . 
                    $data . "\n\n" . 
                    "--{$mimeBoundary}--\n";
                    // echo "<h1>check 4!</h1>";
                  }

                  $flag2 = mail("jobs@socapub.com", $fname." - ".$position." - CV", $message, $headers);

                  if(!$flag1 || !$flag2){
                    echo "<p class='h3 text-center'>Your message could not be sent.</p><p class='h3 text-center'>Please try again later.</p >";
                  } else {
                    echo "<p class='h3 text-center'>Thanks for contacting us!</p><p class='h3 text-center'>We'll get back to you soon.</p>" ;
                  }
                } else {
              ?>
              <form role="form" id="wwuForm" action="work_with_us.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" name="fname" id="fname" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <select class="form-control" name="position" id="position">
                    <option value="">-- Select a position --</option>
                    <option value="FOH">FOH</option>
                    <option value="BOH">BOH</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control" name="cv" id="cv" placeholder="CV">
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
                  <img src="img/wwu_truck.png" class="img-responsive"/>
              </div>
              <div class="col-xs-5 whiteline"></div>
            </div>
          </div>
        </div>
      </div>

      <div id="content-bg" class="row hidden-xs hidden-sm">
        <div class="col-md-10 col-md-offset-1" style="min-height:50px;">
          <!-- <img src="img/bg_home.png" class="img-responsive"/> -->
        </div>
      </div>





<?php 
  require 'footer.php';
?>