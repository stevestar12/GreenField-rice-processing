<?php
session_start();
include("../config.php");

// --- SECURITY CHECK: Only logged-in admins ---
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// --- FILE UPLOAD LOGIC ---
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    if (!empty($_FILES['image']['name'])) {

        // allowed file types
        $allowed_ext = ['jpg','jpeg','png','gif','webp'];
        $file_name = $_FILES['image']['name'];
        $file_tmp  = $_FILES['image']['tmp_name'];
        $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // validate extension
        if (!in_array($file_ext, $allowed_ext)) {
            $_SESSION['error'] = "Invalid file type. Only JPG, PNG, GIF, WEBP allowed.";
            header("Location: dashboard.php?page=gallery");
            exit();
        }

        // create uploads folder if missing
        if (!is_dir("../uploads")) {
            mkdir("../uploads", 0777, true);
        }

        // generate unique file name
        $new_filename = "img_".time().".".$file_ext;
        $upload_path = "../uploads/" . $new_filename;

        // move file
        if (move_uploaded_file($file_tmp, $upload_path)) {

            // save to database
            $stmt = $conn->prepare("INSERT INTO gallery (image_path) VALUES (?)");
            $stmt->bind_param("s", $new_filename);

            if ($stmt->execute()) {
                $_SESSION['success'] = "Image uploaded successfully!";
            } else {
                $_SESSION['error'] = "Database error while saving image.";
            }

            $stmt->close();
        } else {
            $_SESSION['error'] = "Failed to upload file.";
        }

    } else {
        $_SESSION['error'] = "No image selected.";
    }

    header("Location: dashboard.php?page=gallery");
    exit();
}
?>
