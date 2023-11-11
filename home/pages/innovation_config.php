<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action']; 
    $id = $_POST['id'];
    $title = $_POST['title'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $imageUrl = $_POST['imageurl'];

    function insertBlog($title, $type, $description, $imageUrl) {
        global $connection;
        
        $sql = "INSERT INTO blog (title, type, description, imageUrl) VALUES (?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssss", $title, $type, $description, $imageUrl);
        
        if ($stmt->execute()) {
          return true;
        } else {
          return false;
        }
    }

    function updateBlog($id, $title, $type, $description, $imageUrl) {
        global $connection;
        
        $sql = "UPDATE blog SET title = ?, type = ?, description = ?, imageUrl = ? WHERE id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ssssi", $title, $type, $description, $imageUrl, $id);
        
        if ($stmt->execute()) {
          return true;
        } else {
          return false;
        }
    }

    function deleteBlog($id) {
        global $connection;
        
        $sql = "DELETE FROM blog WHERE id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
          return true;
        } else {
          return false;
        }
    }

    // Call the appropriate function based on the action
    switch ($action) {
        case 'insert':
            if (insertBlog($title, $type, $description, $imageUrl)) {
                echo "Blog inserted successfully";
            } else {
                echo "Failed to insert blog";
            }
            break;

        case 'update':
            if (updateBlog($id, $title, $type, $description, $imageUrl)) {
                echo "Blog updated successfully";
            } else {
                echo "Failed to update blog";
            }
            break;

        case 'delete':
            if (deleteBlog($id)) {
                echo "Blog delete successfully";
            } else {
                echo "Failed to delete blog";
            }
            break;
    }
} else {
    echo "Failed connection";
}
?>