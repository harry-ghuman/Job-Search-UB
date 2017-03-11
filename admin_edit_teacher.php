<!doctype>
<html>
<head>
</head>
<body>
<?php
include "admin_header.php";
include "connection.php";
$email=$_REQUEST['email'];
$query="select * from teacher_accounts where email='$email'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<div style="background-image: url('images/company.jpg');padding: 40px;height:auto;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="well">
                    <div class="row">
                        <div class="form-group">
                            <div class="panel panel-primary">
                                <div class="panel-heading"><h2><center>Edit teacher information</center></h2></div>
                            </div>
                        </div>
                    </div>
                    <form action="admin_edit_teacher_action.php" method="post">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <table class="table table-condensed">
                                    <thead></thead>
                                    <tbody>
                                    <tr>
                                        <td>First name</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="firstname" value="<?php echo $row[1] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Last name</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="lastname" value="<?php echo $row[2] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Special designation</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="special_designation" value="<?php echo $row[3] ?>">
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>Job title</td>
                                        <td></td>
                                    <td><input type="text"class="form-control"name="job_title" value="<?php echo $row[4] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Department</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="department" value="<?php echo $row[5] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="email" value="<?php echo $row[6] ?>" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="phone" value="<?php echo $row[7] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Office address</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="office_address" value="<?php echo $row[8] ?>"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </form>
                    <button onclick="location.href='admin_view_teachers.php'"class="btn btn-primary btn-md">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



