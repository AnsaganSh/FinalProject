<!DOCTYPE html>
<html>

<head>
	<title>Example</title>
	<style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			font-family: arial, sans-serif;
		}

		input,
		textarea {
			display: block;
			width: 300px;
			font-size: 18px;
			margin: 7px 0px;
		}

		label {
			display: block;
			padding: 2px 0px;
		}

		#conf {
			width: 100px;
			height: 100px;
			background-color: red;
			position: absolute;
			animation: myfirst 5s linear 2s infinite alternate;
		}

		@keyframes myfirst {
			0% {
				background-color: red;
				left: 40%;
				top: 25%;
			}

			25% {
				background-color: yellow;
				left: 50%;
				top: 25%px;
			}

			50% {
				background-color: blue;
				left: 200px;
				top: 200px;
			}

			75% {
				background-color: green;
				left: 0px;
				top: 200px;
			}

			100% {
				background-color: red;
				left: 0px;
				top: 0px;
			}
		}
	</style>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mobile.css">
</head>

<body>
	<header>

		<div id="flexHeader">
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index1.php"> <button id="tarih">Kazakhs<br>history</button></a>

				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index2.php"><button id="tarih">National <br> food</button></a>

				</p>
			</div>

			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index3.php"> <button id="tarih">National<br>drink</button></a>

				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index4.php"> <button id="tarih">National<br>games</button></a>

				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index5.php"> <button id="tarih">Kazakhs<br>clothes</button></a>

				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index6.php"> <button id="tarih">Kazakhs<br>sport</button></a>

				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index7.php"> <button id="tarih">National <br>dances</button></a>
				</p>
			</div>
			<div>
				<p id="tarihs">
					<a href="http://localhost/WebGroupProject/index8.php"> <button id="tarih">Add Info<br>or quation</button></a>
			</div>

		</div>

	</header>
	<div id='conf'>Add Message</div>
	<form method="post" action="send.php">
		<label>Name:</label>
		<input type="text" name="name">

		<label>Message:</label>
		<textarea name="message"></textarea>

		<input type="submit" name="btn">
	</form>
</body>

</html>