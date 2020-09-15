<?php
			include_once "header.php";
			// include_once "allergies_process.php";
			include 'allergies_process.php';

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
            <div class="col-12 customForm">
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
                                <!-- Multiselect dropdown -->
                                <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm "
                                    class="selectpicker w-100">
                                    <option>Celery</option>
                                    <option>Cereals containing gluten (such as barley and oats)</option>
                                    <option>Crustaceans</option>
                                    <option>Mustard</option>
                                    <option>Peanuts</option>
                                    <option>Sesame</option>
                                    <option>Soybeans</option>
                                    <option>Sulphur Dioxide and Sulphites</option>
                                    <option>Tree Nuts (such as almonds, hazelnuts, walnuts, brazil nuts,
                                        cashews, pecans, pistachios and macadamia nuts)</option>
                                </select><!-- End -->
                                <div class="form-check form-check-inline">
                                    <input id="checkboxNoAl" type="checkbox">
                                    <p class="checkboxNoAL" for="checkboxNoAl">I have no known allergies</p>
                                </div>
                                <button type="submit" value="Submit" class="btn btn-light"> Next </button>
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