<?php
	$name=$_GET['username'];
	$arr=array('apple','xiao','da','ad');
	$result=in_array($name,$arr);
	if($result){
		echo 'no';
	}else{
		echo 'yes';
	}
?>