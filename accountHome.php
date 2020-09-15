<?php

include('header.php');
include_once('deleteaccount.php');


$id =  $_SESSION['user_data']['user_id'] ;

$query=  "SELECT * FROM users WHERE user_id = '$id' ";

$result = mysqli_query($conn, $query);

$user_data = mysqli_fetch_assoc($result);


?>

<?php
                        if(!$_SESSION)
                                {
                                header("Location:login.php");
                            } else{

                                $query=  "SELECT * FROM users";
                                $result = mysqli_query($conn, $query);

                            }			
                            
                            
                            
					?>


<div id="how" class="offset">
    <div class="fixed-background">
        <div class="row dark justify-content-center text-center">
            <div class="col-12">
                <h3 class="heading">Your Data</h3>
                <div class="heading-underline"></div>
                <h2 class="heading"><?php echo $user_data['firstname'] . " " . $user_data['lastname']; ?></h2>
            </div>

            <div class="col-md-4 account-md-4">
                <h3>Details</h3>
                <div class="details">
                    <p><?php  echo $user_data['firstname'] . " " . $user_data['lastname'] ; ?> <br></p>
                    <p><?php  echo $user_data['email']  ; ?> <br></p>
                    <div class="container">
                        <!-- Modal trigger-->
                        <button type="button" sltyle="margin-top: 3rem;" class="btn btn-link" data-toggle="modal" data-target="#myModal">Delete my
                            account</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header justify-content-center">
                                        <h4 class="modal-title">We are sad to see you leave :(</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure that you want to delete your account?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Not Today</button>
                                        <form method="post" action="">
                                            <input type="hidden" name="delete_id"
                                                value="<?php echo $user_data['user_id']; ?>">
                                            <input type="submit" class="btn btn-danger" name="delete" value="Terminate my account">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>


            </div>
            <div class="col-md-4 account-md-4">
                <h3>Custom</h3>
                <div class="details">
                    <p> <label class="label-user-data" for="">Allergies:</label>
                        <?php echo $user_data['allergies']; ?><br></p>
                    <p> <label class="label-user-data" for="">Diet:</label>
                        <?php echo $user_data['diet']?><br></p>
                    <p> <label class="label-user-data" for="">Preferences:</label>
                        <?php echo $user_data['preferences']; ?><br></p>
                </div>
                <a class="btn btn-outline-light"
                    href="<?php echo ROOT_URL; ?>editallergies.php?id=<?php echo $user_data['user_id'];?>">Edit
                </a>
            </div>

        </div>
        <!--End Row Dark-->
        <div class="fixed-wrap">
            <div class="fixed"></div>
        </div>

    </div> <!-- End Fixed Section-->
</div>

<?php
include('footersrc.php');
?>