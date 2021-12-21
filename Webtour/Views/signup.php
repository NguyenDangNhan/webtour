<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng ký</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./Public/client/img/icons/favicon.ico"/>
    <link rel="stylesheet" href="./Views/web.css"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Public/client/css/main.css">
	<link rel="stylesheet" type="text/css" href="Public/client/css/util.css">
<!--===============================================================================================-->
</head>
<body>
<table class="bhd" >
           <tr >
            <td >
            <a class="RTC mg fcl" href="./?controllers=back" style="text-decoration: none">← Quay lại trang chủ</a>
                <span class="right" style="margin-left: 80%;">
                    <a class="fcl bd" style="text-decoration: none" type="submit" href="./?action=login">Đăng Nhập</a>
                </span>
            </td>
           </tr>
       </table>
	<div class="limiter"  id="signup" role="dialog">
		<div class="container-login100" style="background-image: url('./Public/client/img/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Signup
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="./?action=signUp">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Tên tài khoản">
						<span  class="focus-input100" ><img style="margin-top: 40px;margin-left: 34px;" width="22px" src="./Public/client/img/icons/user-login.png" alt=""></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter password">
						<input class="input100" type="password" name="pass" placeholder="Mật khẩu">
						<span  class="focus-input100" ><img style="margin-top: 40px;margin-left: 34px;" width="22px" src="./Public/client/img/icons/user-login.png" alt=""></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter password">
						<input class="input100" type="password" name="passnhaplai" placeholder="Nhập lại mật khẩu">
						<span  class="focus-input100" ><img style="margin-top: 40px;margin-left: 34px;" width="22px" src="./Public/client/img/icons/user-login.png" alt=""></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter fullname">
						<input class="input100" type="text" name="full_name" placeholder="Tên người dùng">
						<span  class="focus-input100" ><img style="margin-top: 40px;margin-left: 34px;" width="22px" src="./Public/client/img/icons/user-login.png" alt=""></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter phone">
						<input class="input100" type="text" name="phone" placeholder="Số điện thoại">
						<span  class="focus-input100" ><img style="margin-top: 40px;margin-left: 34px;" width="22px" src="./Public/client/img/icons/user-login.png" alt=""></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="email">
						<span  class="focus-input100" ><img style="margin-top: 40px;margin-left: 34px;" width="22px" src="./Public/client/img/icons/user-login.png" alt=""></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
                    <input type="submit" name="signup"  value="signup" class="login100-form-btn"></input>
					</div>
                    <div class="container-login100-form-btn m-t-32">
						<i>Do you have account?<a href="./?action=login">Login</a></i>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="foote-wrap mt-5" style="width: 100%;height: 70px; background-color: rgb(214, 214, 214)">
           <table style="width: 100%;">
            <tr><td></td></tr>
             <tr>
            
    
                 <th>
                 <b>Giảng viên hỗ trợ: GV.Điền Thị Hông Hà</b><br>
                    <b>Chủ Nhiệm Đề Tài: Nguyễn Đăng Nhân</b><br>
                    <i>18103100002-DHTI12A1HN </i></th>
               
            </tr>
           </table>
       </div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>