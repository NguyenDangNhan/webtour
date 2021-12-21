<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Quản Lý web bán tour du lịch</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div>
      <nav class="navbar navbar-inverse navbar-fixed-top"> 
      <div class="container-fluid">
        <div class="navbar-header active">
        <a class="navbar-brand " href="../../?controllers=back" >Trang chủ</a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="../index.php">Quản lí tài khoản</a></li>
          <li><a href="./Display.php">Quản lý thông tin các tour </a></li>
          <li><a href="./giohangtour.php">Quản lý đơn đặt </a></li>
          <li ><a href="./Design.php">Thêm tour du lịch</a></li>
        </ul>
        <form class="navbar-form navbar-right" action="/action_page.php" >
          <div class="input-group">
            
           
            
          </div>
		
        </form>
      </div>
     </nav>
	 <br></br><br></br>
	 <div class="container"> 
	 <form name="" method="post">
	 <div class="row">      
        <div class="panel panel-warning">
                  <div class="panel-heading">
                        <h3 class="panel-title">Điền thông tin tour du lịch</h3>
                  </div>
                  <div class="panel-body">
				          <label for="">Mã tour</label>
                  <input type="text" class="form-control" size="20" name="MaTour"/>
                  <label for="">Ngày bắt đầu</label>
                  <input type="text" class="form-control" size="20" name="ngayxp"/>
				          <label for="">Giá</label>
                 <input type="text" class="form-control" size="20" name="gia"/>
				          <label for="">Ngày về</label>
                 <input type="text" class="form-control" size="20" name="ngayve"/>
                 <label for="">Content</label>
                 <input type="text" class="form-control" size="20" name="tomtat"/>
                 <label for="">Link image</label>
                 <input type="text" class="form-control" value="https://i.vdoc.vn/data/image/2015/10/08/tieng-anh-du-lich-co-ban-bai-1.jpg" size="20" name="image"/>
                 
                </div>
				&nbsp &nbsp &nbsp
				<input name ="add" type="submit" value="Thêm mới" class="btn btn-primary">
                <input name="reset" type="reset" value="&nbsp Nhập lại &nbsp" class="btn btn-primary">
                <br><br/>
            </div>



<?php 
			$conn=mysqli_connect('localhost','root','','shoptour') or die ('connect failed');
               mysqli_query($conn, 'set name utf8');
			if(isset($_POST['add']))
			{
				$h1=$_POST['MaTour'];
				$h3=$_POST['ngayxp'];
				$h6=$_POST['ngayve'];
				$h7=$_POST['tomtat'];
        $h8=$_POST['image'];
        $h9=$_POST['gia'];
        $h10='';
				$sql="INSERT INTO listtour VALUES ('$h1','$h3','$h6','$h7','$h8','$h9','$h10')";				
				if($h1!=null)
				{
					$query=mysqli_query($conn,$sql);
					if($query)
                    {
							$message = "Đã thêm thành công";
							echo "<script type='text/javascript'>alert('$message');</script>";
					}
					else {
						$message = "Mã tour đã tồn tại";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}				
				}
				else{
					$message = "Hãy nhập lại mã tour";
						echo "<script type='text/javascript'>alert('$message');</script>";
				}
			}
		 ?>
</form>
<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
       <div class="navbar navbar-inverse ">
            <div class="container">
              <p class="navbar-text center">@Made by Nguyễn Đăng Nhân - Tin12A1HN - 18103100002 - uneti</p>
            </div>
       </div>  
<div>
		</body>
</html>