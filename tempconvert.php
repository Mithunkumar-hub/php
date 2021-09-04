<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		h1{
			text-align: center;
			margin-top: 20px;
			color: #a649d6;
			font-size: 60px;
		}
		.main-div{
			width: 100%;
			height: 80vh;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}
		.left-side{
			background-color: #dfe6e9;
			border-radius: 30% 70% 70% 30%/ 30% 30% 70% 70%;;
		}
		.right-side{
			width: 400px;
			height: 300px;
			background-color: #dfe6e9;
			display: flex;
		    flex-direction: column;
			justify-content: center;
			align-items: center;
			text-align: center;

		}
		.input{
			width: 250px;
			height: 40px;
			padding: 5px;
			outline: none;
			border-radius: 1px solid grey;
			border-radius: 5px;

		}
		.selection{
			width: 100px;
			margin: 20px 0;

		}
		.btn{
			padding: 10px 16px;
			border-radius: 5px;
			outline: none;
			border: none;
			background-color:#6fa3d8;
			color: white;
			font-size: 0.9rem;
		}
	</style>
</head>
<body>
<header>
	<h1>temperature conversion</h1>
	<div class="main-div">
		<div class="left-side">
		<img src="chill.png">

	</div>
	<div class="right-side">
		<form method="POST">
			<input type="text" name="num" placeholder="enter your no">
	<div class=" selection">
		<label>celc</label>
		<input type="radio" name="units" value="cel">
		<label>faren</label>
		<input type="radio" name="units" value="feh">
	</div>
	<input type="submit" name="submit" value="Convert Now" class="btn">
</form>
<div>
	<p>
		<?php
		if (isset($_POST['submit'])) {
			$num = $_POST['num'];
			$temp = $_POST['units'];

			if($temp=="cel"){
				$result = $num * 9 / 5 +32;
				echo "the conversion value of cel in faren is". $result;
			}else{
				$result = ($num -32) * 5 / 9;
				echo "the conversion value of faren in cel is" . $result;
			}
		}
		?>
	</p>
</div>
</div>
</div>
</header>
</body>
</html>