<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		die();
	}
    include '../../../../adminlibrary/phplib.php';
	$name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $uid = $_SESSION['user'];
    $sql = "update user set name='{$name}' , mobile = '{$mobile}' , email = '{$email}' where uid = '{$uid}' ";
    // echo $sql;


    $sql1 = "select * from user where uid = '{$uid}'";
    $result1 = $conn->query($sql1);
    $row = $result1->fetch_assoc();




    $n = 3;



    if (isset($_POST['name'])) {
        if($name == ""){
            $n = 4;
        }elseif($mobile == ''){
            $n = 5;
        }elseif($email == ''){
            $n = 6;
        }
        
        if ($row['mobile'] == $mobile && $row['email'] == $email) {


        }elseif($row['mobile'] != $mobile && $row['email'] == $email){
            $sql2 = "select * from user where mobile = '{$mobile}' ";
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
                $n = 1;
            }
        }elseif($row['mobile'] == $mobile && $row['email'] != $email){
            $sql3= "select * from user where email = '{$email}' ";
            $result3 = $conn->query($sql3);

            if($result3->num_rows > 0){             
                $n = 2;
            }
        }elseif($row['mobile'] != $mobile && $row['email'] != $email){
            $sql2 = "select * from user where mobile = '{$mobile}' ";
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
                $n = 1;
            }

            $sql3= "select * from user where email = '{$email}' ";
            $result3 = $conn->query($sql3);

            if($result3->num_rows > 0){             
                $n = 2;
            }
        }
    }
    switch ($n) {
        case 1:
            echo "This Mobile is already Registered";
            break;
        
        case 2:
            echo "This Email is already Registered";
            break;

        case 4:
            echo "Name Can't Be Empty";
            break;

        case 5:
            echo "Mobile Cann't Be Empty";
            break;

        case 6:
            echo "Email Can't Be Empty";
            break;

        case 3:
            $conn->query($sql);
            echo 1;
            break;
        
        default:
            echo "Something Wrong Happened";
            break;
    }
?> 