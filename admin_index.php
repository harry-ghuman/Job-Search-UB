<?php
include "admin_header.php";
echo 'Welcome '.$_SESSION['username'];

if(isset($_REQUEST['q'])) {
        if($_REQUEST['q'] == 1) {
            ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <center>Password changed!</center>
            </div>
            <?php
        }
}