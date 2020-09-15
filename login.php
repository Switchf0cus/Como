
		<?php
			include_once "header.php";
			include_once "login_process.php";
		?>

        
        <div id="form-section-login">
          <h3>Login Here  </h3><div class="h-line"><hr></div>
			<form action="" method="post">
				<table>
				<tr> 
					<td> <label for="email">Email</label> </td>    
					<td> <input type="text" value="<?php if(isset($email))echo $email;?>" name="email" id="email"  placeholder="alex@gmil.com"> </td>
					<td> <?php if(isset($error_email)) echo $error_email;?> </td></tr>
			
				<tr> 
					<td> <label for="password">Password</label> </td> 
					<td> <input type="password" name="password" id="password"  placeholder="******"> </td>
					<td> <?php if(isset($error_password))echo $error_password;?>  </td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td collspan="2"><input type="submit" value="Login" name="login"> <a href="index.php#signup">Register</a>  </td></tr>
				
			</table> <!-- End of table -->
			
			</form>  <!-- End of form -->


		</div> <!-- End of form-section div -->
		


<?php
		include_once "footer.php";
	
?>