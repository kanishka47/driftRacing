<!DOCTYPE html>
<html lang="en">

<head>
   <?php 
     include 'head.php';
   ?>
    <title>Contact Us</title>

</head>

<body>
<?php
   include 'navbar.php';
?>

       
	   <!--Section: Contact v.2-->
	   
	   
	   
	   
<section class="container topp">

    <!--Section heading-->
    <div class=" home">GET IN TOUCH</div>
    <!--Section description-->
    <p class="text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
        esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 col-xl-9">
            <form>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
					<form action="mail.php" method="POST">
                        <div class="md-form">
                            <input type="text" name ="name" id="contact-name" class="form-control">
                            <label for="contact-name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form">
                            <input type="text" name="email" id="contact-email" class="form-control">
                            <label for="contact-email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <input type="text" name="subject" id="contact-Subject" class="form-control">
                            <label for="contact-Subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" name="message" id="contact-message" class="form-control md-textarea " rows="3"></textarea>
                            <label for="contact-message" >Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
            
			 <button class="btn btnn btn-primary btn-md"  input type="submit" value="Send"> Send</button>
            </div>
        </div>
		</form>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-xl-3 text-center">
            <ul class="list-unstyled">
                <li>
                    <i class="fa fa-map-marker fa-2x purple-text"></i>
                    <p>NIT Jamshedpur, Jamshedpur</p>
					<p>Jharkhand,831014</p>
                </li>

                <li>
                    <i class="fa fa-phone fa-2x mt-4 purple-text"></i>
                    <p>9955268864</p>
                </li>

                <li>
                    <i class="fa fa-envelope fa-2x mt-4 purple-text"></i>
                    <p> driftracingteam@nitjsr.ac.in</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
            
        
	   <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 22.7766, lng: 86.1437};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-Sm9w3XNKstdw-uqw1zbIMcEjDHC3j9g&callback=initMap">
    </script>
	   
    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
	
	<?php
   include 'footer.php';
?>

	
</body>

</html>
