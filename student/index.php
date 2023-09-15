<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include "conn.php";
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form4</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body{
            background-color: darkslategrey ;
        }
        #a{
            border: 0px;
        }
        .div{
            margin-left:10%;
            width:60%;
        }
        input{
            margin-top: 
        }
        body{
            color:white;
        }
        tr td {
            color:white;
        }
    </style>
</head>
<body>

        

    <div class="container mt-5" id="one">
        <h1>Please Enter Your Data</h1>

        <form method="POST">
            <div class="row">
                <div class="col-6 mt-5">
                    <input type="text" name="id" class="form-control" id="a" placeholder="Id">
                </div>

               
            </div>
        <div class="row">
            <div class="col-6 mt-4">
                    <input type="text" name="name" class="form-control"id="b" placeholder="Name">
                </div>

                </div>
            <div class="row mt-4">
                <div class="col-6">
                    <input type="text" name="cource" class="form-control"id="c" placeholder="Cource">
                </div>
            </div>

            <input type="submit" class="btn btn-success mt-3 w-25" name="insert" value="insert">
            
        </form>
    </div>

    <?php
    if(isset($_POST['insert'])){
        $id= $_POST['id'];
        $name= $_POST['name'];
        $cource= $_POST['cource'];
        
        $insert = "INSERT INTO `students`(`id`, `name`, `cource`) VALUES ('$id','$name','$cource')";
        if(mysqli_query($conn,$insert)){
            echo '<script> alert("data successfully inserted")</script>'
            ;
            header ("location: index.php");
        }
        else{
            echo "Data Not Inserted";
        }
    }
    ?>    

display data
 <div class="div">
<table class="table">

<h3> Student Data </h3>

<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Cource</th>
</tr>

<tbody> 
    <?php
    $query = "SELECT * FROM `students` ";
    $result= mysqli_query($conn,$query);
    $check= mysqli_num_rows($result);
    if ($check){
        while($row= mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row['id']?> </td>
                <td> <?php echo $row['name']?> </td>
                <td> <?php echo $row['cource']?> </td>
            </tr>
            <?php
        }
    }
    else{
        echo "Record Not Found";
    }
    ?>
</tbody>



</table>
</div> 
</body>
</html>




