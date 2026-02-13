<?php
// create_admin.php
require 'db_config.php';

$username = 'admin';
$password = 'admin123'; // change this after first login!

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $mysqli->prepare("INSERT IGNORE INTO admins (username, password) VALUES (?, ?)");
$stmt->bind_param('ss', $username, $hash);
$stmt->execute();
if ($stmt->affected_rows) {
    echo "Admin user created: {$username} / {$password}";
} else {
    echo "Admin already exists or error.";
}
$stmt->close();
?>
