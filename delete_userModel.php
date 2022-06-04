<?php
class delete_userModel extends model
{
     public $title = 'El Borg ' . APP_VERSION;
     public $subtitle = '';
     public function delete_user(){
        $conn = new mysqli("localhost", "root", "", "miublog");
        $var_value = $_GET['name'];
$deleteQuery = "DELETE from users where id =$var_value; ";
$result = mysqli_query($conn, $deleteQuery);
if ($result) {
    echo "<script> alert('Admin succesfulyy deleted! ') </script>";
}
   }




}
