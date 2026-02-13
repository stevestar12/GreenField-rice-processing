<?php
require '../db_config.php';
if (!isset($_SESSION['admin_id'])) { header('Location: login.php'); exit; }
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']); $stmt = $mysqli->prepare("DELETE FROM messages WHERE id=?"); $stmt->bind_param('i',$id); $stmt->execute(); $stmt->close();
    header('Location: messages.php'); exit;
}
$res = $mysqli->query("SELECT * FROM messages ORDER BY created_at DESC");
?>
<!doctype html><html><head><meta charset="utf-8"><title>Messages</title><link rel="stylesheet" href="../assets/style.css"></head><body>
<header class="admin-header" style="padding:12px 18px;background:#2e5b27;color:#fff">
  <div>Messages</div>
  <div><a href="dashboard.php" style="color:#fff;margin-right:8px">Dashboard</a> <a href="logout.php" style="color:#fff">Logout</a></div>
</header>
<div class="container">
  <h3>Customer Messages</h3>
  <table class="table">
    <thead><tr><th>Name</th><th>Phone</th><th>Message</th><th>Sent</th><th>Action</th></tr></thead>
    <tbody>
    <?php while($m = $res->fetch_assoc()): ?>
      <tr>
        <td><?php echo htmlspecialchars($m['name']) ?></td>
        <td><?php echo htmlspecialchars($m['phone']) ?></td>
        <td><?php echo nl2br(htmlspecialchars($m['message'])) ?></td>
        <td><small class="muted"><?php echo $m['created_at'] ?></small></td>
        <td><a href="?delete=<?php echo $m['id'] ?>" onclick="return confirm('Delete?')">Delete</a></td>
      </tr>
    <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body></html>
