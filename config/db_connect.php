<?php
$conn = mysqli_connect('localhost','joy','password','kodex_food');
if(!$conn){
    echo'Wrong DB Details: '.mysqli_error();
}
?>


