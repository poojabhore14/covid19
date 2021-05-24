<?php 

$server = "localhost";
$user = "root";
$pass = "";
$db = "corona";

$conn = mysqli_connect($server, $user, $pass, $db);

if($conn){
    ?>
    <script>
       alert("COnnection Succefull");
    </script>
    <?php
}else
{
    ?>
    <script>
       alert("COnnection Failed");
    </script>
    <?php
}


?>