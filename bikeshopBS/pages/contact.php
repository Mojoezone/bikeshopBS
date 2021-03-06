<?php
/************************
*	PHP Form Processor	*
*************************/

//Trim removes white space after strip_tags gets rid of any html, javascript, etc tags from the input
$fname = trim(strip_tags($_POST['fname']));
$lname = trim(strip_tags($_POST['lname']));
$email = trim(strip_tags($_POST['email']));
$phone = trim(strip_tags($_POST['phone']));
$state = trim(strip_tags($_POST['state']));
$services = trim(strip_tags($_POST['services']));
$comments = trim(strip_tags($_POST['comments']));

//Creating a single variable to format and hold all the inputs
$body = "
Website Contact Form
First Name: $fname
Last Name: $lname
Email Address: $email
Phone Number: $phone
State: $state
Services: $services
Comments: $comments";

mail('joemo@mojoezone.com','Neighborhood Bike Shop Contact Submission',$body,$email);
mail($email,'Your Neighborhood Bike Shop Contact Submission',$body,'joemo@mojoezone.com');

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CONTACT Us - Neighborhood Bike Shop</title>
       <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
        <script src="https://use.fontawesome.com/d5f26958a0.js">
        </script>
        <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet" />
        <link href="../css/reset.css" rel="stylesheet" type="text/css" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body id="dcontact">
      <div class="clearance">
         <h3>CLEARANCE</h3>
         <h3>50% OFF</h3>
       </div>
      <div id="container">


      <header>

       <div class="logo">
           <a href="../index.html"><h1>NEIGHBORHOOD BIKE SHOP</h1></a>
       </div>
       <nav class="ssbar">
         <ul>
           <li><a href="https://www.google.com/maps/@32.8245525,-117.1089785,10z" target="_blank">Good Map Us</a></li>
           <li><a href="tel:(619)666-9999"><i class="fa fa-phone" aria-hidden="true">&nbsp;(619)666-9999</i></a></li>
           <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
           <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
           <li><a href="https://www.yelp.com" target="_blank"><i class="fa fa-yelp" aria-hidden="true"></i></a></li>
           <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
           <li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
         </ul>
       </nav>


       <nav class="global">
         <ul class="topmenu">
           <li><a href="../index.html" class="dhome">HOME</a>

                           <ul class="submenu">
                             <li><a href="rental.html" class="drental">RENTAL</a></li>
                             <li><a href="repair.html" class="drepair">REPAIR</a></li>
                             <li><a href="class.html" class="dclass">CLASS</a></li>
                           </ul>
           </li>
           <li><a href="about.html" class="dabout">ABOUT</a>
             <ul class="submenu">
               <li><a href="history.html" class="dhistory">HISTORY</a></li>
               <li><a href="owner.html" class="downer">OWNER</a></li>
               <li><a href="staff.html" class="dstaff">STAFF</a></li>
             </ul>
           </li>
           <li><a href="bikes.html" class="dbikes">BIKES</a>
             <ul class="submenu">
               <li><a href="adult.html" class="dadult">ADULT</a></li>
               <li><a href="kid.html" class="dkid">KID</a></li>
             </ul>
           </li>
           <li><a href="accessories.html" class="daccessories">ACCESSORIES</a>
             <ul class="submenu">
               <li><a href="helmets.html" class="dhelmets">HELMETS</a></li>
               <li><a href="lights.html" class="dlights">LIGHTS</a></li>
               <li><a href="brakes.html" class="dbrakes">BRAKES</a></li>
               <li><a href="chains.html" class="dchains">CHAINS</a></li>
               <li><a href="locks.html" class="dlock">LOCKS</a></li>
             </ul>

           <li><a href="contact.html" class="dcontact">CONTACT</a></li>

         </ul>
       </nav>

      </header>



    <main>
      <div class="contact_form">
        <section class="thankyou">
        <h5>Success</h5>
        <?php
         //if the email was sent, show the success message
         	echo '<div class="success">Thanks '.$fname.'. Your message was sent. We will contact you at: '.$email.' winthin 24 hours. A copy of this submission was send to '.$email.'. Thank you for your time.</div>';
         ?>
       </section>
    </div>
    </main>

  <!-- <a href="#" class="topbutton">Top</a> -->

    <footer class="cf">


      <div class="fglobal cf">
        <nav>
          <ul class="ftopmenu">
            <li><a href="../index.html" class="dhome">HOME</a>
              <ul>
                <li><a href="rental.html" class="drental">RENTAL</a></li>
                <li><a href="repair.html" class="drepair">REPAIR</a></li>
                <li><a href="class.html" class="dclass">CLASS</a></li>
              </ul>
            </li>
            <li><a href="about.html" class="dabout">ABOUT</a>
              <ul class="fsubmenu">
                <li><a href="history.html" class="dhistory">HISTORY</a></li>
                <li><a href="owner.html" class="downer">OWNER</a></li>
                <li><a href="staff.html" class="dstaff">STAFF</a></li>
              </ul>
            </li>
            <li><a href="brakes.html" class="dbikes">BIKES</a>
              <ul class="fsubmenu">
                <li><a href="adult.html" class="dadult">ADULT</a></li>
                <li><a href="kid.html" class="dkid">KID</a></li>
              </ul>
            </li>
            <li><a href="accessories.html" class="daccessories">ACCESSORIES</a>
              <ul class="fsubmenu">
              <li><a href="helmets.html" class="dhelmets">HELMETS</a></li>
              <li><a href="lights.html" class="dlights">LIGHTS</a></li>
              <li><a href="brakes.html" class="dbrakes">BRAKES</a></li>
              <li><a href="chains.html" class="dchains">CHAINS</a></li>
              <li><a href="locks.html" class="dlocks">LOCKS</a></li>
              </ul>
            </li>
            <li><a href="contact.html" class="dcontact">CONTACT</a>
              <ul class="fsubmenu">
              <li><a href="contact.html">MON - SAT &nbsp; 8AM - 6PM</a></li>
              <li><a href="mailto:customerservice@tnbs.com">CUSTOMERSERVICE@TNBS.COM</a></li>
              <li><a href="https://www.google.com/maps/@32.8245525,-117.1089785,10z">666 SAN DIEGO ST SAN DIEGO CA 92911</a></li>
            </ul>
            </li>
          </ul>
        </nav>
      </div>
      <nav class="fssbar">
        <ul>
          <li><a href="tel:(619)666-9999"><i class="fa fa-phone" aria-hidden="true">&nbsp;(619)666-9999</i></a></li>
          <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="https://www.yelp.com" target="_blank"><i class="fa fa-yelp" aria-hidden="true"></i></a></li>
          <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="../index.html"><img src="../images/logoblack.png" alt="Neighbothood Bike Shop Logo" /></a></li>
        </ul>
      </nav>
    </footer>
    </div>
    <div class="christmas">
      <h3>CHRISTMAS SALE</h3>
      <h3>10% OFF</h3>
    </div>
    </body>
    </html>
