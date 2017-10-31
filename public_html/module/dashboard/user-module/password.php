
        <?php 
           session_start();
            if (!isset($_SESSION['user'])) {
                die();
            }
        ?>
        
        <?php
            $val = "User Profile | CBTS.in"; 
            include './module/dashboard/content/topnav.php'; 
        ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Change Password</h4>
                            </div>
                            <div class="content">
                                <form action="./module/dashboard/user-control/password.php" method="post" class="password-control">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <input type="password" class="form-control" placeholder="Current Password" name="password" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" placeholder="New Password" name="npassword" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Re Enter New Password</label>
                                                <input type="password" class="form-control" placeholder="Re Enter" name="rnpassword" required="true">
                                            </div>
                                        </div>
                                    </div>
    
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Change Password</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>