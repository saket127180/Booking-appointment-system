<?php
error_reporting(0);
$fn=$_GET['fullname'];
$email=$_GET['email'];
$date=$_GET['date'];
$message=$_GET['message'];
$conn = mysqli_connect("localhost","root","","book") or die("connection failed");
$query = "INERT INTO entry(Full_name,Email,Date,Message)
VALUES ('{$fn}','{$email}','{$date}','{$message}')";



