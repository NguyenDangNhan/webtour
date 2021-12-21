<?php
class CategoryController extends BaseController
{  
    public function __construct()
	{
        require('./Model/Database.php');
	}
    public function index(){
        require('./Model/client/UserModel.php');
        $userModel = new UserModel();
        $categorys = [];
        $result= $userModel->display();
        $check= NuLL;
        $level= NuLL;
        $username = $password = NULL;
        while($row = mysqli_fetch_array($result)):
            array_push($categorys,['id'=>$row['id'],'image'=>$row['image'],
                'content'=>$row['tomtat']]);
       endwhile;
       if (isset($_POST['login'])) {
        if (empty($_POST['username'])) {
            echo "<script>alert('Cần điền tên đăng nhập')</script>";
        } else {
            $username = $_POST['username'];
        }
        if (empty($_POST['pass'])) {
            echo "<script>alert('Cần điền tên mật khẩu')</script>";
        } else {
            $password = md5($_POST['pass']);
        }
        if($username&&$password)
        {$check=$userModel->login($username, $password);}
        if($check==NULL)
        {      $message = "Tài khoản hoặc mật khẩu chưa đúng";
          echo "<script type='text/javascript'>alert('$message');</script>";  }
      }
      
      if (session_id() === '') 
        {session_start();} 
      setcookie("name", $check, time() + 6000, "/"); 
      $level=$userModel->checkLevel($check);
      setcookie("level", $level, time() + 6000, "/"); 
      return $this->getPath('index',['categorys'=>$categorys],$check, $level);
    } 
   
    public function login(){
        require("./Views/login.php");
    }
    public function signUp(){
        require('./Views/signup.php');
        require('./Model/client/UserModel.php');
        $userModel = new UserModel();
        $username = $password = $fullName = $phone= $email=$passwordnl= NULL;
		if (isset($_POST['signup'])) {
			if (empty($_POST['username'])) {
                echo "<script>alert('Cần điền tên đăng nhập')</script>";
			} else {
				$username = $_POST['username'];
			}
			if (empty($_POST['pass'])) {
                echo "<script>alert('Cần điền tên mật khẩu')</script>";
			} else {
				$password = md5($_POST['pass']);
			}
            if (empty($_POST['passnhaplai'])) {
                echo "<script>alert('Cần điền tên mật khẩu')</script>";
			} else {
				$passwordnl = md5($_POST['passnhaplai']);
			}
			if (empty($_POST['full_name'])) {
                echo "<script>alert('Cần điền họ tên')</script>";
			} else {
				$fullName = $_POST['full_name'];
			}
            if (empty($_POST['phone'])) {
                echo "<script>alert('Cần điền Phone')</script>";
			} else {
				$phone = $_POST['phone'];
			}
            if (empty($_POST['email'])) {
                echo "<script>alert('Cần điền email')</script>";
			} else {
				$email = $_POST['email'];
			}
            if ($password!=$passwordnl) {
                echo "<script>alert('mật khẩu nhập lại chưa đúng')</script>";
			}
			if($username&&$password&&$fullName&&$phone&&$email&&$password==$passwordnl)
            {$userModel->signup($username, $password, $fullName,$phone,$email);}
		}

    }
    public function sign(){
        require("./Views/signup.php");		
		}
    
}

