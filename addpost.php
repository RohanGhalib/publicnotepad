<?php
include 'db.php';
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $note = $_POST['note'];
    $sql = "INSERT INTO notes (title, note) VALUES ('$title', '$note')";
    $result = mysqli_query($conn, $sql);
    if($result){
        $inserted_id = mysqli_insert_id($conn);
        header("Location: view_note.php?id=" . $inserted_id);
    }else{
        echo "Failed to add note";
    }
}
?>
