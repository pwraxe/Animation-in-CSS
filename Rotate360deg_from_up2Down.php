/*
  Program : Rotate box in 360deg from top to (center) i.e. --> 'margin-top:20%;'
   NOTE  :  HTML & CSS Code must in different File
*/

index.php
-----------------------------------------------------------------------
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Practice</title>
		<style type="text/css">
			
			
		</style>
	</head>
	<body>
		<center> <div>Akshay</div> </center>
	</body>
</html>

-----------------------------------------------------------------------
style.css
-----------------------------------------------------------------------

div{
	width: 30%;
	padding: 50px;
	border:2px solid black;
	margin-top: 20%;
	transition: 2s;
	animation-name: Rect;
	animation-duration: 2s;

}
@keyframes Rect{
	from{
		transform: rotate(0deg);
	}
	to{
		transform: rotate(360deg);
	}
}
