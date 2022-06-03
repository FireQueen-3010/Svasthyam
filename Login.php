<?php
require_once("connection.php");
if(isset($_POST['submit']))
    {
        $studentName = $_POST['s_name'];
        $studentpassword = $_POST['s_password'];
        
            $query = "select * from user_register where s_name= '$studentName' AND s_password= '$studentpassword'";
            $result = mysqli_query($conn,$query);

            $num = mysqli_num_rows($result);
if($num==1)
            {
                header("location:blog.php");
            }
            else
            {
               header("location:index.php");
            }
}
?>