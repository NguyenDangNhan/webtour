<?php
 $MaTour= $_GET['id'];
 $conn=mysqli_connect('localhost','root','','shoptour') or die ('connect failed');
 
 $sql = "DELETE FROM listtour Where id = $MaTour ";
 $query=mysqli_query($conn,$sql);
 if($query)
 {   $message = "Đã xóa thành công ";
     echo "<script type='text/javascript'>alert('$message');</script>";
     header('Location:../Display.php?action=delete');
 }
 else  {echo "lỗi";}
?>
	