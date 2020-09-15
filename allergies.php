<?php
require('config.php');
include('header.php'); 



//Get ID
$id = mysqli_real_escape_string($conn, $_GET['user_id']);

//Create query
$query = "SELECT * FROM users WHERE 'user_id' = ' .$id ' ";


//Get result
$result = mysqli_query($conn, $query);

//Fetch data
$parameters = mysqli_fetch_assoc($result);

//Free result
mysqli_free_result($result);

//Close connection
mysqli_close($conn);

?>


    
    <div class="parameters justify-content-center text-center">
    <a href="<?php echo ROOT_URL; ?>account.php?id=<?php echo $parameters['user_id']; ?>" class="btn btn-secondary">Back</a>
        <p><?php echo $parameters['allergies']; ?></p>
        <p>
        <?php echo $parameters['diet']?>
        </p>
        <p><?php echo $parameters['occupation']; ?></p>
        <hr>
        <form class="" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <input type="hidden" name="delete_id" value="<?php echo $parameters['user_id']; ?>">
        <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>
        <a href="<?php echo ROOT_URL; ?>editallergies.php?id=<?php echo $parameters['user_id']; ?>" class="btn btn-default">Edit</a>
    </div>
<?php include('footersrc.php'); ?>