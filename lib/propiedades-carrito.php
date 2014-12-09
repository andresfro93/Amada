<?php 

session_start();
$ver=$_POST['ver'];

if($ver=="contador"){
	if(isset($_SESSION['contador'])){
	   echo $_SESSION['contador'];
    }else{
    	echo 1;
    }
}
?>