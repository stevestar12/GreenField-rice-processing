<?php
require '../db_config.php';
if (!isset($_SESSION['admin_id'])) { header('Location: login.php'); exit; }
$id = intval($_GET['id'] ?? 0);
if ($id>0) {
    $stmt = $mysqli->prepare("DELETE FROM services WHERE id = ?");
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $stmt->close();
}
header('Location: services_manage.php');
exit;
?>
