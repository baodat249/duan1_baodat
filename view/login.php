<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/login.css">
	<title>Document</title>
	<style>
		.alert {
			padding: 10px;
			background-color: #fff;
			color: #000;
			border: 2px solid #FEAC5E;
			text-align: center;
		}
	</style>
</head>

<body>
	<table width="100%">
		<tr>
			<td valign="top" width="50%" class="imglogin">
				<img src="IMG/Imgpage/imglogin.png" alt="Image" style="width:100%;height:750px;">
			</td>
			<td valign="top" width="50%">
				<form action="index.php?act=login" method="post" class="containerlogin" style="margin: 80px 0;">
					<div id="login">
						<center>
							<img src="IMG/Logo/DIMO tach nen - Copy.png" alt="" class="imglogo">
						</center>
						<h3>MY ACCOUNT</h3>
						<ul class="choose">
							<li>
								<a href="index.php?act=login">LOG IN</a>
							</li>
							<li>
								<a href="index.php?act=signup">SIGN UP</a>
							</li>
						</ul>
						<div class="inputs">
							<input type="text" name="name_user" required>
							<label class="label">User Name</label>
						</div>
						<div class="inputs">
							<input type="password" name="password_user" required>
							<label class="label">Pass Word</label>
						</div>

						<div class="submit_user" style="justify-content:center ; margin-bottom:2rem;">
							<input type="submit" class="btnlogin" name="login" value="LOG IN">
						</div>

						<?php
						if (isset($thongbao) && ($thongbao != "")) {
							echo "<div class='alert'>
								$thongbao</div>";

							// echo "<script type='text/javascript'>alert('$thongbao');</script>";
						}
						?>
						<a href="index.php?act=forgotpass" class="forgot">Forgot Password?</a>
					</div>
				</form>
			</td>
		</tr>
	</table>
	</div>
</body>

</html>