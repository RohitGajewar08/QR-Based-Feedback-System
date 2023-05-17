<?php
if (isset($_POST['delete'])){
$db_conn = mysqli_connect('localhost', 'root', '', 'teacher_db');
mysqli_query($db_conn, "DELETE FROM qrcode_teacher");
mysqli_close($db_conn);
}
?>


