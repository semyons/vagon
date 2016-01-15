<?php
$hostname = "VH237.spaceweb.ru"; 
$username = "pazdnikova_users"; 
$password = "adminroot16"; 
$dbName = "pazdnikova_users"; 


$userstable = "users"; 

mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение "); 

mysql_select_db($dbName) or die(mysql_error());  


if (isset($_POST['submit'])){
    	$login = $_POST['login'];
    	$password = $_POST['password'];

    	$query = "SELECT * FROM $userstable";

    	$res = mysql_query($query) or die(mysql_error()); 
    	$row = mysql_fetch_array($res);

    	if ($row['login'] == $login and $row['password']==$password){
    		header('Location: main.html');
    	}
    	else {
    			    			echo '<script language="javascript">';
echo 'alert("Логин или пароль неверные")';
echo '</script>';
    		}
    }
?>