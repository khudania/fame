<?php
session_start();
// //Server DB
// $con=mysqli_connect("localhost","cipherathon","info@fame") or die("unable to connect");
// mysqli_select_db($con,'Cipherathon');

//Local DB
$con=mysqli_connect("localhost","root","123456") or die("unable to connect");
mysqli_select_db($con,'hackathon');
if(isset($_POST['insert'])){
    if(isset($_POST['sponser_title'])){
        $_SESSION['sponser_title']=$_POST['sponser_title'];
        $sponser_title=$_SESSION['sponser_title'];
            }
            if(isset($_POST['person_name'])){
                $_SESSION['person_name']=$_POST['person_name'];
                $person_name=$_SESSION['person_name'];
                    }
                    if(isset($_POST['sponser_number'])){
                        $_SESSION['sponser_number']=$_POST['sponser_number'];
                        $sponser_number=$_SESSION['sponser_number'];
                            }
                            if(isset($_POST['sponser_code'])){
                                $_SESSION['sponser_code']=$_POST['sponser_code'];
                                $sponser_code=$_SESSION['sponser_code'];
                                    }

                                    if(isset($_POST['sponser_email'])){
                                        $_SESSION['sponser_email']=$_POST['sponser_email'];
                                        $sponser_email=$_SESSION['sponser_email'];
                                            }
$sql="INSERT INTO sponser VALUES('$sponser_title','$sponser_code','$person_name','$sponser_number','$sponser_email')";
$res=mysqli_query($con,$sql);
if($res){

    echo "<script>alert('your details has been submited')</script>";
    echo "<script type='text/javascript'>wow.location.href = 'admindashboard.php'    </script>";
}

}
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
   
    <link rel="shortcut icon" href="../images/icon.png" type="image/jpeg" /> 
    <title>Dashboard</title>


    <style>
        nav a{
            color: #000 !important;
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
            <div class="col-md-7 col-md-push-3">
                <div class="panel panel-default" style="padding:8px; margin-bottom:0" >
                <div class="panel-head">
                    <center>
                        <h2>Sponsors</h2>
                    </center>
                    <hr>
                </div>
                <div class="panel-body">
        <form action="sponser.php" method="POST" class="reg">
            <!-- <div class="form-group">
                <label for="Fullname">Company Name
                </label>
                <input type="text" class="form-control" name="cname" />
            </div> -->
            <div class="form-group ">
                <label for="Sponser Title">Sponser Title</label>
                <input type="text" class="form-control" name="sponser_title" />
            </div>
            <div class="form-group ">
                <label for="Sponser Code">Sponser Code</label>
                <input type="text" class="form-control" name="sponser_code" />
            </div>
            <div class="form-group ">
                <label for="Person Name">Person Name</label>
                <input type="text" class="form-control" name="person_name" />
            </div>
            <div class="form-group ">
                <label for="Sponser Number">Sponser Number</label>
                <input type="number" class="form-control" name="sponser_number" />
            </div>
            <div class="form-group ">
                <label for="Sponser Email">Sponser Email</label>
                <input type="email" class="form-control" name="sponser_email" />
            </div>
            <button class="btn btn-success" name="insert" >ADD</button>
</form>
</div>
</div> 
</div>
</div>
    </div>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>   
