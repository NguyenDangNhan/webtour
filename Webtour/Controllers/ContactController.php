<?php
class ContactController extends BaseController
{   public function __construct()
	{
        require('./Model/Database.php');
       
	}
    public function index(){
        require('./Views/contact.php');
        require('./Model/client/UserModel.php');
        $userModel = new UserModel();
        $username = $content=NULL;
		if (isset($_POST['contact'])) {
			if (empty($_POST['username'])) {
                echo "<script>alert('Cần điền tên tài khoải')</script>";
			} else {
				$username = $_POST['username'];
			}
			if (empty($_POST['content'])) {
                echo "<script>alert('Cần điền nội dung')</script>";
			} else {
				$content = $_POST['content'];
			}
			if($username&&$content)
            {$userModel->contact($username, $content);}
       
    } }
    public function show(){
        echo __METHOD__;
    }
}
?>