<?php 
include 'account.php';

$checkbox = $_POST['allergies[]'];

if($_POST["Submit"]=="Submit") {
    for ($i=0; $i<sizeof ($checkox); $i++){
        $query= "INSERT INTO users (allergies) VALUES ('".$checkbox[$i]."')";
    }
    echo "Record is inserted";
}
?>