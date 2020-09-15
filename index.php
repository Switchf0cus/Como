<?php 
    include 'header.php';
?>


<!-- Start Welcome Section  -->
<div class="landing">
    <div class="home-wrap">
        <div class="home-inner"></div>
    </div>
</div>
<div class="caption text-center">
    <h1>Welcome to Como</h1>
    <h3>Your Coffee</h3>
    <a href="#what" class="btn btn-outline-light btn-lg ">Read More</a>
</div>
</div>
<!-- End WelcomeSection -->



<!--- Start What Section -->
<div id="what" class="offset">
    <div class="col-12 whatSection narrow text-center">
        <h1>What makes our concept special?</h1>
        <p class="lead">Every customer gets to choose what is on their Menu</p>
        <a href="#how" class="btn btn-secondary btn-md">How does that work?</a>
    </div>
</div>
<!--- End What Section -->


<!--- Start How Section -->
<div id="how" class="offset">
    <div class="fixed-background">
        <div class="row dark text-center">
            <div class="col-12">
                <h3 class="heading">How?</h3>
                <div class="heading-underline"></div>
            </div>

            <div class="col-md-4">
                <h3>Choose</h3>
                <div class="feature">
                    <i class="fa fa-sliders fa-4x"></i>
                </div>
                <p class="lead">Choose from a list of allergens.</p>
            </div>
            <div class="col-md-4">
                <h3>Customize</h3>
                <div class="feature">
                    <i class="fab fa-angellist fa-4x"></i>
                </div>
                <p class="lead">Select your diet of choice. Vegetarian, Vegan, etc...</p>
            </div>
            <div class="col-md-4">
                <h3>Scan</h3>
                <div class="feature">
                    <i class="fa fa-qrcode fa-4x"></i>
                </div>
                <p class="lead">Scan your QR code at any store, the system will adapt the menu at the counter to your
                    settings.</p>
            </div>

        </div>
        <!--End Row Dark-->
        <div class="fixed-wrap">
            <div class="fixed"></div>
        </div>

    </div> <!-- End Fixed Section-->
</div>
<!--- End How Section -->



<!-- Start Why? Section -->


<div id="why" class="offset">

    <!-- Start Jumbotron -->
    <div class="jumbotron">
        <div class="narrow text-center">
            <div class="col-12">
                <h3 class="heading">Why we came up with such a system?</h3>
                <div class="heading-underline"></div>
            </div>

            <div class="row text-center">
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-allergies fa-3x" data-fa-transform="shrink-3 up-5"></i>
                        <h3>Allergies</h3>
                        <p>Don't consume anything that can harm you.</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-leaf fa-3x" data-fa-transform="shrink-3 up-5"></i>
                        <h3>Principles</h3>
                        <p>Your safety and satisfaction is our pride</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-stopwatch fa-3x" data-fa-transform="shrink-3 up-5"></i>
                        <h3>Time</h3>
                        <p>Scan & order away</p>

                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Narrow-->

    </div><!-- End Jumbotron -->

</div>


<!--- End Why? Section -->

<!--- Start Clients Section -->
<div class="offset" id="signup">

    <div class="dropdownSignup">
        <div>
            <div id="formDropdown">
                <?php
					include 'register.php';
					?>
                </form>
            </div>
            <!-- <button type="button" id="formButton">Toggle Form!</button>
			<form id="form1"> -->

        </div>
    </div>
</div>
<!--Start Carousel-->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row text-center">
                <div class="col-sm-12 py-5 px-5">
                    <h5>Our Customers</h5>
                    <small><strong></strong></small>
                </div>
            </div>

        </div>
        <!-- <div class="carousel-item">
                <div class="row text-center">
                    <div class="col-sm-12 py-5 px-5">
                        <p><span class="quotationMarks">&ldquo;</span>Recently I was on a trip in China and ordered a
                            sandwich. Little did I know, I ended up in hospital because they gave me peanuts, which I am
                            extremely allergic to. If only they had this system, that would have never happened<span
                                class="quotationMarks">&ldquo;</span></p>
                        <small><strong>Fernando B., Fitness Coach</strong></small>
                    </div>
                </div>

            </div> -->
        <!-- <div class="carousel-item">
                <div class="row text-center">
                    <div class="col-sm-12 py-5 px-5">
                        <p><span class="quotationMarks">&ldquo;</span>At a busy cafe on a busy day in London I can not
                            blame the barista for giving me a lactose containing coffee, he has got hundreds to make in
                            an hour. Using COMO though, not once have I received a lactose containing coffe. Plus I get
                            20% student discount. Can only recommend.<span class="quotationMarks">&ldquo;</span></p>
                        <small><strong>Marc A., Student</strong></small>
                    </div>
                </div>

            </div> -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- End Row  -->




<?php 
	include 'footer.php';
?>



</body>

</html>