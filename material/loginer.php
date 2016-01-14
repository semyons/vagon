<?php 
    $connect= mysql_connect('localhost','semyon','semyon') or die(mysql_error());
    mysql_select_db('users');

    if (isset($_POST['submit'])){
    	$login = $_POST['login'];
    	$password = $_POST['password'];
    	$query = mysql_query("SELECT * FROM users_info WHERE login = $login");
    	if ($_user_data['password']=$password){
    		header('Location: main.html');}
    		else {alert ('ne ok');}
    	}
?>