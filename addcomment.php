<?php
include 'db.php';
if(isset($_POST["id"])){
    $id = $_POST["id"];
    $comment = $_POST["comment"];

    // Check if the id exists in the notes table
    $check_stmt = $conn->prepare("SELECT id FROM notes WHERE id = ?");
    if ($check_stmt) {
        $check_stmt->bind_param("i", $id);
        $check_stmt->execute();
        $check_stmt->store_result();
        
        if ($check_stmt->num_rows > 0) {
            // id exists, proceed to insert the comment
            $stmt = $conn->prepare("INSERT INTO replys (note_id, reply) VALUES (?, ?)");
            if ($stmt) {
                $stmt->bind_param("is", $id, $comment);
                $stmt->execute();
                $stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
            }
        }
        $check_stmt->close();
    } else {
        echo "Error preparing check statement: " . $conn->error;
    }

    header("location: view_note.php?id=$id");
}else{
    header("location: index.php");
}
?>