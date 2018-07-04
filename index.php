<!DOCTYPE html>
<html>
<head>
	<title>ajax with php & jquery</title>
	<link rel="stylesheet" src="styles/style.css" >
	<script src="js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.send').click(function(){
				var info = $('.info').val();
		$.ajax({url:"ajax.php",data:"data="+info,success:function(data){
			$('.result').html(data);
				}});
			});
		});
	</script>
</head>
<body>

	<img src="img/uclearn-logo.png" class="uclearn-logo">
		<a href="http://uclean.ir/php/ajax-php-jquery-programming"><h1 class="title">آموزش ایجکس</h1></a>
		<div style="display: flex;justify-content: center;align-items:center;">
	<input type="text" class="info">
	<input type="button" class="send" value="ارسال اطلاعات ">
	</div>
		<div class="result" ></div>

</body>
</html>

