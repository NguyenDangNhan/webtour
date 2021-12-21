<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./Views/web.css"/>
        <link rel="stylesheet" type="text/css" href="Public/client/css/main.css">
    <link rel="stylesheet" type="text/css" href="Public/client/css/util.css">
     <style>
.pagination a {
   color: black;
   float: left;
   padding: 8px 16px;
   text-decoration: none;
   transition: background-color .3s;
 }
/* thiết lập style cho class active */
 .pagination a.active {
   background-color: dodgerblue;
   color: white;
 }
/* thêm màu nền khi người dùng hover vào class không active */
 .pagination a:hover:not(.active) {
   background-color: #ddd;
 }
 .cuttext{
    {
    height: 10px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
 }
.btnadd{
    border: 0.1px hsl(145, 84%, 45%) solid;
    background-color: hsl(145, 84%, 45%);
    color:#f8f9fa;
    border-radius: 5px;
    width: 100px;
    height: 30px;
    padding: 10px;
 }
     </style>
        <title>Uneti-Du lịch</title>
    </head>
    <body>
       <table class="bhd" >
           <tr >
            <td >
            <a class="RTC mg fcl" style="text-decoration: none"> trang chủ</a>
            <?php
              if($check)
                {
                 if( $level=='ad')
                 {echo '<span class="right" style="margin-left: 60%;"><a class="fcl bd" href="./admin" style="text-decoration: none">Quản lí web</a>&nbsp&nbsp'; }
                else{echo '<span class="right" style="margin-left: 65%;">';}
                 echo '<a class="fcl bd" href="./?controllers=sale&&id='.$check.'" style="text-decoration: none">Danh sách tour đã đặt</a> &nbsp
                    <a class="fcl bd" href="./?controllers=contact" style="text-decoration: none">Liên hệ</a> &nbsp
                    <a class="fcl bd" href="./" style="text-decoration: none">'.$check.'(Log Out)</a> &nbsp
                </span>';}
              else
              {echo '<span class="right" style="margin-left: 85%;">
               
                <a class="fcl bd" style="text-decoration: none" type="submit" href="./?action=login">Đăng Nhập</a>
            </span>';
            }
            ?>
            </td>
           </tr>
       </table>
       <div class="container4">
        <table  >
            <tr >
             <td >
                <a class="mg-icon"><img src="./Views/image/logo.png" ></a>
             </td>
             <td >
               <a class="font-icon" style="margin-left:340px;">UNETI 
                <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp NƠI CUNG CẤP VÀ PHÂN PHỐI TOUR DU LỊCH</a>
            </td>
            </tr>
            <tr>
                <td>
                   <br><br>
                </td>
            </tr>
           
        </table>
        <table style="width: 1120px;">
            <tr>
                <th colspan="4" class="font-icon">
                  
                </th>
            </tr>
            <tr><td><br></br></td</tr>
            <tr >
                <th>
                    <div class="fl-left" id="display">
                        <?php 
                         if($check)
                         {for($i=0;$i<count($categorys);$i++)
                            { echo  '<div  class="card" ><img src="'.$categorys[$i]['image'].'" alt="Avatar" style="width: 100%;"><h4><a style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[$i]['id'].'&&tk='.$check.'" class="cuttext">'.$categorys[$i]['content'].'</a></h4>
                              <br>  
                              <a class="btnadd" style="text-decoration: none" href="./?controllers=add&&mt='.$categorys[$i]['id'].'&&id='.$check.'">Đặt Tour</a>
                                
                              </div>';} 

                         }
                         else{
                            for($i=0;$i<count($categorys);$i++)
                            { echo  '<div  class="card" ><img src="'.$categorys[$i]['image'].'" alt="Avatar" style="width: 100%;"><h4><a style="text-decoration: none" href="./?controllers=Product&&action=index&&id='.$categorys[$i]['id'].'&&tk='.$check.'" class="cuttext">'.$categorys[$i]['content'].'</a></h4>
                              </div>';} 

                         }
                          
                        ?>
                    </div>
                </th>
            </tr>
            <tr>
                <th colspan="4" >
                <div class="pagination" style="margin-left:450px;">
                <?php
                if(isset($_COOKIE['page']))
                {
                    for($page = 1; $page<=$_COOKIE['page']; $page++) {
                        echo '<a href = "./?controllers=back&&page=' . $page . '">' . $page . '</a>';}
                }
                 ?>
                 </div>
                </th>
            </tr>
        </table>
          
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
    
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>
