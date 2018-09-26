

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  
    <link rel="shortcut icon" href="../images/icon.png" type="image/jpeg" />
    <title>Dashboard</title>

<style>
    nav a{
        color:#000 !important;
    }
    .success th{
        text-align:center;
    }
    .info td{
        text-align:center;
    }
</style>


</head>
<body>
<!--Navbar-->

<nav class="navbar navbar-default" style="background:teal">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h4>
                    <a class="navbar-brand" href="admindashboard.php">Admin Dashboard</a>
                </h4>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h5>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="sponser.php">ADD Sponser</a>
                        </li>
                        <li>
                            <a href="register.php">View Participant</a>
                        </li>
                        <!-- <li>
                            <a href="img.php">Add Partner</a>
                        </li> -->
                        
                        <li>
                            <a href="index.php">LOGOUT</a>
                        </li>
                    </ul>
                </h5>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<!--End Of Navbar-->

    <div class="container">
<div class="row">
    <div class="col-md-8 col-md-push-2">


<?php
session_start();
// //Server DB
// $con=mysqli_connect("localhost","cipherathon","info@fame") or die("unable to connect");
// mysqli_select_db($con,'Cipherathon');

//Local DB
$con=mysqli_connect("localhost","root","123456") or die("unable to connect");
mysqli_select_db($con,'hackathon');
$select="SELECT * FROM sponser";
$res=mysqli_query($con,$select);
if(mysqli_num_rows($res)>0){
  
    
    echo " <table class='table table-striped table-hover table-responsive table-bordered'>
    <tr class='success'>
        <th>Sponser Title</th>
        <th>Sponser_Code</th>
        <th>Person_Name</th>
        <th>Sponser_Number</th>
        <th>Sponser_email</th>
    </tr>";
    while($row=mysqli_fetch_assoc($res)){
        echo " <tr class='info'>";
                        echo  "<td>".$row['title']."</td>";
                        echo  "<td>".$row['sponse_code']."</td>";
                        echo  "<td>".$row['person_name']."</td>";
                        echo  "<td>".$row['person_number']."</td>";
                        echo  "<td>".$row['person_email']."</td>";  
                        echo "</tr>";
    }
}

?>
</div>
</div>

    </div>



         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html> 
