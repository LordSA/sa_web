<?php
$user_name = "root";
$password = "root";
$server = "localhost";
$db = "lord_sa";
$regno = $_POST ['regno'];
$name = $_POST ['name'];
$age = $_POST ['age'];
$batch = $_POST ['batch'];
$m1 = $_POST ['m1'];
$m2 = $_POST ['m2'];
$m3 = $_POST ['m3'];
$tm = $m1 + $m2 + $m3;
$conn = mysql_connect($server,$user_name,$password);
if(!$conn){
    die('Could not Connect :'.mysql_error());
}
echo 'connected Succesfully';

$db_f = mysql_select_db($db);

if($db_f){
    $sql = "insert into std values ($regno,'$name',$age,'$batch',$m1,$m2,$m3,$tm)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
}
else
echo 'Db not Found';
?>