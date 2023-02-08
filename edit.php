<!DOCTYPE html>
<html lang="en">
<head>
  <title>update-data</title>
  <?php include 'link/links.php' ?>
  <link rel="stylesheet" href="css/style.css">
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
            <a href="post.php"> back </a> <br/>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply for Web Developer Post</h3>
                    <form action="edit.php" method="POST">
                        <div class="row register-form">

                        <?php
                            include 'dbconastion.php';
                            $showquery = "SELECT * FROM `job` WHERE id=".$_GET["id"];
                            $showdata = mysqli_query($conn,$showquery);
                            $arrdata = mysqli_fetch_array($showdata);
                // $selectquery = "select * from insdata1 ";
                // $query = mysqli_query($con,$selectquery);
                // $num = mysqli_num_rows($query);

                

                            if(isset($_POST['submit'])){
                                $title = $_POST['title'];
                                $url = $_POST['urlh'];
                                $des = $_POST['desn'];
                                $status = $_POST['stats'];
                                $query = "UPDATE `job` SET title='$title',url='$url',description='$des',status='$status' WHERE id=".$_POST['id'];
                             
                                $res = mysqli_query($con,$query);
                                if($res){
                                    ?>
                                    <script>
                                        alert("data updated properly");
                                        <?php header('location:post.php'); ?>
                                    </script>
                                    <?php 
                                }else{
                                    ?>
                                    <script>
                                        alert("data not updated ");
                                    </script>
                                    <?php
                                }
                            }
                        ?>
                            <div class="col-md-6">
                            <div class="form-group">
                                    <input type="hidden" class="form-control"  name="id" value="<?php echo $arrdata['id']; ?>" required/>
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="enter job title *" name="title" value="<?php echo $arrdata['title']; ?>" required/>
                                </div>
                                <div class="form-group">
                                <input type="tel" class="form-control" placeholder="enter url *" name="urlh" value="<?php echo $arrdata['url']; ?>" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" class="form-control" placeholder="enter descripstion*" name="desn" value="<?php echo $arrdata['description']; ?>" required/>
                            </div>
                                <div class="form-group">
                                <select name="stats" class="form-control" placeholder="status *" value="<?php echo $arrdata['status']; ?>" required/>
                                    <option value="">true</option>
                                    <option value="">false</option> 
                                    <option value="">true</option>                               
                                </select><br>
                                </div>
                                <input type="submit" class="btnRegister" name="submit" value="Update" />
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
