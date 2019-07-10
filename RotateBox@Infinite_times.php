<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		
		<style type="text/css">
			div{
				border: 2px solid green;
				padding: 30px;
				max-width:30%; 
				margin-top: 250px;
				transition: 5s;
				
				animation: myAni 1s infinite linear
			}
			@keyframes myAni{
				from{
					transform: rotate(0deg);
				}
				to{
					transform: rotate(360deg);
				}
			}
			
		</style>
	</head>
	<body>
		<center><div></div></center>
	</body>
</html>
