<?php
class DeleteController extends BaseController
{   public function __construct()
	{
        require('./Model/Database.php');
       
	}
    public function index(){
        $MaTour= $_REQUEST['mt'];
        $usname= $_REQUEST['id'];
        $conn=mysqli_connect('localhost','root','','shoptour') or die ('connect failed');
        
        $sql = "DELETE FROM giohang Where id = $MaTour and username = $usname ";
        $query=mysqli_query($conn,$sql);
        if($query)
		{
				$message = "Đã xóa thành công";
				echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else {
			$message = "Không thể xóa";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}		
        require("./Views/dstour.php");
    } 
    public function show(){
        echo __METHOD__;
    }
}
?>


