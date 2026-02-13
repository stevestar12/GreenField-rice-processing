<?php
require '../db_config.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: login.php'); exit; }
$username = trim($_POST['username']); $password = $_POST['password'];

$stmt = $mysqli->prepare("SELECT id,password FROM admins WHERE username = ?");
$stmt->bind_param('s',$username);
$stmt->execute();
$stmt->bind_result($id,$hash);
if ($stmt->fetch()) {
    if (password_verify($password, $hash)) {
        $_SESSION['admin_id'] = $id;
        $_SESSION['admin_user'] = $username;
        header('Location: dashboard.php');
        exit;
    }
}
$stmt->close();
header('Location: login.php?err=Invalid credentials');
exit;
?>
