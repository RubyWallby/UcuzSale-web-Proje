
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Giriş Yap </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="logimages/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logvendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logfonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logfonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logvendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="logvendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logvendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logvendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="logvendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/logutil.css">
	<link rel="stylesheet" type="text/css" href="css/logmain.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('logimages/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Giriş Yap
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Kullanıcı Adı gereklidir">
						<span class="label-input100">Kullanıcı Adı</span>
						<input class="input100" type="text" name="username" placeholder="Kullanıcı Adı Giriniz">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Şifre gereklidir">
						<span class="label-input100">Parola</span>
						<input class="input100" type="password" name="pass" placeholder="Parola Giriniz">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Parolanı mı unuttun?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Giriş Yap
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Veya Kayıt Ol
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						
						<a href="register.php" class="txt2">
							 Kayıt Ol
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="logvendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="logvendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="logvendor/bootstrap/js/popper.js"></script>
	<script src="logvendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="logvendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="logvendor/daterangepicker/moment.min.js"></script>
	<script src="logvendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="logvendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/logmain.js"></script>

</body>
<?php
	//session_start();
	$link = mysqli_connect('localhost','root','');
	mysqli_select_db($link,'register');
	if(isset($_POST["submit"]))
	{
		$name = $_POST['username'];
		$password =$_POST['pass'];
			$res = mysqli_query($link, "SELECT * FROM musteriler WHERE isim='$kullanici' && parola='$password'");
			$num = mysqli_num_rows($res);
			if($num==1){
			//	$_SESSION[' username '] = $name;

				echo "<script type = 'text/javascript'>alert('Başarıyla giriş yaptınız');</script>";
				header("location: main.php");
			}
			else{
				echo "<script type = 'text/javascript'>alert('TEKRAR GİRİS YAPİNİZ');</script>";
			}
		//$email = $_POST['email'];
		//$inserver = mysqli_query($link,"INSERT INTO regtab VALUES ('$name','$password','$email')");
	}



?>

</html>