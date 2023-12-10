<?php
$user_name = "root";
$password = "root";
$server = "localhost";
$db = "lord_sa";
$regno1 = $_POST ['regno1'];
$conn = mysql_connect($server,$user_name,$password);
if(!$conn){
    die('Could not Connect :'.mysql_error());
}
echo 'connected Succesfully';

$db_f = mysql_select_db($db);
if(array_key_exists('button1', $_POST)) { 
    button1(); 
} 
else if(array_key_exists('button2', $_POST)) { 
    button2(); 
} 
function button1() { 
    $sql = "select * from std where regno = '".$regno1."'";
    $r1 = mysql_query($sql);
    $rec = mysql_fetch_array($r1);
    echo "<br>Mark List";
    echo "<br>=========";
    echo "<br>Register no  :".$rec['regno'];
    echo "<br>Name  :".$rec['name'];
    echo "<br>Age  :".$rec['age'];
    echo "<br>Batch  :".$rec['batch'];
    echo "<br>Mark 1  :".$rec['m1'];
    echo "<br>Mark 2  :".$rec['m2'];
    echo "<br>Mark 3  :".$rec['m3'];
    echo "<br>Total Mark  :".$rec['tm'];
} 
function button2() { 
    echo "This is Button2 that is selected"; 
} 