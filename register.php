		<?php
			include_once "header.php";
			include_once "registration_process.php";
		?>
        <div id="form-section">
        <h3>Register Here &nbsp; </h3><div class="h-line"><hr></div>
			<form action="" method="post">
				<table>
				<tr>
					<td> <label for="fname">First Name </label> </td>
					<td> <input type="text" value="<?php if(isset($firstName))echo $firstName; ?>" name="firstname" id="fname" placeholder="Alex"> </td>
					<td> <?php if(isset($error_firstName))echo $error_firstName?> </td>
					
				</tr>
				
				<tr>
					<td> <label for="lname">Last Name </label> </td>
					<td> <input type="text" value="<?php if(isset($lastName)) echo $lastName; ?>" name="lastname"  id="lname"  placeholder="Middler"> </td>
					<td> <?php if(isset($error_lastName))echo $error_lastName?> </td>       
				</tr>
				
				<tr>
					<td> <label for="email">Email</label> </td>
					<td> <input type="text" value="<?php if(isset($email)) echo $email; ?>" name="email" id="email"  placeholder="alex@gmil.com"> </td>
					<td> <?php if(isset($error_email))echo $error_email?> </td>
				</tr>
			
				<tr>
					<td> <label for="password">Password</label></td>
					<td> <input type="password" name="password" id="password"  placeholder="******"> </td> 
					<td> <?php if(isset($error_password))echo $error_password?> </td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td collspan="2"><input type="submit" value="Register" name="register"> <a href="login.php">Login</a></td>
				</tr>
				
					
				</table> <!-- End of table -->
			
			</form>  <!-- End of form -->


		</div> <!-- End of form-section div -->

