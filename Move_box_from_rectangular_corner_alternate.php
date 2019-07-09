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
				  
				animation-direction: alternate;  
				animation-timing-function:ease-in-out;
				animation-iteration-count: infinite;
				animation-fill-mode: backwards;
				animation
				
			}
			@keyframes myAni{
				from{
					background-color: red;
					transform: translate(0px,0px);
				}
				25%{
					background-color: blue;
					transform: translate(1150px,0px);
				}
				50%{
					background-color: black;
					transform: translate(1150px,450px);
					
				}
				75%{
					background-color: green;
					transform: translate(0px,450px);
				}
				to{
					background-color: red;
					transform: translate(0px,0px);
				}

			}
			
		</style>
	</head>
	<body>
		<div></div>
	</body>
</html>
