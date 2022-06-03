<?php
require_once("connection.php");
if(isset($_POST['submit']))
    {
            $studentName = $_POST['s_name'];
            $studentemail = $_POST['s_email'];
            $studentpassword = $_POST['s_password'];

            $query = "insert into exam_register(s_name,s_email,s_password) values('$studentName','$studentemail','$studentpassword')";
            $result = mysqli_query($conn,$query);

if($result)
            {
                
                header("location:Loginform.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
}
?>