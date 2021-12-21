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
<?php
$update=$_REQUEST['action']??'index';
if($update=='update')
{
  $message = "cập nhật thành công";
  echo "<script type='text/javascript'>alert('$message');</script>";
}if($update=='delete')
{
  $message = "xóa thành công";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
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
  <div class="panel panel-default">
            <div class="panel-body">
            <?php 
            echo '<form class="navbar-form action="./?action=display" navbar-left" method="post">
            <div class="input-group">
            <input 
               type="text" 
               class="form-control" 
               placeholder="Search= MaTour or username " 
               name="search" >
               <div class="input-group-btn"  >
               <button name ="add" type="submit" class="btn btn-default">
               <i class="glyphicon glyphicon-search" ></i></button>
            <a  href="./giohangtour.php" class="btn btn-default" type="button" >
            <i  class="glyphicon glyphicon-repeat"></i>
            </a>
            </div>
            </div>
          </div>
        </form>
	 <table class="table align-middle" >
        <thead>
          <tr>
           <th scope="col">ID khách hàng</th>
            <th scope="col">Mã Tour du lịch</th>
            <th scope="col">Ngày xuất phát</th>
            <th scope="col">Ngày về</th>
            <th scope="col">Giá</th>
          </tr>
        </thead>
        <tbody>';
	
    	$conn = mysqli_connect('localhost','root','','shoptour') or die('connect failed');
    	mysqli_query($conn,'SET NAMES UTF8');
			if(isset($_POST['add']))
      { $h1=$_POST['search'];
        $sql = "SELECT * FROM giohang where id = '$h1' or username = '$h1' ";
        $result = mysqli_query($conn,$sql);}
      else
      {$sql = "SELECT * FROM giohang ";
			 $result = mysqli_query($conn,$sql);}
		 ?>
		<?php while($row = mysqli_fetch_array($result)): ?>
		 <tr>
          <th scope="row"><?php echo $row['username']?></th>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['ngayxp']?></td>
          <td><?php echo $row['ngayve']?> </td>
          <td><?php echo $row['gia']?>VND</td>
		  




		  
            </td>
          
        </tr>
		 <?php endwhile; ?>
        </tbody>
      </table>
	  
       </div>  
	</div>
  <br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
       <div class="navbar navbar-inverse ">
            <div class="container">
              <p class="navbar-text center">@Made by Nguyễn Đăng Nhân - Tin12A1HN - 18103100002 - uneti</p>
            </div>
       </div> 
  </div>
   
	</body>
</html>










