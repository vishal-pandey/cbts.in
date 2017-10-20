<?php
	include "../../../adminlibrary/phplib.php";
	if ($_POST['form'] == 'add') {
		$tid = $_POST['tid'];
		$pid = $_POST['pid'];
		$ptable = "p".$pid;
		$sql = "insert into {$ptable} (test) value ($tid)";
		$conn->query($sql);
	}
	if ($_POST['form'] == 'remove') {
		$tid = $_POST['tid'];
		$pid = $_POST['pid'];
		$ptable = "p".$pid;
		$sql = "delete from {$ptable} where test = '{$tid}'";
		$conn->query($sql);
	}
?>