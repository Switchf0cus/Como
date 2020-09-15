<?php


$id =  $_SESSION['user_data']['user_id'] ;

$query=  "SELECT * FROM users WHERE user_id = '$id' ";

$result = mysqli_query($conn, $query);

$user_data = mysqli_fetch_assoc($result);

if(!$_SESSION)
    {
    header("Location:login.php");
} else{

    $query=  "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

}	

if(isset($_POST['delete'])){

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
    if(mysqli_query($conn, $query)){

        session_destroy();
        header("Location: index.php#home");
        
    }else{
        echo 'ERROR: '.mysqli_error($conn);
    }
}

?>



<?php
include 'footersrc.php';
?>