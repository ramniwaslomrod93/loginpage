<!DOCTYPE html>
<html>
<head>
    <title> ok display data base table show</title>
    <?php include 'link/links.php' ?>
    <link rel="stylesheet" href="css/style-2.css">
    <link rel="stylesheet" href="css/style.css" class="btn">
</head>
<body>

  <div class="main-div">
    <h1></h1>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>url</th>
                    <th>description</th>
                    <th>status</th>
                    <th>crected</th>
                    <th>modified</th>
                    <th colspan="2">optstion</th>
                    
                </tr>
            </thead>
            <Tbody>
                <?php
                include 'dbconastion.php';
                $selectquery = "select * from job";
                $query = mysqli_query($con,$selectquery);
                $num = mysqli_num_rows($query);
                while($res = mysqli_fetch_array($query)){
                ?>

                <tr>
                    <td> <?php echo $res['id']; ?></td>
                    <td> <?php echo $res['title']; ?></td>
                    <td> <?php echo $res['url']; ?></td>
                    <td> <?php echo $res['description']; ?></td>
                    <td> <?php echo $res['status']; ?> </td>
                    <td> <?php echo $res['crected']; ?></td>
                    <td> <?php echo $res['modified']; ?></td>
                    <td> <a href="edit.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="EDIT"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
                    <td> <a href="delect.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="DELECT"> <i class="fa fa-trash" aria-hidden="true"></i> </a></td>

                </tr>
                <?php
                }
                ?>
                <h1><span class="email-style"><a href="add.php"> new post </a></span></h1>
                
            </Tbody>
        </table>
    </div>
  </div>

    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
</html>
