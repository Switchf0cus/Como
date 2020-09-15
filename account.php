<?php

    require ('config.php');
    include_once "header.php";
    // include_once "allergies_process.php";

?>

<?php 

$id =  $_SESSION['user_data']['user_id'] ;

$query=  "SELECT * FROM users WHERE user_id = '$id' ";

$result = mysqli_query($conn, $query);

$user_data = mysqli_fetch_assoc($result);


if(isset($_POST['delete'])){
    //Get form data
    $user_id = filterUserInput($_POST['delete_id']);
    $firstname= filterUserInput($_POST['firstname']);
    $lastname= filterUserInput($_POST['lastname']);
    $email= filterUserInput($_POST['email']);
    $password= filterUserInput($_POST['password']);
    $profileimage= filterUserInput($_POST['profileimage']);
    $allergies = filterUserInput($_POST['allergies']);
    $diet = filterUserInput($_POST['diet']);
    $occupation = filterUserInput($_POST['occupation']);
    
    $query = "DELETE FROM users WHERE user_id = '$user_id' ";
 echo '<script>alert("Are you sure you want to terminate your account? :(")</script>'; 
    if(mysqli_query($conn, $query)){

        session_destroy();
        header("Location: index.php#home");
        
    }else{
        echo 'ERROR: '.mysqli_error($conn);
    }
}

?>
<!-- <div id="member-area"> -->

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3">
            <div class="row justify-content-center text-center">
                <div class="dflex">


                    <?php
                        if(!$_SESSION)
                                {
                                header("Location:login.php");
                            } else{

                                $query=  "SELECT * FROM users";
                                $result = mysqli_query($conn, $query);

                            }				
					?>
                    <div class="profilesidebar">
                        <h3><?php 
								echo  "<div id='member-name'><h3> Your Profile </h3><hr>";
                                echo $user_data['firstname'] . " " . $user_data['lastname'] ;
                                // include 'logout.php';
								echo "</div>";
								?></h3>
                    </div>






                    <div class="small-12 medium-2 large-2 columns text-center">
                        <div class="circle">
                            <!-- User Profile Image -->
                            <img class="profile-pic"
                                src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">

                            <!-- Default Image -->
                            <i class="fa fa-user fa-5x"></i><br>
                        </div>
                        <div class="p-image"> <br>
                            <i class="fa fa-camera upload-button"></i>
                            <input class="file-upload" type="file" accept="image/*" />
                        </div>
                    </div>
                </div> <!-- End dflex -->
            </div> <!-- End COL-MD-3 -->
        </div> <!-- End ROW -->





        <div class="col-xl-9">
            <div class="narrow text-center">
                <div class="personalinfo">
                    <div class="col-12">
                        <h2 class="myAccountHeading">Customize</h2>
                        <div class="heading-underline"></div>
                    </div>

                    <div class="row text-center">
                        <div class="col-12 justity-content-center">
                            <div class="well">
                                <h3>My Custom</h3>
                                <div class="well">
                                    <p><?php echo $user_data['allergies']; ?><br></p>
                                    <p><?php echo $user_data['diet']?><br></p>
                                    <p> <?php echo $user_data['occupation']; ?><br></p>
                                    <a class="btn btn-primary"
                                        href="<?php echo ROOT_URL; ?>editallergies.php?id=<?php echo $user_data['user_id'];?>">Edit</a>
                                    <form class="pull-right" method="post" action="">
                                        <input type="hidden" name="delete_id"
                                            value="<?php echo $user_data['user_id']; ?>">
                                        <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                                    </form>
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