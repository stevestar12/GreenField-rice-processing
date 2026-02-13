<?php
require '../db_config.php';
if (!isset($_SESSION['admin_id'])) { header('Location: login.php'); exit; }
$id = intval($_GET['id'] ?? 0);
if ($id>0) {
    $stmt = $mysqli->prepare("SELECT filename FROM gallery WHERE id=?");
    $stmt->bind_param('i',$id); $stmt->execute(); $stmt->bind_result($fn); $stmt->fetch(); $stmt->close();
    if ($fn && file_exists(__DIR__ . '/../uploads/' . $fn)) unlink(__DIR__ . '/../uploads/' . $fn);
    $stmt = $mysqli->prepare("DELETE FROM gallery WHERE id = ?");
    $stmt->bind_param('i',$id); $stmt->execute(); $stmt->close();
}
header('Location: gallery_manage.php'); exit;
?>
