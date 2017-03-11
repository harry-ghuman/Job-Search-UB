<?php
include "student_header.php";
include "connection.php";
$query="select * from job_info";
$result=mysqli_query($conn,$query);
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
                    <?php
                    if(mysqli_num_rows($result)== 0){
                    ?>
                        <center><h2>No jobs posted</h2></center>
                        </div></div></div></div>
                        </body></html>
                    <?php
                    }
                    else{
                    ?>
                    <center><h2>List of jobs posted</h2></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Job title</th>
                        <th>Credits</th>
                        <th>Posted by</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count=1;
                        while($row=mysqli_fetch_array($result)){
                            $query2="select firstname,lastname from teacher_accounts where id='$row[6]'";
                            $result2=mysqli_query($conn,$query2);
                            $row2=mysqli_fetch_array($result2);
                            $teacher_name= $row2[0].' '.$row2[1];
                    ?>
                    <tr>
                        <td><?php echo $count."." ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[5] ?></td>
                        <td><?php echo $teacher_name ?></td>
						<td>
							<button onclick="location.href='student_view_jobs_more.php?job_title=<?php echo $row[1] ?>&teacher_id=<?php echo $row[6] ?>'"class="btn btn-primary btn-md">View more info</button>
						</td>
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
<?php
} ?>
