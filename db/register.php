<?php

$username = $_POST['uname'];
$password = $_POST['psw'];

// Connect to the database
$con = mysql_connect("localhost","root","");

// Make sure we connected successfully
if(! $con)
{
    //die - выводит сообщение и прекращает выполнение текущего скрипта.
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("broccoli_db",$con);

$result = mysql_query("INSERT INTO users (username, password) VALUES ('$username', '$password')");

if($result){
    echo '<pre>';
    echo 'Тебя добавили в БД';
    echo '</pre>';
}
 else {
    echo '<pre>';
    echo 'ERROR ' . mysql_error();
    echo '</pre>';
}

?>
