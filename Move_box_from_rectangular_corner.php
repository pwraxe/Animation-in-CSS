<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		
		<style type="text/css">
			div{
				width: 200px;
				height: 200px;
				border: 1px solid red;
				background-color:red;
			
				animation-name: myAni;
				animation-duration: 5s;
			}
			@keyframes myAni{
				from{
					transform: translate(0px,0px);
				}
				25%{
					transform: translate(1150px,0px);
				}
				50%{
					transform: translate(1150px,450px);
				}
				75%{
					transform: translate(0px,450px);
				}
				to{
					transform: translate(0px,0px);
				}

			}
			
		</style>
	</head>
	<body>
		<div></div>
	</body>
</html>
