<?php
      require ('config.php');
      include_once "header.php";

		?>



<!-- <div id="member-area"> -->






<div class="container-fluid">

    <?php
							if(!$_SESSION)
									{
									header("Location:login.php");
								} else{
									$sql=  "SELECT * FROM users";
									$result = mysqli_query($conn, $sql);
								}				
                    
                    ?>

    <div class="col-xl-12 justify-content-center">
        <div class="narrow justify-content-center text-center">
            <div id="customForm" class="col-12">
                <h2 class="myAccountHeading">Customize</h2>
                <div class="heading-underline"></div>
            </div>
            <div class="col-12 justity-content-center">
                <div class="allergiescheck">
                    <div class="feature">
                        <i class="fas fa-allergies fa-4x" data-fa-transform="shrink-3 up-5"></i>
                    </div>
                    <h3>What are you allergic to?</h>
                        <!-- <div class="container"> -->
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <label class="text-black mb-3 lead">Select your allergens below:</label>
                                
                                
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>




<?php
		
		include_once "footersrc.php";
	
?>