
		<?php
			include_once "header.php";
		
		?>



<div id="member-area">

<?php

 if(!$_SESSION)
        {
          header("Location:login.php");
       } else{


		$sql=  "SELECT * FROM users";
 		$result = mysqli_query($conn, $sql);
         
		echo  "<div id='member-name'><h3> Member Area </h3><hr>"
        .$_SESSION['firstname']  ." ". $_SESSION['lastname'] ."<br>" ;
        include 'logout.php';
        echo "</div>";
        
		if(mysqli_num_rows($result) > 0){
      		while($row = mysqli_fetch_assoc($result)) {
           			$firstName=$row['firstname'];
 		  		 	$lastName=$row['lastname'];
					$email=$row['email'];
					echo "<div id='confirm-box'>
							First Name : $firstName <br>
							Last Name : $lastName <br>
							Email :  $email
						 </div>" ;

         		}	
		}
       
   }
?>

</div> <!-- End of member-area div -->



<?php
		include_once "footer.php";
	
?>