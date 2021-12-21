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
    <?php 
    $row=[];
    $MaTuor=$_GET['id'];    
    $conn = mysqli_connect('localhost','root','','shoptour') or die('connect failed');
    mysqli_query($conn,'SET NAMES UTF8');
    $sql = "SELECT * FROM listtour where id = $MaTuor ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    echo "<form action='../setupdate.php/?id=$MaTuor' method='post'>";   
   
  echo  '<div class="panel panel-warning">
                  <div class="panel-heading">
                        <h3 class="panel-title">Cập nhật tour du lịch 
                        <a href="../Display.php" > <i class="glyphicon glyphicon-remove navbar-right">&nbsp</i> </a>
                        </h3>
                        
                  </div>
                  <div class="panel-body">
                  <label for="">Ngày xuất phát</label>
                  <input type="text" class="form-control" size="20" name="ngayxp" value="'.$row['ngayxp'].'"/>
				          <label for="">Giá</label>
                 <input type="text" class="form-control" size="20" name="gia" value="'.$row['gia'].'"/>
				          <label for="">Ngày về</label>
                 <input type="text" class="form-control" size="20" name="ngayve" value="'.$row['ngayve'].'"/>
                 <label for="">Content</label>
                 <input type="text" class="form-control" size="20" name="tomtat" value="'.$row['tomtat'].'"/>
                 <label for="">Link image</label>
                 <input type="text" class="form-control" value="'.$row['image'].'" size="20" name="image"/>
                 <br></br>
                 <input type="submit" value="cập nhật" class="btn btn-large btn-block btn-primary"></input>
                 
                 
                 </div>       
            </div>
            </div>
	</div>
    </form>' ?> 
	</body>
</html>


