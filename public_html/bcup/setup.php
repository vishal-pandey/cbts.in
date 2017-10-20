<?php
	$sql = "create table user(name varchar(200) , mobile bigint(10) primary key, email varchar(300) , photo varchar(300))";

	$sql = "create table test(tid bigint(10) primary key, name text , duration int(3) ,correct_score float(5) , incorrect_score float(5) , per_to_pass int(3) , no_of_ques int(3), creation datetime , no_of_section int(2) )";

	$sql = "create table package (pid bigint(10) primary key, name text , description text , price int(5) , creation datetime)";
?>