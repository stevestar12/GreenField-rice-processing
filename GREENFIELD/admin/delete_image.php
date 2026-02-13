<?php
session_start();
include("../db_config.php");

if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

$id = intval($_GET['id']);

$get = $conn->prepare("SELECT image_path FROM gallery WHERE id=?");
$get->bind_param("i", $id);
$get->execute();
$get->bind_result($img);
$get->fetch();
$get->close();

unlink("../uploads/".$img);

$del = $conn->prepare("DELETE FROM gallery WHERE id=?");
$del->bind_param("i", $id);
$del->execute();

header("Location: gallery_manage.php");
