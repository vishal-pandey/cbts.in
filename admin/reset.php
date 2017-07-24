<?php
	$server = "localhost";
    $user = "root";
    $pwd = "12345";
    $db = "ssc";
    $conn = new mysqli($server , $user , $pwd , $db);
    $qno = $_GET['qno'];
    $sql = "DELETE FROM tid1 WHERE qno = '{$qno}'";
    $conn->query($sql);
    $ip = '../pics/i'.$qno.'.jpg'; 
    $a1p = '../pics/a1'.$qno.'.jpg'; 
    $a2p = '../pics/a2'.$qno.'.jpg'; 
    $a3p = '../pics/a3'.$qno.'.jpg'; 
    $a4p = '../pics/a4'.$qno.'.jpg'; 
	unlink($ip);
	unlink($a1p);
	unlink($a2p);
	unlink($a3p);
	unlink($a4p);
?>
<script type="text/javascript">
    window.location.href = history.back();
</script>