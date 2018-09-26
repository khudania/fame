<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../images/icon.png" type="image/jpeg" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <!-- strat of javascript -->
    <!-- <script type="text/javascript">

        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
        //  history.pushState(null, null, "/");
    </script> -->


    <style>
        nav a{
            color: #000 !important;
        }
        .success th{
            text-align:center;
        }
        .info_data td{
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
        <div class="row padding">
            <h3 style="text-align:center; text-decoration:underline">Coupons Details</h3>


    <?php
// session_start();
// //Server DB
// $con=mysqli_connect("localhost","cipherathon","info@fame") or die("unable to connect");
// mysqli_select_db($con,'Cipherathon');

//Local DB


?>
<?php
$con=mysqli_connect("localhost","root","123456") or die("unable to connect");
mysqli_select_db($con,'hackathon');
$select="SELECT * FROM sponser";
$res=mysqli_query($con,$select);
while( $row = mysqli_fetch_assoc($res) ) {
?>

<div class="panel-deck">
<div class="col-sm-6 col-lg-3">
<div class="row">
<div class="panel bg-success">

<div class="panel-body info">
<div class="desc"><p> Company: <?php echo $row['title']; ?></p></div>
<div class="desc"><p> Coupon Code:<?php echo $row['sponse_code']; ?></p></div>
<?php $coupon=$row['sponse_code'];
        $query="SELECT * from rsvp WHERE coupon_name='$coupon'";
        $result=mysqli_query($con,$query);
        $count=mysqli_num_rows($result);?>
<div class="desc"><p>Coupon Number:<?php echo $count; ?></p></div>
<div class="panel-footer bottom">
 <?php echo '<a type="button" class="btn btn-sm btn-primary" href="sortcoupon.php?sortcoupon=' . $coupon . '">View Details</a>';?></div>
</a>
</div>
</div>
</div>
</div>
</div>

<?php } ?>






</div></div></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
