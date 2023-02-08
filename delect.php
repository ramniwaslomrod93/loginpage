<?php 
include 'dbconastion.php';
$id = $_GET['id'];
$deletequery = "delete from job where id=$id";
$query = mysqli_query($con,$deletequery);
if($query){
    ?>
    <script>
        alert("deleted successfull")
    </script>
    <?php
}else{
    ?>
    <script>
        alert(" not deleted")
    </script>
    <?php

}




header('location:post.php');




?>