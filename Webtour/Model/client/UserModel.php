<?php

class UserModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function signup($username, $password, $fullName,$phone,$email)
	{	
		$sql = "INSERT INTO users (username, passwd, full_name, phone, email, level)
							VALUES ('$username', '$password', '$fullName','$phone' ,'$email','user')";
		$query=mysqli_query($this->db->conn,$sql);
		if($query)
		{
				$message = "Đã đăng ký thành công";
				echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else {
			$message = "Tài khoản đã tồn tại";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}				
		
	}
	public function add($username,$id, $ngayxp,$ngayve,$gia)
	{	
		$sql = "INSERT INTO giohang (username, id, ngayxp, ngayve, gia)
							VALUES ('$username', '$id', '$ngayxp', '$ngayve', '$gia')";
		$query=mysqli_query($this->db->conn,$sql);
		if($query)
		{
				$message = "Đã  thêm thành công";
				echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else {
			$message = "lỗi";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}				
		
	}
	public function contact($username,$content)
	{	
		$sql = "INSERT INTO contact (username, content)
							VALUES ('$username', '$content')";
		$query=mysqli_query($this->db->conn,$sql);
		if($query)
		{
				$message = "Đã gửi yêu cầu mong bạn chờ phản hồi ";
				echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else {
			$message = "lỗi";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}				
		
	}
	public function login($username, $password)
	{	
		$sql = "SELECT * FROM users  ";
		$query=mysqli_query($this->db->conn,$sql);
	    if( mysqli_num_rows($query)!=0)
		   { while($row = mysqli_fetch_array($query)):
                if($row['username']==$username&&$row['passwd']==$password)
			       {return $row['username'];} 
          endwhile;}
		else
		   {return  NULL;}
		
	}
	public function checkLevel($username)
	{	  if($username)
		{
		$sql = "SELECT * FROM users where username = '$username'  ";
		$query=mysqli_query($this->db->conn,$sql);
		    while($row = mysqli_fetch_array($query)):
			       {return $row['level'];} 
          endwhile;}
		else
		   {return  NULL;}
		
	}

	public function  display() {
        if (!isset ($_GET['page']) ) {

			$page = 1;
			
			} else {
			
			$page = $_GET['page'];
			
			}
		$results_per_page = 12;
		$page_first_result = ($page-1) * $results_per_page;
		$query ="SELECT * FROM listtour ";
        $result = mysqli_query($this->db->conn, $query);
        $number_of_result = mysqli_num_rows($result);
		$number_of_page = ceil ($number_of_result / $results_per_page);
		setcookie("page", $number_of_page, time() + 6000, "/"); 
		$query = "SELECT * FROM listtour LIMIT ".$page_first_result.','.$results_per_page;
        $result2 = mysqli_query($this->db->conn, $query);
	    return $result2;
	}
	public function  chitiettour($id) {
		$query = "SELECT * FROM listtour Where id = $id ";
        $result2 = mysqli_query($this->db->conn, $query);
	    return $result2;
	}
}