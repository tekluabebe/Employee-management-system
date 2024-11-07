<?php

require_once ('dbh.php');

$pname = $_POST['pname'];
$eid = $_POST['eid'];
$duedate = $_POST['duedate'];
$subdate = $_POST['subdate'];
$sql = "INSERT INTO `project`(`eid`, `pname`, `duedate` , `subdate`,`status`) VALUES ('$eid' , '$pname' , '$duedate','$subdate' , '$Due')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    
    header("Location: ..//assignproject.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>