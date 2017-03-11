<?php
include "teacher_header.php";
include "connection.php";

?>
<!doctype>
<html>
<head>
</head>
<body>
<div style="background-image: url('');padding: 40px;height:auto;background-size: 100%;">

    <div class="container">
        <form action="teacher_add_job_action.php" method="post">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well">
                        <div class="row">
                            <div class="form-group">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h2><center>Job information</center></h2></div>
                                </div>
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
                                <label>Description</label>
								<textarea class="form-control" rows="4" name="description"></textarea>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group col-md-12">
                                <label>Responsibilities</label>
								<textarea class="form-control" rows="4" name="responsibilities"></textarea>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group col-md-12">
                                <label>Requirements</label>
								<textarea class="form-control" rows="4" name="requirements"></textarea>
                            </div>
                        </div>
						<div class="row">
                            <div class="form-group col-md-12">
                                <label>Credits</label>
								<select class="form-control" name="credits">
                                    <option>3</option>
                                    <option>6</option>
                                    <option>9</option>
                                </select>
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
