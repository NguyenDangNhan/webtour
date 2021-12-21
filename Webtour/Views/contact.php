<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./Views/web.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Quản Lý web bán tour du lịch</title>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<div>
    <table class="bhd" >
           <tr >
            <td >
            <a class="RTC mg fcl" href="./?controllers=back" style="text-decoration: none">← Quay lại trang chủ</a>
                <span class="right" style="margin-left: 80%;">
                </span>
            </td>
           </tr>
       </table>
       <br></br>
 <div class="container">
  <form action="./?controllers=contact" method="POST">
    <label for="fname">username</label>
    <input type="text" id="fname" name="username" value="<?php echo $_COOKIE['name'] ?>" placeholder="Your account..">
    <label for="subject">Liên Hệ</label>
    <textarea id="subject" name="content" placeholder="Write something.." style="height:200px"></textarea>
    <input type="submit" value="Gửi" name="contact">
  </form>
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
	</body>
</html>