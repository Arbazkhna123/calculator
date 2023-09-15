<?php 
$conn = mysqli_connect("localhost","root","","school");
if($conn){
    echo "database connect";
}
else{
    echo "not connect";
}
?>