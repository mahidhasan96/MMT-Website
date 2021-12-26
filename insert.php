<?php
$username = $_POST['username'];
$password = $_POST['password'];
$Email = $_POST['Email'];
$phonCode = $_POST['phoneCode']
$phone = $_POST['phone'];
$gender = $_POST['gender'];
if(!empty($username)  ।। !empty($password) ।। !empty($Email) ।। !empty($phonCode) ।। !empty($phone) ।। !empty($gender)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "register from"

  //create connection
  $conn = new mysquli($host, $dbusername, $dbpassword, $dbname);
  if(mysqli_connect_error()){
      die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error())
  }else{
      $SELECT = "SELECT Email From register where Email = ? Limit 1"
      $INSERT = "INSERT Into register(username, password, email, phonecode, phone, gender) values(?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_parm("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_row;
        if($rnum==0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssii", $username, $password, $phonCode, $phone, $gender);
            $stmt->execute();
            echo "new record inserted successfully";
        }else{
            echo"someone alrady register using this email";
        }
        $stmt->close();
        $conn->close();

  }

}
else{
   echo "All field are required";
   die();
}
?>