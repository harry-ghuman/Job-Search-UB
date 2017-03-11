<?php
include "admin_header.php";
include "connection.php";

?>
<!doctype>
<html>
<head>
</head>
<body>
<div style="background-image: url('');padding: 40px;height:auto;background-size: 100%;">
	
    <div class="container">
        <form action="admin_add_teacher_action.php" method="post">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well">
                        <div class="row">
                            <div class="form-group">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h2><center>Teacher information</center></h2></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>First name</label>
                                <input type="text"class="form-control"name="firstname" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last name</label>
                                <input type="text"class="form-control"name="lastname" required>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group col-md-12">
                                <label>Special designation</label>
                                <input type="text"class="form-control"name="special_designation">
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group col-md-12">
                                <label>Job title</label>
                                <input type="text"class="form-control"name="job_title" required>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group col-md-12">
                                <label>Department</label>
                                <input type="text"class="form-control"name="department" required>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email"class="form-control"name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Phone</label>
                                <input type="text"class="form-control"name="phone" required>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group col-md-12">
                                <label>Office address</label>
                                <input type="text"class="form-control"name="office_address" required>
                            </div>
                        </div>
						<br>
						<div class="row" style="margin-left: 5px">
							<button type="submit" class="btn btn-primary btn-lg">Submit</button>
						</div>
                        
                    </div>
                </div>
			</div>
        </form>
    </div>
</div>
</body>
</html>