<?php
if($_GET){
	$pass=$_GET['data'];
function passvalidate($password){
         //password bayad 8 raghami va daraye add,horof bozorg bashe
         return preg_match('/^(?=^.{8,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/', $password);
 }

 	$res=passvalidate($pass);
 	if($res==true){
 		echo '<font color="green">!رمز عبور شما قوی است حله داداش</font>';

 	}else{
 		 		echo '<font color="red">رمز عبور شما قوی نیست! نیاز به استحکام بیشتری دارد</font>';

 	}
 }else{
 		 		echo '<font color="red">هیچی ارسال نمیشه!</font>';
 }
?>