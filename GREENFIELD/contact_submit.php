<?php
require 'db_config.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: contact.php'); exit; }
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);
if ($name==='' || $phone==='' || $message==='') { header('Location: contact.php'); exit; }

$stmt = $mysqli->prepare("INSERT INTO messages (name, phone, message) VALUES (?, ?, ?)");
$stmt->bind_param('sss', $name, $phone, $message);
$stmt->execute();
$stmt->close();
header('Location: contact.php?sent=1');
exit;
?>
