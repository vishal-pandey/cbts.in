<?php
  $server = "localhost";
    $user = "root";
    $pwd = "12345";
    $db = "ssc";

    $conn = new mysqli($server , $user , $pwd , $db);


$target_dir = "../pics/";
$target_file = $target_dir . basename($_FILES["a2"]["name"]);
    // $target_file = $target_dir . $_GET['rn'];

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["a2"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
// if ($_FILES["a2"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

    $target_file = $target_dir .'a2'.$_GET['qno'].".jpg";


    if (move_uploaded_file($_FILES["a2"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["a2"]["name"]). " has been uploaded.";
        echo "The file ". $target_file . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$a2p = 'a2'.$_GET['qno'].'.jpg';
$qno = $_GET['qno'];

$sql = "INSERT INTO tid1 (qno , a2p) VALUES ('{$qno}' , '{$a2p}')";
$sql1 = "UPDATE tid1 SET a2p = '{$a2p}' WHERE qno = '{$qno}'";



if($conn->query($sql)){
    echo 'inserted1';
}
else{
    $conn->error;
}
if($conn->query($sql1)){
    echo "inserted2";
}
else {
    $conn->error;
}



?>
<script type="text/javascript">
    window.location.href = history.back();
</script>