<?php
include 'connect.php';

if(isset($_POST['add_info'])){
    $std_name=$_POST['name'];
    $std_email =$_POST['std_email'] ;
    $std_mobile =$_POST['std_mobile'];
    $std_pass =$_POST['std_password' ];

    $sql = "insert into `curd` (NAMES, email, mobile, password) values ( '$std_name','$std_email','$std_mobile','$std_pass')";
    
    $result = mysqli_query($conn,$sql);
    if($result){
        //linkup
        header('location:display.php');
        
        //echo"Data inserted successfully";
    }
    else{
       die(mysqli_error($conn));
    }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Project php</title>
  </head>
  <body>
    <div class="container my-4 p4 shadow">
        <h2><a style="text-decoration:none;" href="Index.php"> Student Database </a></h2>
        <form class="form" method="POST" >

             <input class="form-control mb-4" type="text" name="name" placeholder="Enter Your Name"> 

            <input class="form-control mb-4" type="text" name="std_email" placeholder="Enter Your Email">

            <input class="form-control mb-4" type="text" name="std_mobile" placeholder="Enter Your Mobile">

            <input class="form-control mb-4" type="text" name="std_password" placeholder="Enter Your Password">

            <button type="submit" name="add_info" class="form-control bg-warning ">Add Information</button></br>
            
        </form>
    </div>
   <!-- <div class="container my-4 p-4 shadow">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th> Number </th>
                    <th> Name </th>
                    <th> Mobile </th>
                    <th> Password</th>
                    <th> Action </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td> 1 </td>
                    <td> php </td>
                    <td> 1098 </td>
                    <td> </td>
                    <td> 
                        <a class="btn btn-success" href="#"> Edit </a>
                        <a class="btn btn-warning" href="#"> Delete </a>
                        
                    </td>
                    

                </tr>-->


            </tbody>


        </table>


    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>