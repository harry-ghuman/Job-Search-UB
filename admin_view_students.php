<?php
include "admin_header.php";
include "connection.php";
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
                    <center><h2>List of students</h2></center>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Batch</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count=1;
                        $query2="select * from student_info";
                        $result2=mysqli_query($conn,$query2);
                        while($row2=mysqli_fetch_array($result2)){
                            $name=$row2[4].' '.$row2[6];
                            $batch=$row2[1].' '.$row2[2];
                    ?>
                    <tr>
                        <td><?php echo $count."." ?></td>
                        <td><?php echo $row2[3] ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $batch ?></td>
						<td>
							<button onclick="location.href='admin_view_students_specific.php?student_id=<?php echo $row2[3] ?>'"class="btn btn-primary btn-md">View profile</button>
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
