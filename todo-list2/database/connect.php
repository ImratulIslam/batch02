<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'todo-list2';
//query dibo
$conn_mysql = new mysqli($host, $username, $password, $dbname); 
echo " connection successful";
//ERROR HANDLING
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "PDO connection failed:" . $e->getMessage();
}

//query check
if ($conn_mysql->connect_error) {
    die("connection failed" . $conn_mysql->connect_error); 
}
?>