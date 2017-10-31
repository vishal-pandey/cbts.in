<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		die();
	}
	include "../adminlibrary/phplib.php"; 
	// unset($_SESSION['uid']);
	$uid = $_SESSION['user'];
	$sql = "select * from user where uid = '{$uid}'";
	$result = $conn->query($sql);
	$user = $result->fetch_assoc();
?>
<?php include './module/dashboard/content/script.php' ?>
<div class="wrapper">
    <?php include './module/dashboard/content/sidebar.php'; ?>

    <div class="main-panel">
        <?php 
        	if (isset($_GET['module'])) {
        		$file = './module/dashboard/user-module/'.$_GET['module'].".php";
        		if (file_exists($file)) {
        			include $file;
        		}
        		else{
        			include './module/dashboard/user-module/home.php';
        		}
        	}else{
	        	include './module/dashboard/user-module/home.php'; 
        	}
        ?>
        

        <?php include './module/dashboard/content/footer.php'; ?>
        

    </div>
</div>


