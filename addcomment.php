<?php
include 'db.php';
if(isset($_POST["id"])){
    $id = $_POST["id"];
    $comment = $_POST["comment"];
    $stmt = $conn->prepare("INSERT INTO replys (note_id, reply) VALUES (?, ?)");
    if ($stmt) {
        $stmt->bind_param("is", $id, $comment);
        $stmt->execute();
        $stmt->close();
        header("location: view_note.php?id=$id");
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

}else{
    header("location: index.php");
}