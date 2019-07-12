<!DOCTYPE html>
<html>
<head>
	<title>Change Image</title>
	<style type="text/css">
		.container{
			position: relative;
			width: 100%;
			height: auto;
			border: 1px solid black;
		}
		.water{
			position: absolute;
			width: 100%;
			height: 
			top: 0;
			left: 0;
			overflow: hidden;	
			transition: 2s;
			animation-name: For_back;
			animation-duration: 10s;
			animation-iteration-count: infinite;
			transition-timing-function: ease-in-out;
		}
		.formback{
			width: 100%;
			position: absolute;
			overflow: hidden;
			top: 0;
			left: 0;
			animation-name: For_Water;
			animation-duration: 10s;		
			animation-iteration-count: infinite;
			transition-timing-function: ease-in-out;
		}

		@keyframes For_Water{
			from{
				opacity: 0;
			}
			50%{
				opacity: 1
			}
			to{
				opacity: 0;
			} 
		}

		@keyframes For_back{
			from{
				opacity: 1;
			}
			50%{
				opacity: 0
			}
			to{
				opacity: 1;
			} 
		}

	</style>
</head>
<body>
	<div class="container">
		<img src="water.jpg" class="water" >
		<img src="formback.jpg" class="formback">
	</div>


</body>
</html>
