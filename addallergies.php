<?php

require('config.php');
include('header.php');

//Check for submit
if(isset($_POST['submit'])){
    //Get form data
    $allergies = mysqli_real_escape_string($conn, $_POST['allergies']);
    $diet = mysqli_real_escape_string($conn, $_POST['diet']);
    $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
    
    $query = "INSERT INTO users(allergies, diet, occupation) VALUES('$allergies','$diet','$occupation')";

    if(mysqli_query($conn, $query)){
        header('Location: '.ROOT_URL.'');
    }else{
        echo 'ERROR: '.mysqli_error($conn);
    }
}

?>


<div class="container">
    <h1>Custom</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <div class="form-group">
            <label for="">allergies</label>
            <input type="text" name="allergies" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Diet</label>
            <input type="text" name="diet" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea name="occupation" class="form-control">
</textarea>
        </div><input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </form>
</div>
<?php include('inc/footer.php') ?>