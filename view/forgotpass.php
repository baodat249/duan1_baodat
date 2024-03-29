<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/login.css">
	<title>Document</title>
</head>
<style>
		.alert {
			padding: 10px;
			background-color: #fff;
			color: #000;
			border: 2px solid #FEAC5E;
			text-align: center;
		}
	</style>
<body>
	<table width="100%">
		<tr>
			<td valign="top" width="50%" class="imglogin">
				<img src="IMG/Imgpage/imgforgot.png" alt="Image" style="width:100%;height:750px;">
			</td>
			<td valign="top" width="50%">
				<form action="index.php?act=forgotpass" class="containerlogin" method="post" style="margin-top: 150px;">
					<div id="login">
						<center>
							<img src="IMG/Logo/DIMO tach nen - Copy.png" alt="" class="imglogo">
						</center>
						<h3>MY ACCOUNT</h3>
						<div class="inputs">
							<input type="email" name="email_user" required>
							<label class="label">Email address</label>
						</div>
						<div class="submit_user" style="justify-content:center ; margin-bottom:2rem;">
							<input type="submit" class="btnlogin" name="sendemail" value="RESET PASSWORD">
						</div>
						<?php
						if (isset($thongbao) && ($thongbao != "")) {
							echo "<div class='alert'>
								$thongbao</div>";

							// echo "<script type='text/javascript'>alert('$thongbao');</script>";
						}
						?>
						<a href="index.php?act=login" class="forgot">LOG IN</a>
					</div>
				</form>
			</td>
		</tr>
	</table>
</body>

</html>