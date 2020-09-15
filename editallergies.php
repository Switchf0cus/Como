<?php

require('config.php');
include('header.php');

//Check for submit





if(isset($_POST['submit'])){
    $user_id = filterUserInput($_POST['user_id']);
    $allergies = filterUserInput($_POST['allergies']);
    $diet = filterUserInput($_POST['diet']);
    $preferences = filterUserInput($_POST['preferences']);
    
    $query = "UPDATE users SET 
                    allergies='$allergies', 
                    diet='$diet', 
                    preferences='$preferences'
                     WHERE user_id = '$user_id' ";

    if(mysqli_query($conn, $query)){
        header("Location:accountHome.php");
    }else{
        echo 'ERROR: '.mysqli_error($conn);
    }
}



if(!$_SESSION)
        {
        header("Location:login.php");
    } else{

        if(isset($_GET['id'])){

        $id = $_GET['id'] ;
        $query=  "SELECT * FROM users WHERE user_id = '$id' ";
        $result = mysqli_query($conn, $query);
        $user_data = mysqli_fetch_assoc($result);
        }

?>

<div class="row justify-content-center text-center">
    <div class="col-12">
        <h3 class="edit-data">Edit User Data</h3>
        <form method="post" action="">
            <div class="col-xl-6">
                <label class="label-user-data" for="">Allergies</label>
                <input type="text" name="allergies" placeholder="Lactose f.ex." class="form-control"
                    value="<?php echo $user_data['allergies']; ?>" required> <br>
                <div class="form-group">
                    <label class="label-user-data" for="">Diet</label> <br>
                    <form action="" method="post">
                        <select class="form-control" name="diet" id="" value="<?php echo $user_data['diet']; ?>" required>
                            <option value="" selected disabled>Choose your diet</option>
                            <option value="Paleo">Paleo</option>
                            <option value="Pescatarian">Pescatarian</option>
                            <option value="Vegetarian">Vegetarian</option>
                            <option value="Vegan">Vegan</option>
                        </select>
                    </form>
                </div>
                <div class="form-group">
                    <label class="label-user-data" for="">Preferences</label>
                    <input type="text" name="preferences" placeholder="No Sugar f.ex." class="form-control"
                        value="<?php echo $user_data['preferences']; ?>" required>
                </div>
                <input type="hidden" name="user_id" value="<?php echo $user_data['user_id']; ?>" id="">

                <a href="<?php echo ROOT_URL; ?>accountHome.php?id=<?php echo $user_data['user_id'] ;?>"
                    class="btn btn-outline-dark">Cancel
                </a>
                <input type="submit" name="submit" value="Submit" class="btn btn-outline-light">
        </form>

    </div>
</div>
</div>


<?php

}; 

include('footersrc.php') ?>