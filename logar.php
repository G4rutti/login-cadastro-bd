<?php
session_start();
include('conexao.php');
 
if(empty($_POST['vascao']) || empty($_POST['senhazada'])) {
	header('Location: login.php');
	exit();
}
 
$email = mysqli_real_escape_string($conn, $_POST['vascao']);
$senha = mysqli_real_escape_string($conn, $_POST['senhazada']);
 
$query = "select id from cadastro where email = '{$email}' and senha = md5('{$senha}')";
 
$result = mysqli_query($conn, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 0) {
    header('location: login.php');
    exit();
} else {
    $_SESSION['vascao'] = $email;
	header('Location: painel.php');
	exit();
}
