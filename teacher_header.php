<?php
session_start();
if(isset($_SESSION['email']))
{}
else
{
    header("location:teacher_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher Portal | University of Bridgeport</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="teacher_index.php">Teacher Portal | UB</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="teacher_index.php">Home</a></li>
                <li><a href="#">Jobs</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li><a href="#">Change password</a></li>
                <li>
                    <a href="teacher_logout.php"><span class="glyphicon glyphicon-off" style="vertical-align: middle"></span> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>