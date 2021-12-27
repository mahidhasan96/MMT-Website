
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "login";

mysql_connect($host, $user, $password);
mysql_select_db(dbname);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from registerfrom where username='".$uname."'AND password='".password."'limit 1";

    $result=mysql_query($sql);
    if(mysql_num_rows($result)==1){
        echo"You Have Successfully Logged in"
        exit();
    }
    else{
        echo"incorrect password";
        exit();
    }
}

?>
