<?php
session_start();
include("../db_config.php");

if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

$result = $conn->query("SELECT * FROM gallery ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage Gallery</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="admin-container">
<h2>Manage Gallery</h2>

<?php while ($row = $result->fetch_assoc()) { ?>
  <div style="margin-bottom:15px;">
    <img src="../uploads/<?php echo $row['image_path']; ?>" width="150">
    <a href="delete_image.php?id=<?php echo $row['id']; ?>">❌ Delete</a>
  </div>
<?php } ?>

</div>
</body>
</html>
