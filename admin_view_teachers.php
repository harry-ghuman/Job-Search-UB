<?php
include "admin_header.php";
include "connection.php";
$query="select * from teacher_accounts";
$result=mysqli_query($conn,$query);
//alerts
if(isset($_REQUEST['q'])) {
    if ($_REQUEST['q'] == 1) {
        ?>
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Teacher information deleted</center>
        </div>
        <?php
    }
    if ($_REQUEST['q'] == 2) {
        ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Teacher information added</center>
        </div>
        <?php
    }
    if ($_REQUEST['q'] == 3) {
        ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Teacher information updated</center>
        </div>
        <?php
    }
    if ($_REQUEST['q'] == 4) {
        ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <center>Teacher information already exists!</center>
        </div>
        <?php
    }
}
?>
<!doctype>
<html>
<head>
</head>
<body>
    <div class="container" >
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center><h2>Teacher information</h2></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Special designation</th>
                        <th>Job title</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Office address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count=1;
                        while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $count."." ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php echo $row[5] ?></td>
                        <td><?php echo $row[6] ?></td>
                        <td><?php echo $row[7] ?></td>
                        <td><?php echo $row[8] ?></td>
                    </tr>
                    <?php
                    $count++;
                    }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>