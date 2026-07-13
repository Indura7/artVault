<?php
session_start(); 
include_once __DIR__ . '/../config/db_config.php';

if (!isset($_SESSION['user_id'])) {
    die("Error: You must be logged in to upload artwork!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $artist_id   = $_SESSION['user_id']; 
    $admin_id    = null; //when first upload happens admin hasn't seen yet
    $category_id = intval($_POST['category_id']);
    $title       = $_POST['title'];
    $description = $_POST['description'];
    $price       = doubleval($_POST['price']);
    $status      = 'pending';

    
    $file_ext = strtolower(pathinfo($_FILES["artwork_image"]["name"], PATHINFO_EXTENSION));
    $image_path = "assets/images/artwork_uploads/art_" . time() . "." . $file_ext;

    $sql = "INSERT INTO artwork (artist_id, admin_id, category_id, title, description, image_path, price, status) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("iiisssds", $artist_id, $admin_id, $category_id, $title, $description, $image_path, $price, $status);
    
    if ($stmt->execute()) {
        echo "<script>alert('Masterpiece submitted successfully! Awaiting approval.'); window.location.href='upload.php';</script>";
    } else {
        echo "Database Error Execution Failure: " . $stmt->error;
    }
}
?>