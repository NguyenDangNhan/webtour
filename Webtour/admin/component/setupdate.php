<?php
 $MaTour= $_GET['id'];
 $h3=$_POST['ngayxp'];
 $h6=$_POST['ngayve'];
 $h7=$_POST['tomtat'];
$h8=$_POST['image'];
$h9=$_POST['gia'];
 $conn=mysqli_connect('localhost','root','','shoptour') or die ('connect failed');
 $sql= "UPDATE listtour SET ngayxp = '$h3', ngayve = '$h6', tomtat ='$h7', image ='$h8', gia='$h9'   WHERE id = $MaTour";

 $result= $conn->query($sql);
 if($result)
  {header('Location:../display.php?action=update');}
 else  
 {echo "lỗi";}
 $conn->close();
?>