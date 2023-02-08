<!DOCTYPE html>
<html lang="en"> 
<head>
  <title>project</title>
  <?php include 'link/links.php' ?>
    <link rel="stylesheet" href="css/style-2.css">
    <link rel="stylesheet" href="css/style.css" class="btn">
</head>
<body>
    <div class="ook">
        
    </div>

    <div class="container register">
        <div class="col-md-3 register-left">
            <img src="crud-removebg-preview.png" alt=""/>
            <h3>Welcome</h3>
            <p>Please fill all the details carefully. This form can
               change your life.
            </p>
            <a href="post.php">back</a> <br/>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply for Web Developer Post</h3>
                    <form action="add.php" method="POST">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="enter job title *" name="title" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="enter url *" name="urlh" value="" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="enter descripstion*" name="desn" value="" required/>
                                </div>
                                <div class="form-group">
                                <select name="stats" class="form-control" placeholder="status *" required/>
                                    <option value="">true</option>
                                    <option value="">false</option>
                                    <option value="">true</option>                                
                                </select><br>
                                </div>

                                <input type="submit" class="btnRegister" name="submit" value="Register" />
                            </div>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>

<?php
 include 'dbconastion.php';
 if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $url = $_POST['urlh'];
    $des = $_POST['desn'];
    $status = $_POST['stats'];

    $insertquery = "INSERT INTO `job`( `title`, `url`, `description`, `status`) VALUES ('$title','$url','$des','$status')";
    $res = mysqli_query($con,$insertquery);
    if($res){
        ?>
        <script>
            alert("data inserted properly");
            <?php header('location:post.php'); ?>
        </script>
        <?php 
    }else{
        ?>
        <script>
            alert("data not inserted ");
        </script>
        <?php
    }
 }
?>