<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
			a{
			text-decoration: none; 
			color: #0000ff57;	
			}
			a:hover{
				color:blue;
				transition: all ease-in-out 1.4s;
			}
		.result{
			display: flex;
			justify-content: center;
			align-items: center;
			background: white;
			border-radius: 5px;
			width:500px;
			height: auto;
			margin: 0 auto;
			margin-top: 5px;
			border":2px solid black;
		}
		body{
  		background: linear-gradient(-90deg, red, yellow);
  			font-family:'BYEKAN';

		}
		.info{
			border: 1px solid black;
			border-radius: 5px;
			padding: 5px;
			width:500px;
			margin-top: 100px;
		}
		.send{
			border: 1px solid black;
			border-radius: 5px;
			padding: 4.5px;
			width:200px;
			margin-top: 100px;

		}
		.uclearn-logo{
			  display: flex;
  			justify-content: center;
  			align-items: center;
  			margin: 0 auto;
		}
		.title{
			 display: flex;
  			justify-content: center;
  			align-items: center;
  			margin: 0 auto;
		}
		@font-face{font-family:'BYekan';src: url('fonts/BYekan.eot?#') format('eot'),url('fonts/BYekan.woff') format('woff'),url('fonts/BYekan.ttf') format('truetype');}

		input{
				font-family:'BYEKAN';

		}
	</style>
	<title>ajax with php & jquery</title>
	<script src="jquery.js" type="text/javascript"></script>
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
	<div style="display: flex;
justify-content: center;
align-items: center;">
	<input type="text" class="info">
	<input type="button" class="send" value="ارسال اطلاعات ">
	</div>
		<div class="result" ></div>

</body>
</html>

